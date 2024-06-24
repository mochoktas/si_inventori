<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tempat;

class TempatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tempat = Tempat::all();
        return view('tempat.index',compact('tempat'));
    }

    public function index2()
    {
        //
        $tempat = Tempat::all();
        return view('blank',compact('tempat'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('tempat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Tempat::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat
        ]);
        return redirect()->route('tempat.index')->withSuccess('data berhasil ditambah');
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
    public function edit(Tempat $tempat)
    {
        //
        return view('tempat.edit',compact('tempat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tempat $tempat)
    {
        //
        $tempat->nama = $request->nama;
        $tempat->alamat = $request->alamat;
        $tempat->save();

        return redirect()->route('tempat.index')->withSuccess('data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tempat $tempat)
    {
        //
        $tempat->delete();

        return redirect()->route('tempat.index')->withSuccess('data berhasil dihapus');
    }
}
