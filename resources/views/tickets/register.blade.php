<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Tiket Konser - Neon Horizon Fest 2026</title>
    <!-- Tailwind CSS CDN agar langsung tampil rapi tanpa perlu build npm -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>
<body class="bg-slate-950 text-slate-100 min-h-screen selection:bg-purple-500 selection:text-white">

    <!-- Ambient Glow Background -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none -z-10">
        <div class="absolute -top-40 -left-40 w-96 h-96 bg-purple-600/25 rounded-full blur-3xl"></div>
        <div class="absolute top-1/3 -right-40 w-96 h-96 bg-indigo-600/20 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 left-1/3 w-96 h-96 bg-pink-600/20 rounded-full blur-3xl"></div>
    </div>

    <!-- Navigation Bar -->
    <header class="border-b border-slate-800/80 backdrop-blur-md sticky top-0 z-50 bg-slate-950/70">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <span class="inline-flex items-center justify-center w-9 h-9 rounded-xl bg-gradient-to-tr from-purple-600 to-pink-500 text-white font-black shadow-lg shadow-purple-500/30">
                    🎵
                </span>
                <div>
                    <h1 class="text-base sm:text-lg font-bold tracking-tight text-white">NEON HORIZON FEST 2026</h1>
                    <p class="text-[11px] text-purple-400 font-medium">Official Ticketing Platform</p>
                </div>
            </div>
            <div class="hidden sm:flex items-center text-xs text-slate-400 space-x-4">
                <span class="flex items-center gap-1.5">
                    <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                    Enkripsi 256-bit Aman
                </span>
                <span class="text-slate-600">|</span>
                <span>E-Ticket Instant Delivery</span>
            </div>
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        
        <!-- Concert Hero Banner -->
        <div class="relative overflow-hidden rounded-3xl bg-gradient-to-r from-purple-900/60 via-slate-900 to-indigo-950/80 border border-purple-500/20 p-6 sm:p-10 mb-10 shadow-2xl">
            <div class="relative z-10 max-w-3xl">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-purple-500/10 border border-purple-400/30 text-purple-300 text-xs font-semibold mb-4">
                    <span class="w-2 h-2 rounded-full bg-pink-500 animate-pulse"></span>
                    PRESALE PHASE 1 SEGERA DITUTUP
                </div>
                <h2 class="text-2xl sm:text-4xl font-extrabold text-white tracking-tight mb-3">
                    Neon Horizon Live in Surabaya
                </h2>
                <p class="text-sm sm:text-base text-slate-300 mb-6 leading-relaxed">
                    Pengalaman konser musik audiovisual terbesar tahun ini. Amankan e-ticket Anda sekarang sebelum kuota kursi habis!
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 text-xs sm:text-sm text-slate-300">
                    <div class="flex items-center gap-2.5 bg-slate-950/60 border border-slate-800/80 rounded-xl p-3">
                        <span class="text-lg">📅</span>
                        <div>
                            <p class="text-[11px] text-slate-400 uppercase font-bold">Tanggal</p>
                            <p class="font-semibold text-white">24 Oktober 2026</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2.5 bg-slate-950/60 border border-slate-800/80 rounded-xl p-3">
                        <span class="text-lg">📍</span>
                        <div>
                            <p class="text-[11px] text-slate-400 uppercase font-bold">Lokasi</p>
                            <p class="font-semibold text-white">Gelora Bung Karno (GBK)</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2.5 bg-slate-950/60 border border-slate-800/80 rounded-xl p-3">
                        <span class="text-lg">⏰</span>
                        <div>
                            <p class="text-[11px] text-slate-400 uppercase font-bold">Open Gate</p>
                            <p class="font-semibold text-white">16:00 WIB</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Success / Error Alerts -->
        @if (session('success'))
            <div class="mb-8 p-4 rounded-2xl bg-emerald-950/70 border border-emerald-500/40 text-emerald-200 text-sm flex items-start gap-3">
                <span class="text-xl">✅</span>
                <div>
                    <h4 class="font-bold">Registrasi Berhasil!</h4>
                    <p>{{ session('success') }}</p>
                </div>
            </div>
        @endif

        @if (session('warning'))
            <div class="mb-8 p-4 rounded-2xl bg-amber-950/70 border border-amber-500/40 text-amber-200 text-sm flex items-start gap-3">
                <span class="text-xl">⚠️</span>
                <div>
                    <h4 class="font-bold">Perhatian</h4>
                    <p>{{ session('warning') }}</p>
                </div>
            </div>
        @endif

        @if (session('error'))
            <div class="mb-8 p-4 rounded-2xl bg-rose-950/70 border border-rose-500/40 text-rose-200 text-sm flex items-start gap-3">
                <span class="text-xl">❌</span>
                <div>
                    <h4 class="font-bold">Gagal</h4>
                    <p>{{ session('error') }}</p>
                </div>
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-8 p-4 rounded-2xl bg-rose-950/70 border border-rose-500/40 text-rose-200 text-sm">
                <div class="flex items-center gap-2 font-bold mb-2">
                    <span>⚠️</span> Terjadi kesalahan pengisian form:
                </div>
                <ul class="list-disc list-inside space-y-1 text-xs sm:text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form Layout (2 Columns on Desktop) -->
        <form action="{{ url('/tickets/register') }}" method="POST" id="ticketForm" class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            @csrf

            <!-- Left Column: Form Fields (7 cols) -->
            <div class="lg:col-span-7 space-y-8">
                
                <!-- Section 1: Ticket Category Selection -->
                <div class="bg-slate-900/70 border border-slate-800 rounded-3xl p-6 sm:p-7 shadow-xl">
                    <div class="flex items-center justify-between mb-5">
                        <h3 class="text-lg font-bold text-white flex items-center gap-2">
                            <span class="flex items-center justify-center w-7 h-7 rounded-lg bg-purple-600/30 text-purple-400 text-xs font-bold border border-purple-500/30">1</span>
                            Pilih Kategori Tiket
                        </h3>
                        <span class="text-xs text-purple-400 font-medium">*Pilih salah satu</span>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5" id="ticketCategories">
                        
                        <!-- VIP Diamond -->
                        <label class="relative flex flex-col p-4 rounded-2xl border-2 cursor-pointer transition-all duration-200 bg-slate-950/60 border-slate-800 hover:border-purple-500/60 group">
                            <input type="radio" name="ticket_category" value="VIP" data-price="2500000" class="sr-only ticket-radio" checked>
                            <div class="flex items-start justify-between mb-2">
                                <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-amber-500/20 text-amber-300 border border-amber-500/30">VIP ACCESS</span>
                                <span class="radio-indicator w-4 h-4 rounded-full border-2 border-slate-600 flex items-center justify-center"></span>
                            </div>
                            <h4 class="font-bold text-white text-base group-hover:text-purple-300">VIP Diamond</h4>
                            <p class="text-xs text-slate-400 mb-3">Soundcheck pass, Front row seated, Exclusive merch pack.</p>
                            <span class="mt-auto font-extrabold text-purple-400 text-sm">Rp 2.500.000</span>
                        </label>

                        <!-- Festival A (Standing) -->
                        <label class="relative flex flex-col p-4 rounded-2xl border-2 cursor-pointer transition-all duration-200 bg-slate-950/60 border-slate-800 hover:border-purple-500/60 group">
                            <input type="radio" name="ticket_category" value="FESTIVAL_A" data-price="1650000" class="sr-only ticket-radio">
                            <div class="flex items-start justify-between mb-2">
                                <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-pink-500/20 text-pink-300 border border-pink-500/30">STANDING</span>
                                <span class="radio-indicator w-4 h-4 rounded-full border-2 border-slate-600 flex items-center justify-center"></span>
                            </div>
                            <h4 class="font-bold text-white text-base group-hover:text-purple-300">Festival A</h4>
                            <p class="text-xs text-slate-400 mb-3">Free standing area persis di depan panggung utama.</p>
                            <span class="mt-auto font-extrabold text-purple-400 text-sm">Rp 1.650.000</span>
                        </label>

                        <!-- CAT 1 (Numbered Seating) -->
                        <label class="relative flex flex-col p-4 rounded-2xl border-2 cursor-pointer transition-all duration-200 bg-slate-950/60 border-slate-800 hover:border-purple-500/60 group">
                            <input type="radio" name="ticket_category" value="CAT_1" data-price="1200000" class="sr-only ticket-radio">
                            <div class="flex items-start justify-between mb-2">
                                <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-indigo-500/20 text-indigo-300 border border-indigo-500/30">SEATED</span>
                                <span class="radio-indicator w-4 h-4 rounded-full border-2 border-slate-600 flex items-center justify-center"></span>
                            </div>
                            <h4 class="font-bold text-white text-base group-hover:text-purple-300">CAT 1 (Tribune Lower)</h4>
                            <p class="text-xs text-slate-400 mb-3">Kursi bernomor dengan visibilitas panggung center.</p>
                            <span class="mt-auto font-extrabold text-purple-400 text-sm">Rp 1.200.000</span>
                        </label>

                        <!-- CAT 2 (Upper Seating) -->
                        <label class="relative flex flex-col p-4 rounded-2xl border-2 cursor-pointer transition-all duration-200 bg-slate-950/60 border-slate-800 hover:border-purple-500/60 group">
                            <input type="radio" name="ticket_category" value="CAT_2" data-price="750000" class="sr-only ticket-radio">
                            <div class="flex items-start justify-between mb-2">
                                <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-slate-500/20 text-slate-300 border border-slate-500/30">SEATED</span>
                                <span class="radio-indicator w-4 h-4 rounded-full border-2 border-slate-600 flex items-center justify-center"></span>
                            </div>
                            <h4 class="font-bold text-white text-base group-hover:text-purple-300">CAT 2 (Tribune Upper)</h4>
                            <p class="text-xs text-slate-400 mb-3">Kursi bernomor di tribun atas pemandangan luas.</p>
                            <span class="mt-auto font-extrabold text-purple-400 text-sm">Rp 750.000</span>
                        </label>

                    </div>

                    <!-- Quantity Counter -->
                    <div class="mt-6 pt-5 border-t border-slate-800 flex items-center justify-between">
                        <div>
                            <p class="font-semibold text-white text-sm">Jumlah Tiket</p>
                            <p class="text-xs text-slate-400">Maksimal 4 tiket per identitas</p>
                        </div>
                        <div class="flex items-center space-x-3 bg-slate-950 border border-slate-800 rounded-xl p-1.5">
                            <button type="button" id="btnDecrease" class="w-8 h-8 rounded-lg bg-slate-900 hover:bg-slate-800 text-white font-bold flex items-center justify-center transition disabled:opacity-40">-</button>
                            <input type="number" id="ticketQuantity" name="quantity" min="1" max="4" value="1" readonly class="w-10 text-center bg-transparent font-bold text-white focus:outline-none">
                            <button type="button" id="btnIncrease" class="w-8 h-8 rounded-lg bg-slate-900 hover:bg-slate-800 text-white font-bold flex items-center justify-center transition disabled:opacity-40">+</button>
                        </div>
                    </div>
                </div>

                <!-- Section 2: Personal Identity Form -->
                <div class="bg-slate-900/70 border border-slate-800 rounded-3xl p-6 sm:p-7 shadow-xl space-y-5">
                    <h3 class="text-lg font-bold text-white flex items-center gap-2">
                        <span class="flex items-center justify-center w-7 h-7 rounded-lg bg-purple-600/30 text-purple-400 text-xs font-bold border border-purple-500/30">2</span>
                        Data Diri Pemesan (Sesuai KTP/Paspor)
                    </h3>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <!-- Full Name -->
                        <div class="sm:col-span-2">
                            <label for="full_name" class="block text-xs font-semibold text-slate-300 mb-1.5">Nama Lengkap <span class="text-pink-500">*</span></label>
                            <input type="text" id="full_name" name="full_name" value="{{ old('full_name') }}" required placeholder="Contoh: Budi Santoso"
                                class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-sm text-white placeholder-slate-500 focus:outline-none focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition">
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-xs font-semibold text-slate-300 mb-1.5">Alamat Email <span class="text-pink-500">*</span></label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required placeholder="nama@email.com"
                                class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-sm text-white placeholder-slate-500 focus:outline-none focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition">
                            <span class="text-[11px] text-slate-500 mt-1 block">E-ticket akan dikirimkan ke email ini</span>
                        </div>

                        <!-- Phone / WhatsApp -->
                        <div>
                            <label for="phone_number" class="block text-xs font-semibold text-slate-300 mb-1.5">Nomor WhatsApp / HP <span class="text-pink-500">*</span></label>
                            <input type="tel" id="phone_number" name="phone_number" value="{{ old('phone_number') }}" required placeholder="081234567890"
                                class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-sm text-white placeholder-slate-500 focus:outline-none focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition">
                        </div>

                        <!-- NIK / Passport -->
                        <div>
                            <label for="identity_number" class="block text-xs font-semibold text-slate-300 mb-1.5">Nomor NIK / KTP / Paspor <span class="text-pink-500">*</span></label>
                            <input type="text" id="identity_number" name="identity_number" value="{{ old('identity_number') }}" required placeholder="16 digit nomor NIK"
                                class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-sm text-white placeholder-slate-500 focus:outline-none focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition">
                        </div>

                        <!-- Date of Birth -->
                        <div>
                            <label for="birth_date" class="block text-xs font-semibold text-slate-300 mb-1.5">Tanggal Lahir <span class="text-pink-500">*</span></label>
                            <input type="date" id="birth_date" name="birth_date" value="{{ old('birth_date') }}" required
                                class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-sm text-white placeholder-slate-500 focus:outline-none focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition">
                        </div>
                    </div>
                </div>

                <!-- Section 3: Terms & Agreement -->
                <div class="bg-slate-900/40 border border-slate-800/80 rounded-2xl p-5">
                    <label class="flex items-start gap-3 cursor-pointer">
                        <input type="checkbox" name="terms_agreement" value="1" required class="mt-1 w-4 h-4 rounded border-slate-700 text-purple-600 focus:ring-purple-500 bg-slate-950">
                        <span class="text-xs text-slate-400 leading-relaxed">
                            Saya menyatakan bahwa data yang diisi adalah benar dan sesuai identitas resmi. Saya setuju dengan <a href="#" class="text-purple-400 underline hover:text-purple-300">Syarat & Ketentuan</a> konser serta kebijakan tiket yang tidak dapat dipindahtangankan tanpa surat kuasa resmi.
                        </span>
                    </label>
                </div>

            </div>

            <!-- Right Column: Order Summary & Checkout (5 cols) -->
            <div class="lg:col-span-5">
                <div class="sticky top-24 bg-slate-900/90 border border-slate-800 rounded-3xl p-6 sm:p-7 shadow-2xl backdrop-blur-xl">
                    <h3 class="text-lg font-bold text-white mb-4 pb-3 border-b border-slate-800 flex items-center justify-between">
                        <span>Ringkasan Pesanan</span>
                        <span class="text-xs font-medium text-slate-400">Invoice Preview</span>
                    </h3>

                    <!-- Line Items -->
                    <div class="space-y-3.5 text-sm mb-6">
                        <div class="flex justify-between items-center text-slate-300">
                            <div>
                                <p class="font-semibold text-white" id="summaryCategoryName">VIP Diamond</p>
                                <p class="text-xs text-slate-500"><span id="summaryQuantity">1</span> x <span id="summaryUnitPrice">Rp 2.500.000</span></p>
                            </div>
                            <span class="font-bold text-white" id="summarySubtotal">Rp 2.500.000</span>
                        </div>

                        <div class="flex justify-between text-xs text-slate-400">
                            <span>Pajak Hiburan & Pemda (10%)</span>
                            <span id="summaryTax">Rp 250.000</span>
                        </div>

                        <div class="flex justify-between text-xs text-slate-400">
                            <span>Biaya Layanan Platform</span>
                            <span id="summaryPlatformFee">Rp 15.000</span>
                        </div>

                        <div class="pt-4 border-t border-slate-800 flex justify-between items-baseline">
                            <span class="text-base font-bold text-white">Total Pembayaran</span>
                            <span class="text-2xl font-black text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-400" id="summaryTotal">
                                Rp 2.765.000
                            </span>
                        </div>
                    </div>

                    <!-- Payment Badges -->
                    <div class="bg-slate-950/60 rounded-2xl p-4 border border-slate-800/80 mb-6">
                        <p class="text-[11px] font-semibold text-slate-400 uppercase tracking-wider mb-2.5">Metode Pembayaran Tersedia</p>
                        <div class="flex flex-wrap gap-2 text-xs text-slate-300">
                            <span class="px-2.5 py-1 rounded-lg bg-slate-800/80 font-medium">BCA Virtual Account</span>
                            <span class="px-2.5 py-1 rounded-lg bg-slate-800/80 font-medium">Mandiri</span>
                            <span class="px-2.5 py-1 rounded-lg bg-slate-800/80 font-medium">QRIS</span>
                            <span class="px-2.5 py-1 rounded-lg bg-slate-800/80 font-medium">Kartu Kredit</span>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="w-full py-4 px-6 rounded-2xl bg-gradient-to-r from-purple-600 via-pink-600 to-purple-600 hover:from-purple-500 hover:to-pink-500 text-white font-bold text-base shadow-xl shadow-purple-600/30 hover:shadow-purple-600/50 hover:scale-[1.01] active:scale-[0.99] transition duration-200 flex items-center justify-center gap-2">
                        <span>Pesan Tiket Sekarang</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </button>

                    <p class="text-center text-[11px] text-slate-500 mt-4 flex items-center justify-center gap-1">
                        🔒 Transaksi dilindungi enkripsi SSL end-to-end
                    </p>
                </div>
            </div>

        </form>

    </main>

    <!-- Interactive Script for Real-Time Calculations & UI State -->
    <script>
        const formatIDR = (number) => {
            return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 0 }).format(number);
        };

        const radios = document.querySelectorAll('.ticket-radio');
        const qtyInput = document.getElementById('ticketQuantity');
        const btnIncrease = document.getElementById('btnIncrease');
        const btnDecrease = document.getElementById('btnDecrease');

        const summaryCategoryName = document.getElementById('summaryCategoryName');
        const summaryQuantity = document.getElementById('summaryQuantity');
        const summaryUnitPrice = document.getElementById('summaryUnitPrice');
        const summarySubtotal = document.getElementById('summarySubtotal');
        const summaryTax = document.getElementById('summaryTax');
        const summaryPlatformFee = document.getElementById('summaryPlatformFee');
        const summaryTotal = document.getElementById('summaryTotal');

        const categoryNames = {
            'VIP': 'VIP Diamond',
            'FESTIVAL_A': 'Festival A (Standing)',
            'CAT_1': 'CAT 1 (Tribune Lower)',
            'CAT_2': 'CAT 2 (Tribune Upper)'
        };

        const updateRadioStyles = () => {
            radios.forEach(radio => {
                const card = radio.closest('label');
                const indicator = card.querySelector('.radio-indicator');
                if (radio.checked) {
                    card.classList.add('border-purple-500', 'bg-purple-950/20');
                    card.classList.remove('border-slate-800', 'bg-slate-950/60');
                    indicator.classList.add('border-purple-400', 'bg-purple-500');
                    indicator.classList.remove('border-slate-600', 'bg-transparent');
                } else {
                    card.classList.remove('border-purple-500', 'bg-purple-950/20');
                    card.classList.add('border-slate-800', 'bg-slate-950/60');
                    indicator.classList.remove('border-purple-400', 'bg-purple-500');
                    indicator.classList.add('border-slate-600', 'bg-transparent');
                }
            });
        };

        const calculateSummary = () => {
            const selectedRadio = document.querySelector('.ticket-radio:checked');
            if (!selectedRadio) return;

            const unitPrice = parseInt(selectedRadio.dataset.price, 10);
            const qty = parseInt(qtyInput.value, 10);
            const categoryCode = selectedRadio.value;

            const subtotal = unitPrice * qty;
            const tax = subtotal * 0.10; // 10%
            const platformFee = 15000;
            const grandTotal = subtotal + tax + platformFee;

            summaryCategoryName.textContent = categoryNames[categoryCode] || categoryCode;
            summaryQuantity.textContent = qty;
            summaryUnitPrice.textContent = formatIDR(unitPrice);
            summarySubtotal.textContent = formatIDR(subtotal);
            summaryTax.textContent = formatIDR(tax);
            summaryPlatformFee.textContent = formatIDR(platformFee);
            summaryTotal.textContent = formatIDR(grandTotal);

            updateRadioStyles();
        };

        radios.forEach(radio => {
            radio.addEventListener('change', calculateSummary);
        });

        btnIncrease.addEventListener('click', () => {
            let val = parseInt(qtyInput.value, 10);
            if (val < 4) {
                qtyInput.value = val + 1;
                calculateSummary();
            }
        });

        btnDecrease.addEventListener('click', () => {
            let val = parseInt(qtyInput.value, 10);
            if (val > 1) {
                qtyInput.value = val - 1;
                calculateSummary();
            }
        });

        // Initialize on load
        calculateSummary();
    </script>
</body>
</html>
