<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'gambar',
        'nama_lengkap',
        'no_telpon',
        'email',
        'deskripsi',
        'facebook',
        'x',
        'linkedin',
        'instagram',
        'alamat',
    ];
}
