<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    // TAMBAHKAN BAGIAN INI (Wajib ada agar bisa di-update/create)
    protected $fillable = [
        'rating',
        'name',
        'event_name',
        'role',
        'message'
    ];
}