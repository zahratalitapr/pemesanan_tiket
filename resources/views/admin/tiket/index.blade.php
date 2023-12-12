@extends('admin.layout.appadmin')
@section('content')
@if(Auth::user()->role == 'supir')
@include('admin.dashboard')
@else
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tables Tiket</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                            <a href="{!! url('/admin/tiket/create') !!}"> 
                                <button class="btn btn-sm btn-primary">Tambah</button></a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>no</th>
                                            <th>harga</th>
                                            <th>jadwal id</th>
                                            <th>jenis tiket id</th>
                                            <th>rute id</th>
                                            <th>armada id</th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>no</th>
                                            <th>harga</th>
                                            <th>jadwal id</th>
                                            <th>jenis tiket id</th>
                                            <th>rute id</th>
                                            <th>armada id</th>
                                            <th>aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach ($tiket as $row)
                                    <tr>
                                        <td>{{$row->id_tiket}}</td>
                                        <td>{{$row->harga}}</td>
                                        <td>{{$row->jadwal_id}}</td>
                                        <td>{{$row->jenis_tiket_id}}</td>
                                        <td>{{$row->rute_id}}</td>
                                        <td>{{$row->armada_id}}</td>
                                        <td>ubah</td>
                                        
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