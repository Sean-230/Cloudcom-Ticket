<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TicketConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    public array $ticketData;

    /**
     * Create a new message instance.
     */
    public function __construct(array $ticketData)
    {
        $this->ticketData = $ticketData;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $orderId = $this->ticketData['order_id'] ?? 'NHF-2026';

        return new Envelope(
            subject: "🎟️ Konfirmasi E-Ticket: Neon Horizon Fest 2026 (#{$orderId})",
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.ticket-confirmation',
            with: [
                'data' => $this->ticketData,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
