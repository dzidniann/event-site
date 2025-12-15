<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white flex items-center justify-center h-screen">
    <div class="bg-gray-800 p-8 rounded-lg shadow-lg w-96 border border-gray-700">
        <h2 class="text-2xl font-bold mb-6 text-center">Admin Login</h2>
        
        <!-- Menampilkan Error jika password salah -->
        @if($errors->any())
            <div class="bg-red-500/20 text-red-300 p-3 mb-4 rounded text-sm border border-red-500/50">
                <ul class="list-disc list-inside">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST" class="space-y-4">
            @csrf <!-- Wajib ada untuk keamanan form Laravel -->
            
            <div>
                <label class="block text-sm text-gray-400 mb-1">Email</label>
                <input type="email" name="email" required 
                    class="w-full bg-gray-700 text-white rounded p-2 focus:outline-none focus:ring-2 focus:ring-blue-500 border border-gray-600">
            </div>
            
            <div>
                <label class="block text-sm text-gray-400 mb-1">Password</label>
                <input type="password" name="password" required 
                    class="w-full bg-gray-700 text-white rounded p-2 focus:outline-none focus:ring-2 focus:ring-blue-500 border border-gray-600">
            </div>
            
            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 py-2 rounded font-bold transition duration-200">
                Masuk Dashboard
            </button>
        </form>
        
        <div class="mt-6 text-center border-t border-gray-700 pt-4">
            <a href="{{ route('home') }}" class="text-sm text-gray-500 hover:text-white transition">
                &larr; Kembali ke Website
            </a>
        </div>
    </div>
</body>
</html>