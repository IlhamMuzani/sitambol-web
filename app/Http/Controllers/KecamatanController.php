<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $listkecamatan = Kecamatan::all();
        $listkelurahan = Kelurahan::all();

        return view('kecamatan.index', compact('listkecamatan','listkelurahan'));
    }
}
