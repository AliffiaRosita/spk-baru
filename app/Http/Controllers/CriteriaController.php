<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Criteria;
use App\Kost;
use App\User;
use Illuminate\Support\Facades\Storage;
use App\CriteriaProcess;

class CriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $isi_kriteria = Criteria::all();
        return view('criteria.index',compact('isi_kriteria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('criteria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       Criteria::create($request->all());
       $request->validate([
            'nama_kriteria'=>'required',
            'Deskripsi'=>'required|min:3'
       ]);
        CriteriaProcess::truncate();
        return redirect()->route('criteria.index')->with('status','Kriteria Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('criteria.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kriteria = Criteria::findOrFail($id);
        return view('criteria.edit',compact('kriteria'));
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
        $kriteria =Criteria::findOrFail($id);
        $request->validate([
            'nama_kriteria'=>'required',
            'Deskripsi'=>'required|min:3'
       ]);
        $kriteria->update([
            'nama_kriteria'=>$request->nama_kriteria,
            'Deskripsi'=>$request->Deskripsi,
        ]);
        return redirect()->route('criteria.index', ['criterias'=>$kriteria])->with('status','Berhasil Update Kriteria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kriteria = Criteria::findOrFail($id);
        $kriteria->delete();
        CriteriaProcess::truncate();
        return redirect()->route('criteria.index')->with('status','Berhasil Mengahapus Kriteria');
    }

    //sementara ku giniiin karna beluma ada lgoin

    public function countadmin()
    {
        $kriteria = Criteria::count();
        $kost = Kost::count();
        $kosts = Kost::all();
        $user = User::count();
        $userss = User::all();
        $isi_kriteria = Criteria::all();
        return view('dashboard',compact('kriteria','kost','kosts','user','userss','isi_kriteria'));
    }
}
