<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Gaji;
use Illuminate\Support\Facades\Auth;

class GajiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(User $user)
    {
        //
        $gaji = Gaji::where('user_id',$user->id)->orderBy('tanggal_gaji','desc')->get();
        return view('gaji.index',compact('gaji','user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(User $user)
    {
        //
        $gaji = Gaji::where('user_id',$user->id)->orderBy('tanggal_gaji','desc')->first();
        // dd($gaji);
        return view('gaji.create',compact('user','gaji'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tanggal_gaji = $request->tahun."-".$request->bulan."-01";
        // dd($tanggal_gaji);
        Gaji::create([
            'gaji' => $request->gaji,
            'tanggal_gaji' => $tanggal_gaji,
            'user_id' => $request->user_id,
        ]);

        return redirect()->route('gaji.index', $request->user_id)->withSuccess('data berhasil ditambah');
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
    public function edit(Gaji $gaji)
    {
        //
        return view('gaji.edit',compact('gaji'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gaji $gaji)
    {
        //
        $tgl_gaji = $request->tahun."-".$request->bulan."-01";
        $gaji->tanggal_gaji = $tgl_gaji;
        $gaji->gaji = $request->gaji;
        $gaji->save();
        return redirect()->route('gaji.index', $gaji->user_id)->withSuccess('data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gaji $gaji)
    {
        //
        $gaji->delete();
        return redirect()->route('gaji.index', $gaji->user_id)->withSuccess('data berhasil dihapus');
    }
}
