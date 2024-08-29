<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penghargaan extends Model
{
    use HasFactory;
    protected $fillable = ['education_id', 'juara', 'perlombaan', 'tahun_lomba'];

    public function education()
    {
        return $this->belongsTo(Education::class, 'education_id', 'id');
    }
}
