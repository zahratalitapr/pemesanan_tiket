<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rute;
// use DB digunakan sebagai syarat ketika membuat sintaks query builder
// use DB; 
use Illuminate\Support\Facades\DB;

class RuteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                // sintaks menggunakan eloquent (ORM)
                $rute = Rute::all();
                return view('admin.rute.index', ['rute' => $rute]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.rute.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // tambah data eloquent
        $rute = new Rute;
        $rute->kode = $request->kode;
        $rute->kota_asal = $request->kota_asal;
        $rute->kota_tujuan = $request->kota_tujuan;
        $rute->jarak = $request->jarak;
        $rute->save();
        return redirect('admin/rute');
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
        //
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
    }
}
