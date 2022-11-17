<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
    use HasFactory;

    protected $table = 'gambars';
    protected $fillable = [
        'bengkel_id', 
        'gambar'
    ];

    public function bengkel()
    {
        return $this->belongsTo(Bengkel::class);
    }
}