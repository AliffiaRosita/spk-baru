<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Criteria;
use App\Kost;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class CriteriaUserController extends Controller
{
    public function index()
    {
        $kriteria = Criteria::count();
        $kost = Kost::count();
        $kosts = Kost::all();
        $user = User::where('id',1)->first();
        $isi_kriteria = Criteria::all();
        return view('dashboarduser',compact('kriteria','kost','kosts','isi_kriteria','user'));
    }

    public function editUser($id)
    {
        $user = User::findOrFail($id);
        return view('pengguna.edit',compact('user'));
    }

    public function updateUser(Request $request, $id)
    {
        $file = null;
        $users= User::findOrFail($id);
        if ($request->file('avatar')) {
            if ($users->avatar && file_exists(storage_path('app/public/'.$users->avatar))) {
                Storage::delete('pubic/'.$users->avatar);
            }
            $file = $request->file('avatar')->store('avatar','public');
        }
        if($request->file('avatar')== null){
            $file = $users->avatar;
        }
        $request->validate([
            'name'=> 'required',
            'email'=> 'required|email',
            'password' => 'required|min:6',
            'gender' =>'required',
            'avatar'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2000'

        ]);
        $users->update([
            'name' => $request->name,
            'email' =>$request->email,
            'password'=> Hash::make($request->password),
            'gender' => $request->gender,
            'role'=>'user',
            'avatar' => $file
        ]);
        return redirect()->route('dashboarduser')->with('status','User Berhasil diubah');
    }
}
