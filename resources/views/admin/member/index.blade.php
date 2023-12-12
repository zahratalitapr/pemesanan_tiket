@extends('admin.layout.appadmin')
@section('content')
@if(Auth::user()->role != 'admin')
@include('admin.dashboard')
@else
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tables Member</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                            <a href="{!! url('/admin/member/create') !!}">
                                <button class="btn btn-sm btn-primary">Tambah</button></a>
                            </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>no</th>
                                            <th>Id</th>
                                            <th>Nama</th>
                                            <th>Password</th>
                                            <th>Role</th>
                                            <th>Foto</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>no</th>
                                            <th>Id</th>
                                            <th>Nama</th>
                                            <th>Password</th>
                                            <th>Role</th>
                                            <th>Foto</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @php $no=1 @endphp
                                    @foreach ($member as $row)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{$row->id}}</td>
                                        <td>{{$row->nama}}</td>
                                        <td>{{$row->password}}</td>
                                        <td>{{$row->role}}</td>
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