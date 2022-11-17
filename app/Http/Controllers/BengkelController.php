<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bengkel;
use App\Models\Gambar;
use App\Models\Kelurahan;
use Storage;

class BengkelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $listbengkel = Bengkel::paginate(3);
        $filterKeyword = $request->get('keyword');
        if($filterKeyword)
        {
            //dijalankan jika ada pencarian
            $listbengkel = Bengkel::where('nama','LIKE',"%$filterKeyword%")->paginate(3);
        }
        
        return view('bengkel.index', compact('listbengkel'));
    }

    public function create()
    {
        $kelurahan = Kelurahan::all();
        return view('bengkel.create', compact('kelurahan'));
    }

    public function store(Request $request)
    {
        $dataBengkel = $request->validate([
            'kelurahan_id' => 'required',
            'nama' => 'required',
            'keterangan' => 'required',
            'fasilitas' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
        ]);

        $bengkel = Bengkel::create($dataBengkel);

        if($request->has('gambar')) {
            $gambars = $request->file('gambar');
            foreach($gambars as $gambar) {
                $nama = str_replace(' ', '', $gambar->getClientOriginalName());
                $namaGambar = 'bengkel/'.date('mYdHs').rand(1, 10).'_'.$nama;
                $gambar->storeAs('public/uploads', $namaGambar);

                Gambar::create([
                    'bengkel_id' => $bengkel->id,
                    'gambar' => $namaGambar
                ]);
            }
        }
        
        return redirect('bengkel')->with('status', 'Berhasil menyimpan bengkel');
    }


    public function edit(Bengkel $bengkel)
    {
        $kelurahan = Kelurahan::all();
        return view('bengkel.edit', compact('bengkel', 'kelurahan'));
    }


    public function update(Request $request, Bengkel $bengkel)
    {
        $request->validate([
            'kelurahan_id' => 'required',
            'nama' => 'required',
            'keterangan' => 'required',
            'fasilitas' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
        ]);
        
        Bengkel::where('id', $bengkel->id)
            ->update([
                'kelurahan_id' => $request->kelurahan_id,
                'nama' => $request->nama,
                'keterangan' => $request->keterangan,
                'fasilitas' => $request->fasilitas,
                'latitude' => $request->latitude,
                'longitude' => $request->longitude,
            ]);

        if($request->has('gambar')) {
            $gambars = $request->file('gambar');
            foreach($gambars as $gambar) {
                $nama = str_replace(' ', '', $gambar->getClientOriginalName());
                $namaGambar = 'bengkel/'.date('mYdHs').rand(1, 10).'_'.$nama;
                $gambar->move(public_path().$namaGambar);

                Gambar::create([
                    'bengkel_id' => $bengkel->id,
                    'gambar' => $namaGambar
                ]);
            }
        }

        return redirect('bengkel')->with('status', 'Berhasil mengubah bengkel');
    }

    public function show(Bengkel $bengkel)
    {
        return view('bengkel.detail', compact('bengkel'));
    }

    public function destroy($id)
    {
        $bengkel = Bengkel::findOrFail($id);
        foreach($bengkel->gambar as $gambar) {
            $gambar->delete();
            Storage::disk('local')->delete('public/uploads/'.$gambar->gambar);
        }
        $bengkel->delete();
        return redirect('bengkel')->with('status','Berhasil menghapus bengkel');
    }
}
