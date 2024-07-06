<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tempat;
use App\Models\Team;
class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tempat = Tempat::all();
        return view('team.index',compact('tempat'));
    }

    public function index2(Tempat $tempat)
    {
        //
        $team = Team::where('tempat_id',$tempat->tempat_id)->get();
        // dd($team);
        return view('team.index2',compact('team','tempat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Tempat $tempat)
    {
        //
        $team_user1 = Team::select('user_id_1')->where('tempat_id',$tempat->tempat_id)->get();
        $team_user2 = Team::select('user_id_2')->where('tempat_id',$tempat->tempat_id)->get();
        // $team_user[] = $team_user1.$team_user2;
        // dd($team_user);
        $user = User::where('tempat_id',$tempat->tempat_id)->whereNotIn('id',$team_user1)->whereNotIn('id',$team_user2)->get();
        // dd($user);
        return view('team.create',compact('user','tempat'));
    }

    // public function getUser(Request $request)
    // {
    //     $user1 = User::where('tempat_id',$request->id)->get();
    //     $team_user1 = Team::select('user_id_1')->where('tempat_id',$user1->tempat_id)->get();
    //     $team_user2 = Team::select('user_id_2')->where('tempat_id',$user1->tempat_id)->get();
    //     $user = User::where('tempat_id',$tempat->tempat_id)->whereNotIn('id',$team_user1)->whereNotIn('id',$team_user2)->whereNotIn('id',$request->id)->pluck('id','nama');
    //     return \Response::json($user);
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama' => 'required',
            'user1' => 'required',
            'user2' => 'required|different:user1',
        ]);
        
        // dd($role);
        Team::create([
            'nama' => $request->nama,
            'tempat_id' => $request->tempat_id,
            'user_id_1' => $request->user1,
            'user_id_2' => $request->user2,
        ]);

        return redirect()->route('team.index2', $request->tempat_id)->withSuccess('data berhasil ditambah');
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
    public function edit(Team $team)
    {
        //
        $team_user1 = Team::select('user_id_1')->where('tempat_id',$team->tempat_id)->get();
        $team_user2 = Team::select('user_id_2')->where('tempat_id',$team->tempat_id)->get();
        // $team_user[] = $team_user1.$team_user2;
        // dd($team_user);
        $user = User::where('tempat_id',$team->tempat_id)->whereNotIn('id',$team_user1)->whereNotIn('id',$team_user2)->get();
        return view('team.edit',compact('team','user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
        //
        $team->nama = $request->nama;
        $team->user_id_1 = $request->user1;
        $team->user_id_2 = $request->user2;
        $team->save();
        return redirect()->route('team.index2', $team->tempat_id)->withSuccess('data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        //
        $team->delete();
        return redirect()->route('team.index2', $team->tempat_id)->withSuccess('data berhasil dihapus');
    }
}
