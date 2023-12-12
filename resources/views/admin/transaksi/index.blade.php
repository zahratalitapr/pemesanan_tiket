@extends('admin.layout.appadmin')
@section('content')
@if(Auth::user()->role != 'admin')
@include('admin.dashboard')
@else
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tables Transaksi</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                            <a href="{!! url('/admin/transaksi/create') !!}">
                                <button class="btn btn-sm btn-primary">Tambah</button></a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>no</th>
                                            <th>Total Tiket</th>
                                            <th>Total harga</th>
                                            <th>penumpang_id</th>
                                            <th>tiket_id</th>
                                            <th>tanggal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>no</th>
                                            <th>Total Tiket</th>
                                            <th>Total harga</th>
                                            <th>penumpang_id</th>
                                            <th>tiket_id</th>
                                            <th>tanggal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach ($transaksi as $row)
                                    <tr>
                                    <td>{{$row->id_transaksi}}</td>
                                        <td>{{$row->total_tiket}}</td>
                                        <td>{{$row->totalharga}}</td>
                                        <td>{{$row->penumpang_id}}</td>
                                        <td>{{$row->tiket_id}}</td>
                                        <td>{{$row->tanggal}}</td>
                                        <td>Ubah</td>
                                        
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