@extends('admin.layout.appadmin')
@section('content')

                    <!-- Content Row -->
                    <div class="row">

                    <!-- Card Data Armada -->
                    <div class="col-lg-6 mb-3">
                        <div class="card border-left-primary shadow h-100 py-2">

                            <a href="{{url('admin/armada')}}">

                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Data Armada</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                            <!-- <a href="{{url('admin/produk')}}"><i class="fas fa-calendar fa-2x text-gray-300"></i></a> -->
                                            <!-- <i class="fab fa-product-hunt"></i> -->
                                        </div>
                                    </div>
                                </div>

                            </a>

                        </div>
                        </div>
                        <!-- Card data Armada End -->

                        <!-- Card Data Jadwal -->
                        <div class="col-lg-6 mb-3">
                            <div class="card border-left-primary shadow h-100 py-2">

                            <a href="{{url('admin/jadwal')}}">

                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Data Jadwal</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                            <!-- <a href="{{url('admin/produk')}}"><i class="fas fa-calendar fa-2x text-gray-300"></i></a> -->
                                            <!-- <i class="fab fa-product-hunt"></i> -->
                                        </div>
                                    </div>
                                </div>

                            </a>

                            </div>
                        </div>
                        <!-- Card Data Jadwal End -->
                        @if(Auth::user()->role != 'supir')

                        <!--  Card Data Rute -->
                         <div class="col-lg-6 mb-3">
                            <div class="card border-left-primary shadow h-100 py-2">

                            <a href="{{url('admin/rute')}}">

                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Data Rute</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                            <!-- <a href="{{url('admin/produk')}}"><i class="fas fa-calendar fa-2x text-gray-300"></i></a> -->
                                            <!-- <i class="fab fa-product-hunt"></i> -->
                                        </div>
                                    </div>
                                </div>

                            </a>

                            </div>
                        </div>
                        <!-- Card Data Rute end -->

                        <!-- Card Data Tiket -->
                         <div class="col-lg-6 mb-3">
                            <div class="card border-left-primary shadow h-100 py-2">

                            <a href="{{url('admin/tiket')}}">

                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Data tiket</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                            <!-- <a href="{{url('admin/produk')}}"><i class="fas fa-calendar fa-2x text-gray-300"></i></a> -->
                                            <!-- <i class="fab fa-product-hunt"></i> -->
                                        </div>
                                    </div>
                                </div>

                            </a>

                            </div>
                        </div>
                        <!-- Card Data Tiket End -->
                        @endif
                        @if(Auth::user()->role == 'admin')
                        <!-- Card Data Transaksi -->
                         <div class="col-lg-3 mb-1">
                            <div class="card border-left-primary shadow h-100 py-2">

                            <a href="{{url('admin/transaksi')}}">

                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Data transaksi</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                            <!-- <a href="{{url('admin/produk')}}"><i class="fas fa-calendar fa-2x text-gray-300"></i></a> -->
                                            <!-- <i class="fab fa-product-hunt"></i> -->
                                        </div>
                                    </div>
                                </div>

                            </a>

                            </div>
                        </div>
                        <!-- Card Data Transaksi End -->

                        <!-- Card Data Penumpang -->
                         <div class="col-lg-3 mb-3">
                            <div class="card border-left-primary shadow h-100 py-2">

                            <a href="{{url('admin/penumpang')}}">

                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Data Penumpang</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                            <!-- <a href="{{url('admin/produk')}}"><i class="fas fa-calendar fa-2x text-gray-300"></i></a> -->
                                            <!-- <i class="fab fa-product-hunt"></i> -->
                                        </div>
                                    </div>
                                </div>

                            </a>

                            </div>
                        </div>
                        <!-- Card Data Penumpang End -->

                         <!-- Card Data Member -->
                         <div class="col-lg-3 mb-3">
                            <div class="card border-left-primary shadow h-100 py-2">

                            <a href="{{url('admin/member')}}">

                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Data Member</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                            <!-- <a href="{{url('admin/produk')}}"><i class="fas fa-calendar fa-2x text-gray-300"></i></a> -->
                                            <!-- <i class="fab fa-product-hunt"></i> -->
                                        </div>
                                    </div>
                                </div>

                            </a>

                            </div>
                        </div>
                        <!-- Card Data Member End -->
                        </div>
                    </div>


@endif
@endsection
