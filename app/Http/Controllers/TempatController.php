<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tempat;
use App\Models\Team;
use App\Models\Inventori;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

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

    public function tempat_inventori(Tempat $tempat)
    {
        //
        $team = Team::where('tempat_id',$tempat->tempat_id)->get();
        // dd($team);
        $inv = [];
        foreach ($team as $data) {
            $total = Inventori::where('team_id',$data->team_id)->count();
            $rusak = Inventori::where('team_id',$data->team_id)->whereNot('kondisi','Rusak')->count();
            $inv[] = [
                'total' => $total,
                'saat_ini' => $rusak,
                'team_id' => $data->team_id,
                'nama' => $data->nama, 
            ];
        }
        $json = json_encode($inv);
        $arr = json_decode($json);
        // dd($arr);
        // foreach ($arr as $key => $value) {
        //     dd($value->total);
        // }
        $barang = Inventori::select('barang_id', DB::raw('count(*) as total'))
        ->join('team', 'inventori.team_id', '=', 'team.team_id')
        ->where('kondisi', "Rusak")
        ->where('team.tempat_id', $tempat->tempat_id)
        ->groupBy('barang_id')
        ->get();
        $brg = [];
        foreach ($barang as $data) {
            $team2 = Inventori::where('kondisi', "Rusak")
            ->where('barang_id',$data->barang->barang_id)
            ->get();
            $arrtim = [];
            foreach ($team2 as $tim) {
                $arrtim[] = [
                    'team' => $tim->team->nama,
                ];
            }
            $brg[] = [
                'nama' => $data->barang->nama, 
                'tim' => $arrtim,
            ];
        }
        $json2 = json_encode($brg);
        $arr2 = json_decode($json2);
        // dd($arr2);
        return view('tempat.index_front',compact('arr','arr2'));
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
        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
        // $imageName = time().'.'.$request->image->extension();
        // $request->image->move(public_path('images'), $imageName);
        // $image = Str::replace('data:image/jpeg;base64,', '', $request->image);
        // $image = Str::replace(' ', ' + ', $image);
        // $imageName = time().'.'.$request->image;
        // dd($imageName);
        // Storage::disk('public')->put($imageName, base64_decode($image));
        
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        // dd($request);
        $imageName = time().'.'.$request->image->extension();
        // dd($imageName);
        $request->image->move(public_path('images'), $imageName);
        $tempat = new Tempat();
        $tempat->nama = $request->nama;
        $tempat->alamat = $request->alamat;
        $tempat->image = 'images/'.$imageName;
        $tempat->save();
        // Tempat::create([
        //     'nama' => $request->nama,
        //     'alamat' => $request->alamat,
        //     'image' => $imageName
        // ]);
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
        // dd($request);
        if ($request->image != "") {
            if ($tempat->image != "") {
                $filedeleted = unlink(public_path($tempat->image));
            }
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $tempat->image = 'images/'.$imageName;
        }
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
        if ($tempat->image != "") {
            $filedeleted = unlink(public_path($tempat->image));
        }
        $tempat->delete();

        return redirect()->route('tempat.index')->withSuccess('data berhasil dihapus');
    }
}
