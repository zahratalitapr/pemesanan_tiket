@extends('utama.layout.apputama')
@section('content')

<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-start">
				<div class="col-lg-12">
					<div class="active-banner-slider owl-carousel">
						<!-- single-slide -->
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5 col-md-6">
								<div class="banner-content">
									<h1>Yuk<br>Naik Bus!</h1>
                                    
									<p>Dengan Kita Naik bus maka kita akan mengurangi kemacetan saat perjalanan !!!</p>
									<div class="add-bag d-flex align-items-center">
										<a class="add-btn" href="{{ url('/tiket') }}"><span class="lnr lnr-cross"></span></a>
										<span class="add-text text-uppercase">Pesan</span>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="{{asset('utama/img/bus.png')}}" alt="">
								</div>
							</div>
						</div>
						<!-- single-slide -->
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5 col-md-6">
								<div class="banner-content">
									<h1>Yuk<br>Naik Bus!</h1>
                                    
									<p>Dengan Kita Naik bus maka kita akan mengurangi kemacetan saat perjalanan !!!</p>
									<div class="add-bag d-flex align-items-center">
										<a class="add-btn" href="{{ url('/tiket') }}"><span class="lnr lnr-cross"></span></a>
										<span class="add-text text-uppercase">Pesan</span>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="{{asset('utama/img/bis.png')}}" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	

@endsection