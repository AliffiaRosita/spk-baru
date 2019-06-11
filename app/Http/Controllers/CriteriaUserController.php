<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Criteria;
use App\Kost;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class CriteriaUserController extends Controller
{
    public function index(Request $request)
    {
        $kriteria = Criteria::count();
        $kost = Kost::count();
        $user = User::where('id',Auth::id())->first();
        $isi_kriteria = Criteria::all();
        if($request->nama_kost == null){
            $kosts = Kost::all();
        }else{
            $kosts = Kost::where('nama_kost','LIKE',"%$request->nama_kost%")->get();
        }
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
            'gender' =>'required',
            'avatar'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2000'

        ]);

        if ($request->password) {
            $users->update([
                'password'=> Hash::make($request->password),
            ]);
        }
        $users->update([
            'name' => $request->name,
            'email' =>$request->email,
            'gender' => $request->gender,
            'role'=>'user',
            'avatar' => $file
        ]);
        return redirect()->route('edit.user.user',['id'=>$users->id])->with('status','User Berhasil diubah');
    }
}
