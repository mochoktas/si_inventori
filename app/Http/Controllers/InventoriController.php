<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tempat;
use App\Models\Barang;
use App\Models\Inventori;

class InventoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $inventori = Inventori::all();
        return view('inventori.index',compact('inventori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('inventori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Inventori::create([
            'barang_id' => $request->barang_id,
            'tempat_id' => $request->tempat_id,
            'stok' => $request->stok
        ]);
        return redirect()->route('inventori.index')->withSuccess('data berhasil ditambah');
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
    public function edit(Inventori $inventori)
    {
        //
        return view('inventori.edit',compact('inventori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inventori $inventori)
    {
        //
        $inventori->barang_id = $request->barang_id;
        $inventori->tempat_id = $request->tempat_id;
        $inventori->stok = $request->stok;
        $inventori->save();

        return redirect()->route('inventori.index')->withSuccess('data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inventori $inventori)
    {
        //
        $inventori->delete();

        return redirect()->route('inventori.index')->withSuccess('data berhasil dihapus');
    }
}
