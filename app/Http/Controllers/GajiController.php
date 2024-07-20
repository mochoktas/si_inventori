<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Gaji;
use Illuminate\Support\Facades\Auth;
use PDF;

class GajiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(User $user)
    {
        //
        if (Auth::user()->role == 0) {
            $gaji = Gaji::where('user_id',$user->id)->orderBy('tanggal_gaji','desc')->get();
            return view('gaji.index',compact('gaji','user'));
        }else {
            $gaji = Gaji::where('user_id',Auth::user()->id)->orderBy('tanggal_gaji','desc')->get();
            // dd($gaji);
            if ($gaji != "") {
                return view('gaji.index_user',compact('gaji'));
            }else {
                abort(403);
            }
        }
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
    public function print(Request $request)
    {
        // dd($request);
        $tanggal_gaji1 = $request->tahun1."-".$request->bulan1."-01";
        $tanggal_gaji2 = $request->tahun2."-".$request->bulan2."-01";
        $user = User::where('id',$request->user_id)->first();
        $gaji = Gaji::where('user_id',$request->user_id)->whereBetween('tanggal_gaji',[$tanggal_gaji1,$tanggal_gaji2])->get() ;
        // dd($gaji);
        $pdf = PDF::loadView('gaji.pdf', compact('user','gaji'));
        return $pdf->download('gaji.pdf');
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
