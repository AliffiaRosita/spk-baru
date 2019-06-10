<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $count = User::count();
        return view('User.index',['count'=>$count,'users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('User.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = 'img/images.png';
        if($request->file('avatar')){
            $file =$request->file('avatar')->store('avatar','public');
        }
        $request->validate([
            'name'=> 'required',
            'email'=> 'required|email',
            'password' => 'required|min:6',
            'gender' =>'required',
            'avatar'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2000'

        ]);
         User::create([
            'name' => $request->name,
            'email' =>$request->email,
            'password'=> Hash::make($request->password),
            'gender' => $request->gender,
            'role' => 'user',
            'avatar' => $file
        ]);
        return redirect()->route('user.index')->with('status','User Berhasil Ditambahkan');

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
        $users = User::findOrFail($id);
        return view('User.edit',compact('users'));
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
        return redirect()->route('user.index')->with('status','User Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::findOrFail($id);
        $users->delete();

        return redirect()->route('user.index')->with('status','User Berhasil dihapus');

    }
}
