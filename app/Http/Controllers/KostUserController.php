<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kost;
use App\AlternatifProcess;

class KostUserController extends Controller
{
    public function create()
    {
        return view('kost.user-create');
    }

    public function show($name,$id)
    {
        $kost = Kost::findOrFail($id);
        return view('kost.user-show',compact('kost'));
    }

    public function store(Request $request)
    {
        $file = 'img/images_kost.png';
        if ($request->file('kost_pict')) {
            $file = $request->file('kost_pict')->store('kost','public');
        }

        $request->validate([
            'nama_kost' => 'required|max:50',
            'alamat'=>'required',
            'no_tlp'=>'min:12|numeric',
            'harga'=>'required|integer|not_in:0',
            'jenis_kost'=>'required',
            'kost_pict'=> 'image|mimes:jpeg,png,jpg,gif,svg|max:2000'
        ]);

        Kost::create([
           'nama_kost' => $request->nama_kost,
           'alamat'=>$request->alamat,
           'no_tlp'=>$request->no_tlp,
           'harga'=>$request->harga,
           'jenis_kost'=>$request->jenis_kost,
           'kost_pict'=> $file
        ]);
        AlternatifProcess::where('id_user',3)->delete();

        return redirect()->route('dashboarduser');
    }

    public function edit($id)
    {
        $kost = Kost::findOrFail($id);
        return view('kost.user-edit',compact('kost'));
    }

    public function update(Request $request, $id)
    {

        $kost = Kost::findOrFail($id);
        $file = null;
        if ($request->file('kost_pict')) {
            if ($kost->kost_pict && file_exists(storage_path('app/public/'.$kost->kost_pict))) {
                Storage::delete('pubic/'.$kost->kost_pict);
            }
            $file = $request->file('kost_pict')->store('kost','public');
        }

        if ($file == null) {
            $file = $kost->kost_pict;
        }

        $request->validate([
            'nama_kost' => 'required|max:50',
            'alamat'=>'required',
            'no_tlp'=>'max:13',
            'harga'=>'required|integer|min:0',
            'jenis_kost'=>'required',
            'kost_pict'=> 'image|mimes:jpeg,png,jpg,gif,svg|max:2000'
        ]);

        $kost->update([
           'nama_kost' => $request->nama_kost,
           'alamat'=>$request->alamat,
           'no_tlp'=>$request->no_tlp,
           'harga'=>$request->harga,
           'jenis_kost'=>$request->jenis_kost,
           'kost_pict'=> $file
        ]);
        return redirect()->route('dashboarduser');
    }
    public function destroy($id)
    {
        $kost = Kost::findOrFail($id);
        $kost->delete();
        return redirect()->route('dashboarduser');
    }
}
