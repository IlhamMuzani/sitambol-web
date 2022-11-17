<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gambar;

class GambarController extends Controller
{
    public function gambarList($id)
    {
        $gambar = Gambar::where('bengkel_id', $id)->get();
        
        if(!$gambar->isEmpty()){
            return response()->json([
                'status' => TRUE,
                'message' => 'Berhasil menampilkan data Gambar',
                'gambar' => $gambar
            ]);
        }else {
            return response()->json([
                'status' => FALSE,
                'message' => 'Gagal menampilkan data Gambar!',
                'gambar' => $gambar
            ]);
        }
    }
}
