<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kelurahan;

class KelurahanController extends Controller
{
    public function kelurahanAll()
    {
        $kelurahan = kelurahan::get();
        if(!$kelurahan->isEmpty()){
            return response()->json([
                'status' => TRUE,
                'message' => 'Berhasil menampilkan data kelurahan',
                'kelurahan' => $kelurahan
            ]);
        } else {
            return response()->json([
                'status' => FALSE,
                'message' => 'Gagal menampilkan data kelurahan!',
                'kelurahan' => $kelurahan
            ]);
        }
    }

    public function kelurahanList($id)
    {
        $kelurahan = Kelurahan::where([
            ['kecamatan_id', $id]
        ])->get();
        if(!$kelurahan->isEmpty()){
            return response()->json([
                'status' => TRUE,
                'message' => 'Berhasil menampilkan data Kelurahan',
                'kelurahan' => $kelurahan
            ]);
        }else {
            return response()->json([
                'status' => FALSE,
                'message' => 'Gagal menampilkan data Kelurahan!',
                'kelurahan' => $kelurahan
            ]);
        }
    }

    public function kelurahanSearch(Request $request)
    {
        $keyword = $request->keyword;
        
        $kelurahan = Kelurahan::where('nama', 'LIKE', "%$keyword%")->get();

        if (!$kelurahan->isEmpty()) {
            return response()->json([
                'status' => TRUE,
                'message' => 'Berhasil menampilkan data kelurahan',
                'kelurahan' => $kelurahan
            ]);
        } else {
            return response()->json([
                'status' => FALSE,
                'message' => 'Gagal menampilkan data kelurahan!',
                'kelurahan' => $kelurahan
            ]);
        }
    }
}
