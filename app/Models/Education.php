<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $fillable = ['profile_id', 'nama_sekolah', 'jurusan', 'tahun_lulus'];

    public function profiles()
    {
        return $this->belongsTo(Profile::class, 'profile_id', 'id');
    }

}
