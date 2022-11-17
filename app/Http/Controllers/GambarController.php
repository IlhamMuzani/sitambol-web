<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gambar;
use Storage;

class GambarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function deleteGambar($id)
    {
        $gambar = Gambar::find($id);
        Storage::disk('local')->delete('public/uploads/'.$gambar->gambar);
        $gambar->delete();
        return back();
    }
}