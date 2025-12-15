<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-900 text-white p-6 md:p-10 min-h-screen">
    <div class="max-w-7xl mx-auto">
        <!-- Header Dashboard -->
        <div class="flex flex-col md:flex-row justify-between items-center mb-8 bg-gray-800 p-6 rounded-xl border border-gray-700 shadow-lg gap-4">
            <div>
                <h1 class="text-2xl font-bold text-white">Dashboard Testimoni</h1>
                <p class="text-gray-400 text-sm">Kelola ulasan yang masuk dari pengunjung.</p>
            </div>
            
            <div class="flex items-center gap-4">
                <div class="text-right hidden md:block">
                    <div class="text-sm font-bold">{{ Auth::user()->name ?? 'Admin' }}</div>
                    <div class="text-xs text-green-400">● Online</div>
                </div>
                
                <!-- Tombol Lihat Web -->
                <a href="{{ route('home') }}" target="_blank" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm transition font-medium">
                    <i class="fas fa-external-link-alt mr-1"></i> Web
                </a>

                <!-- Tombol Logout -->
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-red-500/10 hover:bg-red-500 hover:text-white text-red-400 border border-red-500/50 px-4 py-2 rounded-lg text-sm transition font-medium flex items-center gap-2">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </button>
                </form>
            </div>
        </div>

        <!-- Notifikasi Sukses -->
        @if(session('success'))
            <div class="bg-green-500/20 text-green-400 p-4 rounded-lg mb-6 border border-green-500/50 flex items-center gap-3">
                <i class="fas fa-check-circle text-xl"></i>
                {{ session('success') }}
            </div>
        @endif

        <!-- Tabel Data -->
        <div class="bg-gray-800 rounded-xl overflow-hidden border border-gray-700 shadow-xl">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-700/50 text-gray-300 text-sm uppercase tracking-wider border-b border-gray-700">
                            <th class="p-5 font-semibold">Nama Pengulas</th>
                            <th class="p-5 font-semibold">Event & Role</th>
                            <th class="p-5 font-semibold">Rating</th>
                            <th class="p-5 font-semibold w-1/3">Pesan</th>
                            <th class="p-5 font-semibold text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-700">
                        @forelse($reviews as $review)
                        <tr class="hover:bg-gray-700/30 transition duration-150">
                            <td class="p-5">
                                <div class="font-bold text-white">{{ $review->name }}</div>
                                <div class="text-xs text-gray-500">{{ $review->created_at->format('d M Y') }}</div>
                            </td>
                            <td class="p-5">
                                <div class="text-sm text-gray-300 font-medium">{{ $review->event_name }}</div>
                                <span class="inline-block mt-1 px-2 py-0.5 rounded text-xs bg-blue-500/20 text-blue-400 border border-blue-500/30">
                                    {{ $review->role }}
                                </span>
                            </td>
                            <td class="p-5">
                                <div class="flex text-yellow-400 text-sm">
                                    @for($i = 1; $i <= 5; $i++)
                                        @if($i <= $review->rating)
                                            <i class="fas fa-star"></i>
                                        @else
                                            <i class="far fa-star text-gray-600"></i>
                                        @endif
                                    @endfor
                                </div>
                                <div class="text-xs text-gray-500 mt-1 font-mono">{{ $review->rating }}/5</div>
                            </td>
                            <td class="p-5">
                                <p class="text-sm text-gray-300 italic leading-relaxed">
                                    "{{ Str::limit($review->message, 100) }}"
                                </p>
                            </td>
                            <td class="p-5">
                                <div class="flex justify-center gap-3">
                                    <!-- Tombol Edit -->
                                    <a href="{{ route('review.edit', $review->id) }}" class="group relative bg-blue-600/20 hover:bg-blue-600 text-blue-400 hover:text-white w-9 h-9 flex items-center justify-center rounded-lg border border-blue-600/50 transition">
                                        <i class="fas fa-pen text-xs"></i>
                                    </a>
                                    
                                    <!-- Tombol Hapus -->
                                    <form action="{{ route('review.destroy', $review->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus ulasan dari {{ $review->name }}?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-600/20 hover:bg-red-600 text-red-400 hover:text-white w-9 h-9 flex items-center justify-center rounded-lg border border-red-600/50 transition">
                                            <i class="fas fa-trash text-xs"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="p-10 text-center text-gray-500">
                                <i class="fas fa-folder-open text-4xl mb-3 block"></i>
                                Belum ada data ulasan yang masuk.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>