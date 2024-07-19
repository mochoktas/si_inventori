<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tempat;
use App\Models\Barang;
use App\Models\Inventori;
use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class InventoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if (Auth::user()->role == 0) {
            $tempat = Tempat::all();
            return view('inventori.index',compact('tempat'));
        }else {
            
            $team = Team::where('user_id_1',Auth::user()->id)->orWhere('user_id_2',Auth::user()->id)->first();
            // dd($team);
            if ($team != "") {
                $inventori = Inventori::where('team_id',$team->team_id)->get();
                return view('inventori.index_user',compact('team','inventori'));
            }else {
                abort(403);
            }
        }
    }

    public function index2(Tempat $tempat)
    {
        //
        $team = Team::where('tempat_id',$tempat->tempat_id)->get();
        // dd($team);
        return view('inventori.index2',compact('team','tempat'));
    }
    public function index3(Team $team)
    {
        //
        $inventori = Inventori::where('team_id',$team->team_id)->get();
        // contoh
        // $products = Product::all();

        // // Convert the model data to an array
        // $data = $inventori->map(function ($inventori) {
        //     return [
        //         'label' => $inventori->barang->nama,
        //         'value' => $inventori->kondisi,
        //     ];
        // })->toArray();
        // $data = [
        //     ['label' => 'Red', 'value' => "A"],
        //     ['label' => 'Blue', 'value' => "B"],
        //     ['label' => 'Yellow', 'value' => "C"]
        // ];
        // dd($team);
        // return view('inventori.index3',compact('team','inventori','data'));
        return view('inventori.index3',compact('team','inventori'));
    }
    // public function indextes()
    // {
    //     // Sample data
    //     $data = [
    //         ['label' => 'Red', 'value' => 300],
    //         ['label' => 'Blue', 'value' => 150],
    //         ['label' => 'Yellow', 'value' => 100]
    //     ];
    //     dd($data);
    //     return view('inventori.indextes', compact('data'));
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Team $team)
    {
        //
        $barang = Barang::all();
        return view('inventori.create',compact('team','barang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request);
        Inventori::create([
            'barang_id' => $request->barang_id,
            'team_id' => $request->team_id,
            'kondisi' => $request->kondisi,
            'sn' => $request->sn,
            'merk' => $request->merk,
            'tahun_pembelian' => $request->tahun_pembelian
        ]);
        return redirect()->route('inventori.index3',$request->team_id)->withSuccess('data berhasil ditambah');
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
        $barang = Barang::all();
        return view('inventori.edit',compact('inventori','barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inventori $inventori)
    {
        //
        $inventori->barang_id = $request->barang_id;
        $inventori->sn = $request->sn;
        $inventori->kondisi = $request->kondisi;
        $inventori->merk = $request->merk;
        $inventori->tahun_pembelian = $request->tahun_pembelian;
        $inventori->save();

        return redirect()->route('inventori.index3',$inventori->team_id)->withSuccess('data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inventori $inventori)
    {
        //
        $inventori->delete();

        return redirect()->route('inventori.index3',$inventori->team_id)->withSuccess('data berhasil dihapus');
    }
}
