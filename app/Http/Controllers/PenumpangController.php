<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penumpang;
use Illuminate\Support\Facades\DB;

class PenumpangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $penumpang = Penumpang::all();
        return view('admin.penumpang.index', compact('penumpang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $penumpang = Penumpang::all();
        $gender = ['Laki-laki', 'Perempuan'];
        return view('admin.penumpang.create', compact('penumpang', 'gender'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $penumpang = new Penumpang;
        $penumpang->nama = $request->nama;
        $penumpang->gender = $request->gender;
        $penumpang->no_telepon = $request->no_telepon;
        $penumpang->berat_bawaan = $request->berat_bawaan;
        $penumpang->password = $request->password;
        $penumpang->foto = $request->foto;
        $penumpang->save();
        return redirect('/admin/penumpang'); 
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
