<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kecamatan;

class KecamatanController extends Controller
{
    public function kecamatanList()
    {
        $kecamatan = Kecamatan::all();
        if($kecamatan){
            return response()->json([
                'status' => TRUE,
                'message' => 'Berhasil menampilkan data Kecamatan',
                'kecamatan' => $kecamatan
            ]);
        } else {
            return response()->json([
                'status' => FALSE,
                'message' => 'Gagal menampilkan data Kecamatan!',
                'kecamatan' => $kecamatan
            ]);
        }
    }

    public function kecamatanSearch(Request $request)
    {
        $keyword = $request->keyword;
        
        $kecamatan = Kecamatan::where('nama', 'LIKE', "%$keyword%")->get();

        if (!$kecamatan->isEmpty()) {
            return response()->json([
                'status' => TRUE,
                'message' => 'Berhasil menampilkan data Kecamatan',
                'kecamatan' => $kecamatan
            ]);
        } else {
            return response()->json([
                'status' => FALSE,
                'message' => 'Gagal menampilkan data Kecamatan!',
                'kecamatan' => $kecamatan
            ]);
        }
    }
}
