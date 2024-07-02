<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use App\Models\Tempat;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tempat = Tempat::all();
        return view('user.index',compact('tempat'));
    }

    public function index2(Tempat $tempat)
    {
        //
        $user = User::where('tempat_id',$tempat->tempat_id)->get();
        // dd($user);
        return view('user.index2',compact('user','tempat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Tempat $tempat)
    {
        //
        return view('user.create',compact('tempat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama' => 'required',
            'email_pribadi' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        // dd($request);
        User::create([
            'nama' => $request->nama,
            'email_pribadi' => $request->email_pribadi,
            'password' => Hash::make($request->password),
            'tempat_id' => $request->tempat_id,
            'role' => 1
        ]);

        return redirect()->route('user.index2', $request->tempat_id)->withSuccess('data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
        return view('user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
        $user->nama = $request->nama;
        if ($request->password != "") {
            $user->password = Hash::make($request->password);
        }
        
        $user->save();
        return redirect()->route('user.index2', $user->tempat_id)->withSuccess('data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
        $user->delete();
        return redirect()->route('user.index2', $user->tempat_id)->withSuccess('data berhasil dihapus');
    }
}
