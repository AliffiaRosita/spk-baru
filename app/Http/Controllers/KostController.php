<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kost;
use Illuminate\Support\Facades\Storage;
use App\AlternatifProcess;

class KostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kosts = Kost::all();
        return view('kost.index', compact('kosts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kost.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        AlternatifProcess::truncate();
        return redirect()->route('kost.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kost = Kost::findOrFail($id);
        return view('kost.edit',compact('kost'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $kost = Kost::findOrFail($id);
        $file = null;
        $request->validate([
            'nama_kost' => 'required|max:50',
            'alamat'=>'required',
            'no_tlp'=>'max:13',
            'harga'=>'required|integer|min:0',
            'jenis_kost'=>'required',
            'kost_pict'=> 'image|mimes:jpeg,png,jpg,gif,svg|max:2000'
        ]);

        if ($request->file('kost_pict')) {
            if ($kost->kost_pict && file_exists(storage_path('app/public/'.$kost->kost_pict))) {
                Storage::delete('pubic/'.$kost->kost_pict);
            }
            $file = $request->file('kost_pict')->store('kost','public');
        }

        if ($file == null) {
            $file = $kost->kost_pict;
        }


        $kost->update([
           'nama_kost' => $request->nama_kost,
           'alamat'=>$request->alamat,
           'no_tlp'=>$request->no_tlp,
           'harga'=>$request->harga,
           'jenis_kost'=>$request->jenis_kost,
           'kost_pict'=> $file
        ]);
        return redirect()->route('kost.index',['kosts'=> $kost]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kost = Kost::findOrFail($id);
        $kost->delete();
        AlternatifProcess::truncate();
        return redirect()->route('kost.index');
    }
}
