<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelurahan;
use Storage;

class KelurahanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $listkelurahan = Kelurahan::paginate(5);
        $filterKeyword = $request->get('keyword');
        if($filterKeyword)
        {
            //dijalankan jika ada pencarian
            $listkelurahan = Kelurahan::where('nama','LIKE',"%$filterKeyword%")->paginate(5);
        }
        return view('kelurahan.index', compact('listkelurahan'));
    }

    public function edit(Kelurahan $kelurahan)
    {
        return view('kelurahan.edit', compact('kelurahan'));
    }


    public function update(Request $request, Kelurahan $kelurahan)
    {
        $request->validate([
            'nama' => 'required|min:3',
        ]);
        
        Kelurahan::where('id', $kelurahan->id)
            ->update([
                'nama' => $request->nama,
            ]);
        return redirect('kelurahan');
    }

    public function destroy($id)
    {
        $data = Kelurahan::findOrFail($id);
        $data->delete();
        return redirect()->route('kelurahan.index')->with('status','Bengkel Berhasil didelete');
    }

}
