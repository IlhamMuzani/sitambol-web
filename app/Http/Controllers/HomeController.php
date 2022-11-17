<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Bengkel;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $jumlah_kecamatan = Kecamatan::count();
        $jumlah_kelurahan = Kelurahan::count();
        $jumlah_bengkel = Bengkel::count();

        $bengkel = Bengkel::all();
        $x = 0;
        foreach($bengkel as $b)
        {
            $result[$x]['0'] = $b->nama;
            $result[$x]['1'] = $b->latitude;
            $result[$x]['2'] = $b->longitude;
            $x++;
        }
        $result_lat_long = json_encode($result);
        $location = Bengkel::first();
        
        return view('home', compact('jumlah_kecamatan', 'jumlah_kelurahan', 'jumlah_bengkel', 'result_lat_long','location'));
    }
}
