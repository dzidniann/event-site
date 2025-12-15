<!DOCTYPE html>
<html lang="id" class="scroll-smooth" style="scroll-padding-top: 5rem;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventSite - Event Partner & Review</title>

    <!-- Tailwind CSS (CDN) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Konfigurasi Font & Warna Custom -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        bgDark: '#0f0f0f',     // Background utama hitam pekat
                        cardDark: '#1f1f1f',   // Background kartu abu gelap
                        cardGray: '#6b7280',   // Warna teks abu
                        brandRed: '#ef4444',   // Warna P pada logo
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <!-- Font Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        /* Helper untuk gradasi teks */
        .text-gradient-main {
            background: linear-gradient(to right, #60a5fa, #c084fc, #f472b6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        /* Style untuk Rating Bintang Input */
        .star-rating i {
            transition: color 0.2s;
            cursor: pointer;
        }
        .star-rating i.active {
            color: #fbbf24; /* Warna kuning emas */
        }
    </style>
</head>

<body class="bg-bgDark text-white antialiased">

    <!-- NAVBAR -->
    <nav class="bg-bgDark/95 backdrop-blur-sm border-b border-gray-800 top-0 z-50 sticky transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="hover:opacity-80 transition">
                        <span class="text-xl md:text-2xl font-bold text-white"><span class="text-brandRed">Event</span>Site</span>
                    </a>
                </div>

                <!-- Menu Desktop -->
                <div class="hidden md:flex space-x-8 text-sm font-medium">
                    <a href="#about" class="text-gray-300 hover:text-white transition">Tentang Kami</a>
                    <a href="#services" class="text-gray-300 hover:text-white transition">Layanan</a>
                    <a href="#review" class="text-gray-300 hover:text-white transition">Review</a>
                </div>

                <!-- Button CTA -->
                <div class="hidden md:block">
                    <a href="wa.me/6285179713745"
                        class="border border-gray-500 text-white px-5 py-1.5 rounded text-xs md:text-sm hover:bg-gray-800 transition">
                        Hubungi kami
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button class="text-white text-xl"><i class="fas fa-bars"></i></button>
                </div>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section class="py-12 md:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <!-- Left Text -->
            <div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                    Temukan <span class="text-gradient-main">Promotor Terbaik</span><br>
                    untuk Event Anda
                </h1>
                <p class="text-gray-400 text-lg mb-8 leading-relaxed">
                    Kami bergerak di bidang event dengan menjadi mitra kreatif dan inovatif dalam menghadirkan event
                    yang berkesan serta bermanfaat.
                </p>
                <a href="#services"
                    class="inline-flex items-center bg-gradient-to-r from-pink-500 via-purple-500 to-blue-500 text-white font-bold px-8 py-4 rounded-full mb-12 hover:scale-105 transition transform shadow-lg shadow-purple-500/30">
                    <i class="fas fa-rocket mr-2"></i> Lihat Layanan Kami
                </a>
                <div class="flex gap-12">
                    <div class="flex items-center gap-3">
                        <i class="fas fa-users text-blue-500 text-2xl"></i>
                        <div>
                            <div class="text-blue-400 font-bold text-xl">50+</div>
                            <div class="text-gray-400 text-xs">Relasi</div>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fas fa-calendar-check text-blue-500 text-2xl"></i>
                        <div>
                            <div class="text-blue-400 font-bold text-xl">50+</div>
                            <div class="text-gray-400 text-xs">Event Sukses</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right Image -->
            <div>
                <img src="https://images.unsplash.com/photo-1501281668745-f7f57925c3b4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80"
                    alt="Concert Crowd" class="rounded-xl shadow-2xl w-full h-[350px] md:h-[400px] object-cover opacity-90">
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section id="about" class="py-16 bg-bgDark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-2">Tentang <span class="text-pink-400">Event</span>Site</h2>
                <p class="text-gray-300 italic">Bridging Your Event Dreams</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8ZXZlbnR8ZW58MHx8MHx8fDA%3D"
                    alt="Crowd Hands" class="rounded-xl shadow-lg w-full h-[350px] object-cover">
                <div class="space-y-8">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-12 h-12 bg-pink-500 rounded-lg flex items-center justify-center text-white text-xl">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-2">Visi Kami</h3>
                            <p class="text-gray-400 text-sm leading-relaxed">Menjadi mitra kreatif dan inovatif yang menghadirkan ruang kolaborasi.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-12 h-12 bg-cyan-500 rounded-lg flex items-center justify-center text-white text-xl">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-2">Misi Kami</h3>
                            <p class="text-gray-400 text-sm leading-relaxed">Merancang dan menyelenggarakan event berkualitas dengan standar profesional.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- LAYANAN SECTION -->
    <section id="services" class="py-16 bg-bgDark border-t border-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gradient-main inline-block">Layanan</h2>
                <p class="text-gray-400 mt-2">Dapatkan layanan terbaik dari kami.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <div class="bg-gray-600/40 p-6 rounded-lg hover:bg-gray-600/60 transition h-full">
                    <div class="w-12 h-12 bg-purple-500 rounded-lg flex items-center justify-center text-white mb-4"><i class="fas fa-search"></i></div>
                    <h3 class="font-bold text-lg mb-2">Event Planning</h3>
                    <p class="text-gray-300 text-xs leading-relaxed">Perencanaan konsep, timeline, hingga eksekusi acara.</p>
                </div>
                <!-- Card 2 -->
                <div class="bg-gray-600/40 p-6 rounded-lg hover:bg-gray-600/60 transition h-full">
                    <div class="w-12 h-12 bg-pink-500 rounded-lg flex items-center justify-center text-white mb-4"><i class="fas fa-users"></i></div>
                    <h3 class="font-bold text-lg mb-2">Community Event</h3>
                    <p class="text-gray-300 text-xs leading-relaxed">Gathering dan festival komunitas untuk meningkatkan engagement.</p>
                </div>
                <!-- Card 3 -->
                <div class="bg-gray-600/40 p-6 rounded-lg hover:bg-gray-600/60 transition h-full">
                    <div class="w-12 h-12 bg-yellow-500 rounded-lg flex items-center justify-center text-white mb-4"><i class="fas fa-chart-line"></i></div>
                    <h3 class="font-bold text-lg mb-2">Talent & Vendor</h3>
                    <p class="text-gray-300 text-xs leading-relaxed">Menyediakan MC, speaker, band, dan vendor profesional.</p>
                </div>
                <!-- Card 4 -->
                <div class="bg-gray-600/40 p-6 rounded-lg hover:bg-gray-600/60 transition h-full">
                    <div class="w-12 h-12 bg-indigo-500 rounded-lg flex items-center justify-center text-white mb-4"><i class="fas fa-star"></i></div>
                    <h3 class="font-bold text-lg mb-2">Konsep Kreatif</h3>
                    <p class="text-gray-300 text-xs leading-relaxed">Ide segar dan pengemasan acara yang stand out.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONI SECTION (DINAMIS DARI DATABASE) -->
    <section class="py-16 bg-bgDark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gradient-main inline-block">Kata Mereka</h2>
                <p class="text-gray-400 mt-2">Pengalaman mereka bersama EventSite</p>
            </div>

            <!-- Grid Testimoni -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                @forelse($reviews as $review)
                    <div class="bg-gray-800 p-8 rounded-lg border border-gray-700 hover:border-gray-600 transition">
                        <div class="flex items-center gap-3 mb-4">
                            <!-- Avatar Inisial -->
                            <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-purple-500 rounded-full flex items-center justify-center text-white font-bold uppercase shadow-lg">
                                {{ substr($review->name, 0, 1) }}
                            </div>
                            <div>
                                <div class="font-bold text-white text-sm capitalize">{{ $review->name }}</div>
                                <div class="text-xs text-gray-400 capitalize">{{ $review->role }} - {{ $review->event_name }}</div>
                            </div>
                        </div>

                        <!-- Bintang Dinamis -->
                        <div class="text-yellow-400 text-xs mb-3 flex gap-1">
                            @for($i = 1; $i <= 5; $i++)
                                @if($i <= $review->rating)
                                    <i class="fas fa-star"></i>
                                @else
                                    <i class="far fa-star text-gray-600"></i>
                                @endif
                            @endfor
                        </div>

                        <p class="text-gray-300 text-sm leading-relaxed italic">"{{ $review->message }}"</p>
                    </div>
                @empty
                    <!-- Tampilan Jika Database Kosong -->
                    <div class="col-span-1 md:col-span-3 text-center py-10 bg-gray-800/30 rounded-lg border border-dashed border-gray-700">
                        <i class="fas fa-comment-slash text-4xl text-gray-600 mb-3"></i>
                        <p class="text-gray-400">Belum ada ulasan. Jadilah yang pertama memberikan review!</p>
                    </div>
                @endforelse

            </div>
        </div>
    </section>

    <!-- REVIEW / KONTAK SECTION -->
    <section id="review" class="py-20 bg-cardDark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gradient-promotor inline-block">Halaman Review</h2>
                <p class="text-gray-400 mt-2">Puas dengan layanan kami? Berikan ulasan Anda di bawah ini!</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Info Kontak Kiri -->
                <div class="space-y-8 bg-bgDark p-8 rounded-xl border border-gray-800">
                    <h3 class="text-2xl font-bold mb-6 text-white">Hubungi Promotor</h3>
                    
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-blue-600 rounded flex items-center justify-center flex-shrink-0 text-white shadow-lg shadow-blue-500/50"><i class="fas fa-envelope"></i></div>
                        <div>
                            <h4 class="text-blue-400 font-bold mb-1">Email</h4>
                            <p class="text-gray-300 text-sm">eventsite8@gmail.com</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-orange-500 rounded flex items-center justify-center flex-shrink-0 text-white shadow-lg shadow-orange-500/50"><i class="fas fa-phone"></i></div>
                        <div>
                            <h4 class="text-blue-400 font-bold mb-1">WhatsApp / Telepon</h4>
                            <p class="text-gray-300 text-sm">+62 857 - 0742 1416</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-green-500 rounded flex items-center justify-center flex-shrink-0 text-white shadow-lg shadow-green-500/50"><i class="fas fa-map-marker-alt"></i></div>
                        <div>
                            <h4 class="text-blue-400 font-bold mb-1">Alamat Kantor</h4>
                            <p class="text-gray-300 text-sm leading-relaxed">
                                Jl. Dewandaru No.1<br>
                                Kec. Lowokwaru, Kota Malang, Jawa Timur
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FORM REVIEW LARAVEL -->
                <form action="{{ route('review.store') }}" method="POST" class="space-y-5 bg-bgDark p-8 rounded-xl border border-gray-800 shadow-2xl">
                    @csrf <!-- Token Keamanan Laravel -->

                    <!-- Notifikasi Sukses -->
                    @if(session('success'))
                        <div class="bg-green-500/20 text-green-400 p-4 rounded-lg border border-green-500/50 text-sm flex items-center gap-2 animate-pulse">
                            <i class="fas fa-check-circle"></i> {{ session('success') }}
                        </div>
                    @endif

                    <!-- Notifikasi Error (Validasi) -->
                    @if($errors->any())
                        <div class="bg-red-500/20 text-red-400 p-4 rounded-lg border border-red-500/50 text-sm">
                            <ul class="list-disc list-inside">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <h3 class="text-xl font-bold text-white mb-2">Formulir Ulasan</h3>
                    
                    <!-- 1. Rating Bintang -->
                    <div>
                        <label class="text-xs text-gray-400 mb-2 block">Berikan Rating</label>
                        <div class="star-rating text-2xl text-gray-600 flex gap-2">
                            <i class="fas fa-star" data-rating="1"></i>
                            <i class="fas fa-star" data-rating="2"></i>
                            <i class="fas fa-star" data-rating="3"></i>
                            <i class="fas fa-star" data-rating="4"></i>
                            <i class="fas fa-star" data-rating="5"></i>
                        </div>
                        <input type="hidden" name="rating" id="ratingInput" value="5" required>
                    </div>

                    <!-- 2. Nama Lengkap -->
                    <div class="space-y-1">
                        <label class="text-xs text-gray-400">Nama Lengkap</label>
                        <input type="text" name="name" required placeholder="Contoh: Budi Santoso"
                            class="w-full bg-cardDark border border-gray-700 text-white p-3 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
                    </div>

                    <!-- 3. Nama Acara -->
                    <div class="space-y-1">
                        <label class="text-xs text-gray-400">Nama Acara</label>
                        <input type="text" name="event_name" required placeholder="Contoh: Musik Fest 2025"
                            class="w-full bg-cardDark border border-gray-700 text-white p-3 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
                    </div>

                    <!-- 4. Peran -->
                    <div class="space-y-1">
                        <label class="text-xs text-gray-400">Peran Anda</label>
                        <select name="role" required class="w-full bg-cardDark border border-gray-700 text-white p-3 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
                            <option value="">Pilih Peran...</option>
                            <option value="Panitia">Panitia Event</option>
                            <option value="Peserta">Peserta / Pengunjung</option>
                            <option value="Sponsor">Sponsor / Partner</option>
                            <option value="Media">Media Partner</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>

                    <!-- 5. Pesan -->
                    <div class="space-y-1">
                        <label class="text-xs text-gray-400">Pesan / Ulasan Anda</label>
                        <textarea name="message" required rows="4" placeholder="Ceritakan pengalaman Anda bekerja sama dengan kami..."
                            class="w-full bg-cardDark border border-gray-700 text-white p-3 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 transition"></textarea>
                    </div>

                    <button type="submit"
                        class="w-full bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-bold py-3 rounded transition flex items-center justify-center gap-2 shadow-lg">
                        <i class="fas fa-paper-plane"></i> Kirim Ulasan
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-gradient-to-r from-[#8B5CF6] to-[#38bdf8] text-white pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12 border-b border-white/20 pb-12">
                <div class="md:col-span-1">
                    <div class="text-2xl font-bold mb-4"><span class="text-brandRed">Event</span>Site</div>
                    <p class="text-sm text-white/80">Bridging Your Event Dreams</p>
                    <div class="flex gap-4 mt-6">
                        <a href="#" class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/40 transition"><i class="fab fa-instagram text-sm"></i></a>
                        <a href="#" class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/40 transition"><i class="fab fa-whatsapp text-sm"></i></a>
                    </div>
                </div>
                <div>
                    <h3 class="font-bold mb-4">Navigasi</h3>
                    <ul class="space-y-2 text-sm text-white/80">
                        <li><a href="#about" class="hover:text-white">Tentang Kami</a></li>
                        <li><a href="#services" class="hover:text-white">Layanan</a></li>
                        <li><a href="#review" class="hover:text-white">Review & Kontak</a></li>
                    </ul>
                </div>
                <div></div>
                <div>
                    <p class="text-sm text-white/90 leading-relaxed">
                        Jl. Dewandaru No.1<br>Kec. Lowokwaru, Kota Malang<br>Jawa Timur, Indonesia
                    </p>
                </div>
            </div>
            <span>© 2025 EventSite. All rights reserved.</span>
    
            <!-- INI TOMBOL LOGIN ADMIN -->
            <a href="{{ route('login') }}" class="text-xs text-gray-500 hover:text-white transition">
                <i class="fas fa-lock"></i> Admin Login
            </a>
        </div>
    </footer>

    <!-- SCRIPT RATING INTERAKTIF -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const stars = document.querySelectorAll('.star-rating i');
            const ratingInput = document.getElementById('ratingInput');

            // Default aktifkan 5 bintang
            stars.forEach(s => s.classList.add('active'));

            stars.forEach(star => {
                star.addEventListener('click', () => {
                    const rating = star.getAttribute('data-rating');
                    ratingInput.value = rating;

                    // Update visual bintang
                    stars.forEach(s => {
                        if (s.getAttribute('data-rating') <= rating) {
                            s.classList.add('active');
                            s.classList.remove('text-gray-600');
                        } else {
                            s.classList.remove('active');
                            s.classList.add('text-gray-600');
                        }
                    });
                });
            });
        });
    </script>
</body>
</html>