<!DOCTYPE html>
<html lang="id">
<head>
    <title>Edit Review</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white flex items-center justify-center h-screen">
    <div class="bg-gray-800 p-8 rounded-lg shadow-lg w-[500px] border border-gray-700">
        <h2 class="text-2xl font-bold mb-6">Edit Review</h2>
        
        <form action="{{ route('review.update', $review->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT') <!-- Wajib untuk Update -->

            <div>
                <label class="block text-sm text-gray-400 mb-1">Nama</label>
                <input type="text" name="name" value="{{ $review->name }}" class="w-full bg-gray-700 rounded p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm text-gray-400 mb-1">Event</label>
                    <input type="text" name="event_name" value="{{ $review->event_name }}" class="w-full bg-gray-700 rounded p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-sm text-gray-400 mb-1">Rating (1-5)</label>
                    <input type="number" name="rating" min="1" max="5" value="{{ $review->rating }}" class="w-full bg-gray-700 rounded p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
            </div>

            <div>
                <label class="block text-sm text-gray-400 mb-1">Pesan</label>
                <textarea name="message" rows="4" class="w-full bg-gray-700 rounded p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">{{ $review->message }}</textarea>
            </div>

            <div class="flex gap-4">
                <a href="{{ route('dashboard') }}" class="w-1/2 bg-gray-600 hover:bg-gray-700 py-2 rounded font-bold text-center transition">Batal</a>
                <button type="submit" class="w-1/2 bg-blue-600 hover:bg-blue-700 py-2 rounded font-bold transition">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</body>
</html>