<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//pemanggilan models didalam controller 
use App\Models\Member;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // sintaks menggunakan eloquent
        $member = Member::all();
        return view('admin.member.index', compact('member'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //tambah data 
        $member = DB::table('member')->get();
        return view ('admin.member.create', compact('member'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       //tambah data menggunakan query builder
       DB::table('member')->insert([
        'id'=>$request->id,
        'nama'=>$request->nama,
        'email'=>$request->email,
        'password'=>$request->password,
        'role'=>$request->role,
        'foto'=>$request->foto,
    ]);
    Alert::success('Success Title', 'Success Message');
    return redirect('admin/member');
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
        $member = Member::where('nama', $id)->get();
        return view('admin.member.index', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $member = DB::table('member')->where('nama',$id)->get();
        return view ('admin.member.edit', compact('member'));
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
        DB::table('member')->where('id',$request->id)->update([
            'nama'=>$request->nama,
            'email'=>$request->harga_beli,
            'password'=>$request->harga_jual,
            'role'=>$request->stok,
            'foto'=>$fileName,
        ]);
        return redirect('admin/member');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::table('member')->where('nama', $id)->delete();
        return redirect('member');
    }
}