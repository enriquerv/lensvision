@extends('layout.principal')

@section('title')
	{{ $title }}
@endsection

@section('styles')
@endsection

@section('content')

	<section class="row banner1 my-5">
		<div class="px-4 d-sm-none d-md-block col-md-4 text-center"><hr></div>
		<div class="col-sm-12 col-md-4 text-center text">LENSVISION</div>
		<div class="px-4 d-sm-none d-md-block col-md-4 text-center"><hr></div>
	</section>

	<section class="container">
		<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="https://via.placeholder.com/1920x1080.png/ffffff/133183" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="https://via.placeholder.com/1920x1080.png/ffffff/133183" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="https://via.placeholder.com/1920x1080.png/ffffff/133183" class="d-block w-100" alt="...">
				</div>
			</div>
			<button class="carousel-control carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</section>

	<section class="banner2 my-5">
		<div class="row">
			<div class="col-12 mt-5"></div>
			<div class="col-12 mt-5"></div>
			<div class="col-12 mt-5"></div>
			<div class="col-12 mt-5"></div>
			<div class="col-12 mt-5"></div>
			<div class="col-12 mt-5"></div>
			<div class="col-12 mt-5"></div>
			<div class="col-12 mt-5"></div>
			<div class="col-12 mt-5"></div>
			<div class="col-12 mt-5 mb-5 text-center">
				<button class="btn btn-primary btn-vision"><p class="px-3 py-2 h5 mx-0 my-0">Conoce más</p></button>
			</div>
		</div>
	</section>

	<section class="banner3">
		<div class="row">
			<div class="col-md-4 text-center">
				<img class="img_lens" src="https://via.placeholder.com/300x350.png/ffffff/133183">
			</div>
			<div class="col-md-4 text-center">
				<img class="img_lens" src="https://via.placeholder.com/300x350.png/ffffff/133183">
			</div>
			<div class="col-md-4 text-center">
				<img class="img_lens" src="https://via.placeholder.com/300x350.png/ffffff/133183">
			</div>
		</div>
	</section>

	<section class="somoslens my-5">
		<p class="text-center">#SOMOSLENSVISION</p>
	</section>

@endsection

@section('modal-section')
@endsection

@section('scripts')
@endsection
