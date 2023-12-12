@extends('admin.layout.appadmin')
@section('content')
@if(Auth::user()->role == 'supir')
@include('admin.dashboard')
@else
<!-- <h1>Tes Index Kartu</h1> -->

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Rute</h1>
                    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="{{route('rute.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Kota Asal</th>
                                            <th>Kota Tujuan</th>
                                            <th>Jarak</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Kota Asal</th>
                                            <th>Kota Tujuan</th>
                                            <th>Jarak</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                        <!-- @php $no=1 @endphp -->
                                        @foreach ($rute as $r)
                                        <tr>
                                            
                                            <!-- Tanpa menggunakan @php $no=1 @endphp -->
                                            <td>{{ $loop->iteration }}</td>
                                            <!-- <td>{{ $no++ }}</td> -->
                                            <td>{{ $r->kode }}</td>
                                            <td>{{ $r->kota_asal }}</td>
                                            <td>{{ $r->kota_tujuan }}</td>
                                            <td>{{ $r->jarak }}</td>
                                        </tr>

                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                <!-- </div> -->
                <!-- /.container-fluid -->

            <!-- </div> -->
            <!-- End of Main Content -->
@endif
@endsection