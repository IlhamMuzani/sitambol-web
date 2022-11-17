<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bengkel extends Model
{
    protected $table = 'bengkels';
    protected $fillable = [
        'kelurahan_id',
        'nama',
        'keterangan',
        'fasilitas',
        'latitude',
        'longitude'
    ];

    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class, "kelurahan_id", "id");
    }

    public function gambar()
    {
        return $this->hasMany(Gambar::class);
    }
}
