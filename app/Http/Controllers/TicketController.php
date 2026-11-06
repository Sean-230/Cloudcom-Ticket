<?php

namespace App\Http\Controllers;

use App\Mail\TicketConfirmationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class TicketController extends Controller
{
    /**
     * Show the ticket registration form.
     */
    public function create()
    {
        return view('tickets.register');
    }

    /**
     * Handle incoming ticket registration and send the confirmation email.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'ticket_category' => 'required|string|in:VIP,FESTIVAL_A,CAT_1,CAT_2',
            'quantity' => 'required|integer|min:1|max:4',
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'identity_number' => 'required|string|max:30',
            'birth_date' => 'required|date',
            'terms_agreement' => 'nullable',
        ]);

        // Pricing dictionary
        $prices = [
            'VIP' => ['name' => 'VIP Diamond', 'price' => 2500000],
            'FESTIVAL_A' => ['name' => 'Festival A (Standing)', 'price' => 1650000],
            'CAT_1' => ['name' => 'Category 1 (Seated)', 'price' => 1200000],
            'CAT_2' => ['name' => 'Category 2 (Seated)', 'price' => 750000],
        ];

        $category = $prices[$validated['ticket_category']] ?? [
            'name' => $validated['ticket_category'],
            'price' => 0,
        ];

        $unitPrice = $category['price'];
        $taxRate = 0.11; // 11% PB1 / PPN
        $adminFee = 25000;
        $subtotal = $unitPrice * $validated['quantity'];
        $tax = (int) round($subtotal * $taxRate);
        $totalPrice = $subtotal + $tax + $adminFee;

        // Generate unique order reference
        $orderId = 'NHF-' . strtoupper(Str::random(4)) . '-' . rand(1000, 9999);

        $ticketData = [
            'order_id' => $orderId,
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'phone_number' => $validated['phone_number'],
            'identity_number' => $validated['identity_number'],
            'birth_date' => $validated['birth_date'],
            'ticket_category' => $validated['ticket_category'],
            'ticket_category_name' => $category['name'],
            'quantity' => $validated['quantity'],
            'unit_price' => $unitPrice,
            'subtotal' => $subtotal,
            'tax' => $tax,
            'admin_fee' => $adminFee,
            'total_price' => $totalPrice,
            'created_at' => now()->format('d M Y, H:i') . ' WIB',
        ];

        // Send confirmation email
        try {
            Mail::to($validated['email'])->send(new TicketConfirmationMail($ticketData));

            return back()->with('success', 'Pemesanan berhasil diproses untuk ' . $validated['full_name'] . ' (' . $validated['quantity'] . ' tiket ' . $category['name'] . '). E-Ticket konfirmasi resmi telah dikirim ke ' . $validated['email'] . ' (No. Pesanan: #' . $orderId . ').');
        } catch (\Throwable $e) {
            Log::error('Gagal mengirim email konfirmasi tiket: ' . $e->getMessage(), [
                'exception' => $e,
                'ticket_data' => $ticketData,
            ]);

            return back()->with('warning', 'Pemesanan berhasil dicatat (No. Pesanan: #' . $orderId . '), namun pengiriman email konfirmasi mengalami kendala teknis: ' . $e->getMessage());
        }
    }

    /**
     * Send a quick test email to verify SMTP configuration.
     * Accessible via GET /test-email?to=target@example.com
     */
    public function sendTestEmail(Request $request)
    {
        $recipient = $request->query('to', config('mail.from.address'));

        try {
            $sampleData = [
                'order_id' => 'TEST-' . rand(1000, 9999),
                'full_name' => 'Pengguna Uji Coba',
                'email' => $recipient,
                'phone_number' => '081234567890',
                'identity_number' => '3578000000000001',
                'birth_date' => '2000-01-01',
                'ticket_category' => 'VIP',
                'ticket_category_name' => 'VIP Diamond (Test Mode)',
                'quantity' => 1,
                'unit_price' => 2500000,
                'subtotal' => 2500000,
                'tax' => 275000,
                'admin_fee' => 25000,
                'total_price' => 2800000,
                'created_at' => now()->format('d M Y, H:i') . ' WIB',
            ];

            Mail::to($recipient)->send(new TicketConfirmationMail($sampleData));

            return response()->json([
                'status' => 'success',
                'message' => 'Email uji coba berhasil dikirim ke: ' . $recipient,
                'from' => config('mail.from.address'),
                'order_id' => $sampleData['order_id'],
            ]);
        } catch (\Throwable $e) {
            Log::error('Test email failed: ' . $e->getMessage());

            return response()->json([
                'status' => 'error',
                'message' => 'Gagal mengirim email: ' . $e->getMessage(),
                'from' => config('mail.from.address'),
            ], 500);
        }
    }
}
