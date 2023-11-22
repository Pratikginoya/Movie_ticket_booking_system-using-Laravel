<!DOCTYPE html>
<html>

<head>
	<title>Home</title>
	<link rel="icon" href="{{asset('images/favicon.png')}}">
	<link rel="stylesheet" href="{{asset('bootstrap/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('css/styles.css')}}">
	<link rel="stylesheet" href="{{asset('css/compact_util.css')}}">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
		crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="{{asset('css/material-icon-outlined.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Two+Tone" rel="stylesheet">
	<meta charset="utf-8">
	<script src="https://cdn.lordicon.com//libs/frhvbuzj/lord-icon-2.0.2.js"></script>
	<meta name="theme-color" content="#1a237e">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
</head>

<body id="main-body" class="gilmer-font bg-light">

	<!--Header Start-->
	<header class="navbar p-t-15 p-b-15 shadow-bottom fixed-top navbar-expand-md navbar-dark bd-navbar bg-purple" id="headers">
		<nav class="container-xxl flex-wrap flex-md-nowrap" aria-label="Main navigation">
			<a class=" navbar-brand me-2 f-w-600" id="page-title" href="/" aria-label="Bootstrap">
				<img src="{{asset('images/favicon.png')}}" class="width-50 "> MoviesYet
			</a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bdNavbar"
				aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
				<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" class="bi" fill="currentColor"
					viewBox="0 0 16 16">
					<path fill-rule="evenodd"
						d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z">
					</path>
				</svg>
			</button>
			<div class=" p-l-20 collapse navbar-collapse " id="bdNavbar">
				<ul class="navbar-nav flex-row flex-wrap bd-navbar-nav pt-2 py-md-0">

					<li class="nav-item p-t-5">

						<a class="nav-link active" href="#">
							<span class="material-icons-outlined f-s-25"></span>
							<span class="valign"></span>
						</a>
					</li>
					<li class="nav-item p-t-5">
						<a class="nav-link p-2" aria-current="true" href="movies.html">
							
						</a>
					</li>
					<form class="d-flex m-b-3 m-h-35 m-t-10">

						<input class="form-control me-2" type="search" placeholder="Search Movies" aria-label="Search">
						<button class="butn btn-success text-light" type="submit">Search</button>
					</form>
				</ul>

				
				<ul class="p-t-4 p-r-10 navbar-nav flex-row flex-wrap ms-md-auto">
					@if(Session::has('user_login'))
					<div class="dropdown">
						<button id="location-button" class="valign btn btn-secondary dropdown-toggle" type="button"
							id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
							<span class="f-s-25 valign color-white material-icons-outlined">
								
							</span>My Account
						</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" >
							<li class="myaccount_edit"><a href="/my_booking">View Booking</a> </li>
							<li class="myaccount_edit"><a href="#">My Profile</a> </li>
						</ul>

					</div>
					@endif
				</ul>


				<ul class="p-l-0 p-t-5 navbar-nav">
					@if(Session::has('user_login'))
					<a href="/logout">
						<button class="btn btn-danger ">
							<span class="p-r-10 material-icons-outlined">
								vpn_key
							</span>
							<span>Logout</span>
						</button>
					</a>
					@else
					<a href="/login">
						<button class="btn btn-danger ">
							<span class="p-r-10 material-icons-outlined">
								vpn_key
							</span>
							<span>Login</span>
						</button>
					</a>
					@endif
				</ul>
			</div>

		</nav>
	</header>
	<!--Header End-->

	<!--Gap-->
		<div class="p-b-140" ></div>
	<!--Gap end-->

	<!--Main Content Start-->
	<div class="container">
		<h1 class="color-yellow raleway-bold-font f-s-70 headings headings_font">Have you seen this <b>Movies-Yet</b>?</h1>
	</div>

	<div class="container blur m-w-800 p-b-50 m-t-30 text-light">

		<h2 class="flex-div">
			<img class="m-w-50" src="{{asset('images/svg/film_reel.svg')}}"/>
			<span class="valign2 headings m-l-15">New Releases</span>			
		</h2>
		<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
			<div class="owl-carousel owl-theme slider1" id="slider_1">
				@foreach($arr as $slider)
                <div class="item slider_images">
                    <img src="{{asset('site_images/'.$slider->image)}}">
                </div>
                @endforeach
            </div>
		</div>

	</div>
	<div class="bg-white m-t-30 p-t-30 p-b-30 text-dark">
		<div class="cardz container col-lg-8">
			<h2 class="text-dark flex-div">
				<span class="valign edit_index_movie_title">Recommended Movies</span>
			</h2>
			<div class="row row-cols-1 p-t-20 p-l-10 p-r-10 p-b-40 row-cols-md-3 g-4">
				@foreach($arr2 as $movie)
				<a href="/show-time/{{$movie->movie_id}}" class="edit_a_tag_movies">
				<div class="col fix_size_of_movie_tag">
					<div class="card card-hov bg-grey h-100">
						<div class="image_size_fix">
							<img src="{{asset('site_images/'.$movie->movie_image)}}" class="card-img-top" alt="...">
						</div>
						<div class="card-body">
							<h5 class="card-title">{{$movie->name}}</h5>
							<span class="valign color-yellow material-icons-round">
								grade
							</span>
							IMDB : {{$movie->rating}}/10
						</div>
					</div>
				</div>
				</a>
				@endforeach
				
			</div>
		</div>
	</div>
	<div class="container">

	</div>



	<footer class="footer bg-light" >
		<!-- Copyrights -->
		<div class=" py-4">
			<div class="container text-center">
				<p class="text-muted mb-0 py-2"> MoviesYet © 2021 All rights reserved.</p>
			</div>
		</div>
	</footer>
	
</body>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/navbar.js')}}"></script>
<script src="{{asset('js/code.jquery.com_jquery-3.7.0.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
     <script>
        $(document).ready(function () {
            $('#slider_1').owlCarousel({
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 4000,
                autoplayHoverPause: true,
                nav: true,
                navText: ['<i class="fa-solid fa-chevron-left"></i>', '<i class="fa-solid fa-chevron-right"></i>'],
				items:1,
            });
        });
    </script>

</html>