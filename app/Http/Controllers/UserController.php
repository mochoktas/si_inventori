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

    public function profile()
    {
        return view('user.profile');
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
        // dd($request);
        $request->validate([
            'nama' => 'required',
            'email_pribadi' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        if ($request->tgl_lahir != "") {
            $tgl_lahir2 = date('Y-m-d', strtotime($request->tgl_lahir));
        }else {
            $tgl_lahir2 = null;
        }
        if ($request->tgl_masuk != "") {
            $tgl_masuk2 = date('Y-m-d', strtotime($request->tgl_masuk));
        }else {
            $tgl_masuk2 = null;
        }
        // dd($tgl_lahir2);
        if ($request->role == "") {
            $role = 1;
        }else {
            $role = $request->role;
        }
        // dd($role);
        User::create([
            'nama' => $request->nama,
            'email_pribadi' => $request->email_pribadi,
            'password' => Hash::make($request->password),
            'tempat_id' => $request->tempat_id,
            'role' => $role,
            'jobdesk'=> $request->jobdesk,
            'data_yang_kurang' => $request->data_yang_kurang,
            'pendidikan' => $request->pendidikan,
            'nik_ta' => $request->nik_ta,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $tgl_lahir2,
            'alamat' => $request->alamat,
            'no_kk' => $request->no_kk,
            'no_ktp' => $request->no_ktp,
            'no_hp_teknisi' => $request->no_hp_teknisi,
            'no_hp_keluarga' => $request->no_hp_keluarga,
            'nama_keluarga_yang_bisa_dihubungi' => $request->nama_keluarga_yang_bisa_dihubungi,
            'nama_ibu' => $request->nama_ibu,
            'tanggal_masuk' => $tgl_masuk2,
            'bpjs_ketenagakerjaan' => $request->bpjs_ketenagakerjaan,
            'bpjs_kesehatan' => $request->bpjs_kesehatan,
            'merk_kendaraan' => $request->merk_kendaraan,
            'nopol_kendaraan' => $request->nopol_kendaraan,
            'baju' => $request->baju,
            'sepatu' => $request->sepatu,
            'celana' => $request->celana,
            'crew_id' => $request->crew_id,
            'labourcode' => $request->labourcode,
            'telegram_id' => $request->telegram_id,
            'username' => $request->username,
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
        if ($request->tgl_lahir != "") {
            $tgl_lahir2 = date('Y-m-d', strtotime($request->tgl_lahir));
        }else {
            $tgl_lahir2 = null;
        }
        if ($request->tgl_masuk != "") {
            $tgl_masuk2 = date('Y-m-d', strtotime($request->tgl_masuk));
        }else {
            $tgl_masuk2 = null;
        }
        
        $user->nama = $request->nama;
        if ($request->password != "") {
            $user->password = Hash::make($request->password);
        }
        $user->role = $request->role;
        $user->jobdesk= $request->jobdesk;
        $user->data_yang_kurang = $request->data_yang_kurang;
        $user->pendidikan = $request->pendidikan;
        $user->nik_ta = $request->nik_ta;
        $user->tempat_lahir = $request->tempat_lahir;
        $user->tanggal_lahir = $tgl_lahir2;
        $user->alamat = $request->alamat;
        $user->no_kk = $request->no_kk;
        $user->no_ktp = $request->no_ktp;
        $user->no_hp_teknisi = $request->no_hp_teknisi;
        $user->no_hp_keluarga = $request->no_hp_keluarga;
        $user->nama_keluarga_yang_bisa_dihubungi = $request->nama_keluarga_yang_bisa_dihubungi;
        $user->nama_ibu = $request->nama_ibu;
        $user->tanggal_masuk = $tgl_masuk2;
        $user->bpjs_ketenagakerjaan = $request->bpjs_ketenagakerjaan;
        $user->bpjs_kesehatan = $request->bpjs_kesehatan;
        $user->merk_kendaraan = $request->merk_kendaraan;
        $user->nopol_kendaraan = $request->nopol_kendaraan;
        $user->baju = $request->baju;
        $user->sepatu = $request->sepatu;
        $user->celana = $request->celana;
        $user->crew_id = $request->crew_id;
        $user->labourcode = $request->labourcode;
        $user->telegram_id = $request->telegram_id;
        $user->username = $request->username;
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
