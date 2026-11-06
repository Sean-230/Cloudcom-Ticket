<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pemesanan Tiket</title>
    <style>
        body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
        table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
        img { -ms-interpolation-mode: bicubic; border: 0; outline: none; text-decoration: none; }
        body { margin: 0; padding: 0; width: 100% !important; background-color: #0b0f19; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; color: #e2e8f0; }
        .wrapper { width: 100%; table-layout: fixed; background-color: #0b0f19; padding-bottom: 40px; }
        .main-container { max-width: 600px; margin: 0 auto; background-color: #111827; border: 1px solid #1f2937; border-radius: 16px; overflow: hidden; box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.5); }
        .header { background: linear-gradient(135deg, #7c3aed 0%, #db2777 100%); padding: 32px 24px; text-align: center; }
        .badge { display: inline-block; padding: 4px 12px; background-color: rgba(255, 255, 255, 0.2); border-radius: 9999px; font-size: 11px; font-weight: 700; color: #ffffff; letter-spacing: 0.05em; text-transform: uppercase; margin-bottom: 12px; }
        .header h1 { margin: 0 0 6px 0; font-size: 24px; font-weight: 800; color: #ffffff; letter-spacing: -0.025em; }
        .header p { margin: 0; font-size: 13px; color: #f3e8ff; }
        .body-content { padding: 32px 28px; }
        .greeting { font-size: 16px; font-weight: 600; color: #ffffff; margin-bottom: 12px; }
        .intro-text { font-size: 14px; line-height: 1.6; color: #94a3b8; margin-bottom: 24px; }
        .order-card { background-color: #1e293b; border: 1px solid #334155; border-radius: 12px; padding: 20px; margin-bottom: 24px; }
        .order-header { border-bottom: 1px dashed #475569; padding-bottom: 12px; margin-bottom: 16px; }
        .order-label { font-size: 11px; font-weight: 700; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.05em; }
        .order-id { font-size: 20px; font-weight: 800; color: #a855f7; margin-top: 2px; }
        .info-row { display: table; width: 100%; margin-bottom: 10px; }
        .info-cell-left { display: table-cell; width: 40%; font-size: 13px; color: #94a3b8; }
        .info-cell-right { display: table-cell; width: 60%; font-size: 13px; font-weight: 600; color: #f8fafc; text-align: right; }
        .price-divider { border-top: 1px solid #334155; margin: 16px 0 12px 0; padding-top: 12px; }
        .total-row .info-cell-left { font-size: 15px; font-weight: 700; color: #ffffff; }
        .total-row .info-cell-right { font-size: 18px; font-weight: 800; color: #10b981; }
        .concert-details { background-color: #0f172a; border-left: 4px solid #a855f7; border-radius: 4px; padding: 14px 16px; margin-bottom: 24px; }
        .concert-details h4 { margin: 0 0 6px 0; font-size: 13px; color: #c084fc; font-weight: 700; text-transform: uppercase; }
        .concert-details p { margin: 0; font-size: 12px; color: #cbd5e1; line-height: 1.5; }
        .notice-box { background-color: rgba(234, 179, 8, 0.1); border: 1px solid rgba(234, 179, 8, 0.25); border-radius: 8px; padding: 14px; margin-bottom: 24px; font-size: 12px; color: #fef08a; line-height: 1.5; }
        .footer { padding: 24px 28px; text-align: center; border-top: 1px solid #1f2937; background-color: #0d121f; font-size: 12px; color: #64748b; }
        .footer a { color: #a855f7; text-decoration: none; }
    </style>
</head>
<body>
    <div class="wrapper">
        <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
            <tr>
                <td align="center" style="padding: 30px 15px;">
                    <div class="main-container">
                        
                        <!-- Header -->
                        <div class="header">
                            <span class="badge">Official E-Ticket Confirmation</span>
                            <h1>NEON HORIZON FEST 2026</h1>
                            <p>Tiket Konser Audiovisual Terbesar 2026</p>
                        </div>

                        <!-- Body Content -->
                        <div class="body-content">
                            <div class="greeting">
                                Halo, {{ $data['full_name'] ?? 'Penonton Setia' }}!
                            </div>
                            <div class="intro-text">
                                Terima kasih telah melakukan registrasi tiket untuk <strong>Neon Horizon Fest 2026</strong>. Pemesanan Anda telah berhasil diverifikasi oleh sistem cloud ticketing kami.
                            </div>

                            <!-- Order Reference Card -->
                            <div class="order-card">
                                <div class="order-header">
                                    <div class="order-label">Kode Booking / Nomor Pesanan</div>
                                    <div class="order-id">#{{ $data['order_id'] ?? 'NHF-2026' }}</div>
                                </div>

                                <div class="info-row">
                                    <div class="info-cell-left">Nama Pemesan</div>
                                    <div class="info-cell-right">{{ $data['full_name'] ?? '-' }}</div>
                                </div>
                                <div class="info-row">
                                    <div class="info-cell-left">Email</div>
                                    <div class="info-cell-right">{{ $data['email'] ?? '-' }}</div>
                                </div>
                                <div class="info-row">
                                    <div class="info-cell-left">No. Identitas (NIK)</div>
                                    <div class="info-cell-right">{{ $data['identity_number'] ?? '-' }}</div>
                                </div>
                                <div class="info-row">
                                    <div class="info-cell-left">No. Telepon / WhatsApp</div>
                                    <div class="info-cell-right">{{ $data['phone_number'] ?? '-' }}</div>
                                </div>
                                <div class="info-row">
                                    <div class="info-cell-left">Kategori Tiket</div>
                                    <div class="info-cell-right" style="color: #c084fc;">{{ $data['ticket_category_name'] ?? $data['ticket_category'] }}</div>
                                </div>
                                <div class="info-row">
                                    <div class="info-cell-left">Jumlah Tiket</div>
                                    <div class="info-cell-right">{{ $data['quantity'] ?? 1 }} Tiket</div>
                                </div>
                                <div class="info-row">
                                    <div class="info-cell-left">Waktu Transaksi</div>
                                    <div class="info-cell-right">{{ $data['created_at'] ?? now()->format('d M Y, H:i') . ' WIB' }}</div>
                                </div>

                                <div class="price-divider"></div>

                                <div class="info-row">
                                    <div class="info-cell-left">Harga Satuan</div>
                                    <div class="info-cell-right">Rp {{ number_format($data['unit_price'] ?? 0, 0, ',', '.') }}</div>
                                </div>
                                <div class="info-row">
                                    <div class="info-cell-left">Pajak Hiburan & PPN (11%)</div>
                                    <div class="info-cell-right">Rp {{ number_format($data['tax'] ?? 0, 0, ',', '.') }}</div>
                                </div>
                                <div class="info-row">
                                    <div class="info-cell-left">Biaya Administrasi & Layanan</div>
                                    <div class="info-cell-right">Rp {{ number_format($data['admin_fee'] ?? 0, 0, ',', '.') }}</div>
                                </div>

                                <div class="info-row total-row" style="margin-top: 8px;">
                                    <div class="info-cell-left">Total Pembayaran</div>
                                    <div class="info-cell-right">Rp {{ number_format($data['total_price'] ?? 0, 0, ',', '.') }}</div>
                                </div>
                            </div>

                            <!-- Concert Schedule -->
                            <div class="concert-details">
                                <h4>Informasi Acara Konser</h4>
                                <p><strong>📅 Tanggal:</strong> 24 Oktober 2026</p>
                                <p><strong>📍 Lokasi:</strong> Gelora Bung Karno (GBK) Main Stadium, Jakarta</p>
                                <p><strong>⏰ Open Gate:</strong> 16:00 WIB | Show Time: 19:30 WIB</p>
                            </div>

                            <!-- Important Notices -->
                            <div class="notice-box">
                                <strong>⚠️ Petunjuk Penukaran Wristband / Masuk Gate:</strong><br>
                                1. Tunjukkan email konfirmasi ini beserta kartu identitas resmi (KTP/Passport/SIM) yang sesuai dengan nama pemesan.<br>
                                2. Tiket elektronik ini bersifat rahasia dan tidak dapat dipindahtangankan tanpa surat kuasa bermeterai.<br>
                                3. Dilarang membawa makanan/minuman dari luar, senjata tajam, kamera profesional, dan obat-obatan terlarang.
                            </div>

                            <p style="font-size: 13px; color: #94a3b8; text-align: center; margin: 0;">
                                Sampai jumpa di panggung kemeriahan Neon Horizon Fest 2026!
                            </p>
                        </div>

                        <!-- Footer -->
                        <div class="footer">
                            <p style="margin: 0 0 6px 0;"><strong>Neon Horizon Fest &bull; Cloud Ticketing Service</strong></p>
                            <p style="margin: 0 0 10px 0;">Email ini dikirim otomatis oleh sistem backend Laravel Cloud Computing.</p>
                            <p style="margin: 0;">Butuh bantuan? Hubungi kami di <a href="mailto:{{ config('mail.from.address') }}">{{ config('mail.from.address') }}</a></p>
                        </div>

                    </div>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
