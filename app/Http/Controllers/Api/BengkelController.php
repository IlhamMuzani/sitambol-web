<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bengkel;

class BengkelController extends Controller
{
    public function bengkelAll()
    {
        $bengkel = Bengkel::with('gambar')->get();
        if(!$bengkel->isEmpty()) {
            return response()->json([
                'status' => TRUE,
                'message' => 'Berhasil menampilkan data Bengkel',
                'bengkel' => $bengkel
            ]);
        } else {
            return response()->json([
                'status' => FALSE,
                'message' => 'Gagal menampilkan data Bengkel!',
            ]);
        }
    }

    public function bengkelList($id)
    {
        $bengkel = Bengkel::where('kelurahan_id', $id)->with('gambar')->get();
        if(!$bengkel->isEmpty()){
            return response()->json([
                'status' => TRUE,
                'message' => 'Berhasil menampilkan data Bengkel',
                'bengkel' => $bengkel
            ]);
        }else {
            return response()->json([
                'status' => FALSE,
                'message' => 'Gagal menampilkan data Bengkel!',
                'bengkel' => $bengkel
            ]);
        }
    }
    
    public function bengkelDetail($id)
    {
        $bengkel = Bengkel::where('id', $id)->with('gambar')->first();
        if($bengkel){
            return response()->json([
                'status' => TRUE,
                'message' => 'Berhasil menampilkan detail Bengkel',
                'bengkel' => $bengkel
            ]);
        }else {
            return response()->json([
                'status' => FALSE,
                'message' => 'Gagal menampilkan detail Bengkel!',
            ]);
        }
    }

    public function bengkelSearch(Request $request)
    {
        $keyword = $request->keyword;
        
        $bengkel = Bengkel::where('fasilitas', 'LIKE', "%$keyword%")->with('gambar')->get();

        if (!$bengkel->isEmpty()) {
            return response()->json([
                'status' => TRUE,
                'message' => 'Berhasil menampilkan data Bengkel',
                'bengkel' => $bengkel
            ]);
        } else {
            return response()->json([
                'status' => FALSE,
                'message' => 'Gagal menampilkan data Bengkel!',
                'bengkel' => $bengkel
            ]);
        }
    }
}
