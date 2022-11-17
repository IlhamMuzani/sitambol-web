<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    protected $table = 'kelurahans';
    protected $fillable = [
        'kecamatan_id','nama'
    ];

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, "kecamatan_id", "id");
    }
}
