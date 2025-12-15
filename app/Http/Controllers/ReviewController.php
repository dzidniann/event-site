<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    // --- BAGIAN PUBLIC ---
    public function index()
    {
        $reviews = Review::latest()->get();
        return view('welcome', compact('reviews'));
    }

    public function store(Request $request)
    {
        // ... (KODE LAMA STORE BIARKAN SAMA SEPERTI SEBELUMNYA) ...
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'name' => 'required|string|max:50',
            'event_name' => 'required|string|max:50',
            'role' => 'required|string',
            'message' => 'required|string|max:500',
        ]);

        $review = new Review();
        $review->rating = $request->rating;
        $review->name = $request->name;
        $review->event_name = $request->event_name;
        $review->role = $request->role;
        $review->message = $request->message;
        $review->save();

        return redirect()->back()->with('success', 'Ulasan berhasil dikirim!');
    }

    // --- BAGIAN ADMIN ---
    
    // 1. Menampilkan Halaman Dashboard Admin
    public function dashboard()
    {
        $reviews = Review::latest()->get();
        return view('admin.dashboard', compact('reviews'));
    }

    // 2. Menghapus Review
    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();
        return redirect()->route('dashboard')->with('success', 'Review berhasil dihapus');
    }

    // 3. Halaman Edit Review
    public function edit($id)
    {
        $review = Review::findOrFail($id);
        return view('admin.edit', compact('review'));
    }

    // 4. Proses Update Review
    public function update(Request $request, $id)
    {
        $review = Review::findOrFail($id);
        
        $request->validate([
            'name' => 'required',
            'message' => 'required',
            'rating' => 'required|integer|min:1|max:5'
        ]);

        $review->update($request->all());
        return redirect()->route('dashboard')->with('success', 'Review berhasil diupdate');
    }
}