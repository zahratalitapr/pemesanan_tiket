@extends('admin.layout.appadmin')
@section('content')
@if(Auth::user()->role != 'admin')
@include('admin.dashboard')
@else
<main>
    <h1 class="h3 mb-2 text-gray-800">Penumpang</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{url('/admin/penumpang/create')}}"> <button class="btn btn-sm btn-primary">Tambah</button></a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nama</th>
                                            <th>Gender</th>
                                            <th>No. Tlp</th>
                                            <th>Berat Bawaan</th>
                                            <th>Password</th>
                                            <th>Foto</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nama</th>
                                            <th>Gender</th>
                                            <th>No. Tlp</th>
                                            <th>Berat Bawaan</th>
                                            <th>Password</th>
                                            <th>Foto</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach ($penumpang as $row)
                                    <tr>
                                        <td>{{$row->id}}</td>
                                        <td>{{$row->nama}}</td>
                                        <td>{{$row->gender}}</td>
                                        <td>{{$row->no_telepon}}</td>
                                        <td>{{$row->berat_bawaan}}</td>
                                        <td>{{$row->password}}</td>
                                        <td>{{$row->foto}}</td>

                                        
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>

@endif
@endsection