<?php

$conn = mysqli_connect('localhost','root','','movie_ticket_booking_system');

 ?>

<!DOCTYPE html>
<html>
<head>
<title>Show_time</title>

<!-- Movie Yet Link -->
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

<!-- Other Link -->
<link href="{{asset('other/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="{{asset('other/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="{{asset('other/js/jquery.min.js')}}"></script>
<script src="{{asset('other/js/bootstrap.min.js')}}"></script>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="My Show Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<!-- start menu -->
<link href="{{asset('other/css/megamenu.css')}}" rel="stylesheet" type="text/css" media="all" />

<script type="text/javascript" src="{{asset('other/js/megamenu.js')}}"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script type="text/javascript" src="{{asset('other/js/jquery.leanModal.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('other/css/font-awesome.min.css')}}" />
<script src="{{asset('other/js/easyResponsiveTabs.js')}}" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
</script>
<link rel="stylesheet" href="{{asset('other/css/menu.css')}}" />
    <!-- HTML5 shim and Respond.js')}} IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
<script src="https://oss.maxcdn.com/libs/respond.{{asset('other/js/1.3.0/respond.min.js')}}"></script>
<![endif]-->
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="{{asset('other/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('other/js/easing.js')}}"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
<!---- start-smoth-scrolling---->
</head>
<body>

	<!--Header Start-->
	<header class="navbar p-t-15 p-b-15 shadow-bottom fixed-top navbar-expand-md navbar-dark bd-navbar bg-purple" id="headers">
		<nav class="d-flex justify-content-between header_edit_show" aria-label="Main navigation">
			<a class=" navbar-brand f-w-600 logo_edit_show" id="page-title" href="/" aria-label="">
				<img src="{{asset('images/favicon.png')}}" class="width-50 "> MoviesYet
			</a>

			<div class=" p-l-20 collapse navbar-collapse login_edit_show" id="bdNavbar">
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


				<ul class="p-l-0 p-t-5 navbar-nav text-end">
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


<div class="pic-a-movie">
		@foreach($arr as $movie)
		<h3>{{$movie->name}} </h3>
		</div>	
		<div class="now-showing-list">
		<div class="col-md-4 movies-by-category movie-booking">
			<div class="movie-ticket-book">
					<img src="{{asset('site_images/'.$movie->movie_image)}}" alt="">
					<div class="bahubali-details">
						<h4>Release Date:</h4>
						<p>{{$movie->release_date}}</p>
						<h4>Duration:</h4>
						<p>{{$movie->duration}}</p>
						<h4>Director:</h4>
						<p>{{$movie->director}}</p>
						<h4>Language:</h4>
						<p>{{$movie->language}}</p>
					</div>	
				</div>
			</div>
		<div class="col-md-8 movies-dates">	
		@endforeach

		<div class="select-day-booking-ticket">
			<div class="tabs">
					<div class="sap_tabs" >	
							 <div id="horizontalTab">
					@php

                 	date_default_timezone_set('Asia/Kolkata');
                 	$today1 = date('d');
		        	$today2 = date('d',strtotime('+1 day'));
		        	$today3 = date('d',strtotime('+2 day'));
		        	$today4 = date('d',strtotime('+3 day'));
		        	$today5 = date('d',strtotime('+4 day'));
		        	$today6 = date('d',strtotime('+5 day'));

		        	@endphp
							  <ul class="resp-tabs-list" style="padding: 10px; padding-bottom: 0;">
								  <li class="resp-tab-item" aria-controls="tab_item-5" role="tab"><span>{{$t1}}</span></li>
								  <li class="resp-tab-item" aria-controls="tab_item-4" role="tab"><span>{{$t2}}</span></li>
								  <li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span>{{$t3}}</span></li>
								  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>{{$t4}}</span></li>
								  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>{{$t5}}</span></li>
								  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>{{$t6}}</span></li>
								  <div class="clearfix"></div>
							  </ul>			

		<div class="resp-tabs-container">

			<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
			@foreach($cinema1 as $show)
			@php

			$select = "select * from cinema_register where cinema_id = $show->user_id";
			$data = mysqli_query($conn,$select);

			@endphp
				<div role="tabpanel" class="tab-pane fade in active edit_cinema_show_time" id="home" aria-labelledby="home-tab" style="margin-top: 30px;">		

					@while($row=mysqli_fetch_assoc($data))
	                 <p class="m-s-t">{{$row['th_name']}}</p>

	                 @php

	                 $user_id = $row['cinema_id'];
	                 $select_show = "select * from movie_show where m_id=$id and user_id=$user_id and date=$today1 order by show_time asc";
	                 $data_show = mysqli_query($conn,$select_show);

	                 @endphp
		                 @while($row_s = mysqli_fetch_assoc($data_show))
						 <a href="{{$row['th_name']}}_{{$row['location']}}_screen_{{$row_s['screen']}}/{{$row_s['show_id']}}" class="show-time">{{$row_s['show_time']}}</a>
						 @endwhile
						 <div class="clearfix"></div>
					@endwhile
				</div>
			@endforeach
			</div>

	 
	 		<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
			@foreach($cinema2 as $show)
			@php

			$select = "select * from cinema_register where cinema_id = $show->user_id";
			$data = mysqli_query($conn,$select);

			@endphp
				<div role="tabpanel" class="tab-pane fade in active edit_cinema_show_time" id="home" aria-labelledby="home-tab" style="margin-top: 30px;">		

					@while($row=mysqli_fetch_assoc($data))
	                 <p class="m-s-t">{{$row['th_name']}}</p>

	                 @php

	                 $user_id = $row['cinema_id'];
	                 $select_show = "select * from movie_show where m_id=$id and user_id=$user_id and date=$today2 order by show_time asc";
	                 $data_show = mysqli_query($conn,$select_show);

	                 @endphp
		                 @while($row_s = mysqli_fetch_assoc($data_show))
						 <a href="{{$row['th_name']}}_{{$row['location']}}_screen_{{$row_s['screen']}}/{{$row_s['show_id']}}" class="show-time">{{$row_s['show_time']}}</a>
						 @endwhile
						 <div class="clearfix"></div>
					@endwhile
				</div>
			@endforeach
			</div>	

			<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
			@foreach($cinema3 as $show)
			@php

			$select = "select * from cinema_register where cinema_id = $show->user_id";
			$data = mysqli_query($conn,$select);

			@endphp
				<div role="tabpanel" class="tab-pane fade in active edit_cinema_show_time" id="home" aria-labelledby="home-tab" style="margin-top: 30px;">		

					@while($row=mysqli_fetch_assoc($data))
	                 <p class="m-s-t">{{$row['th_name']}}</p>

	                 @php

	                 $user_id = $row['cinema_id'];
	                 $select_show = "select * from movie_show where m_id=$id and user_id=$user_id and date=$today3 order by show_time asc";
	                 $data_show = mysqli_query($conn,$select_show);

	                 @endphp
		                 @while($row_s = mysqli_fetch_assoc($data_show))
						 <a href="{{$row['th_name']}}_{{$row['location']}}_screen_{{$row_s['screen']}}/{{$row_s['show_id']}}" class="show-time">{{$row_s['show_time']}}</a>
						 @endwhile
						 <div class="clearfix"></div>
					@endwhile
				</div>
			@endforeach
			</div>	

			<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">
			@foreach($cinema4 as $show)
			@php

			$select = "select * from cinema_register where cinema_id = $show->user_id";
			$data = mysqli_query($conn,$select);

			@endphp
				<div role="tabpanel" class="tab-pane fade in active edit_cinema_show_time" id="home" aria-labelledby="home-tab" style="margin-top: 30px;">		

					@while($row=mysqli_fetch_assoc($data))
	                 <p class="m-s-t">{{$row['th_name']}}</p>

	                 @php

	                 $user_id = $row['cinema_id'];
	                 $select_show = "select * from movie_show where m_id=$id and user_id=$user_id and date=$today4 order by show_time asc";
	                 $data_show = mysqli_query($conn,$select_show);

	                 @endphp
		                 @while($row_s = mysqli_fetch_assoc($data_show))
						 <a href="{{$row['th_name']}}_{{$row['location']}}_screen_{{$row_s['screen']}}/{{$row_s['show_id']}}" class="show-time">{{$row_s['show_time']}}</a>
						 @endwhile
						 <div class="clearfix"></div>
					@endwhile
				</div>
			@endforeach
			</div>	

			<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-4">
			@foreach($cinema5 as $show)
			@php

			$select = "select * from cinema_register where cinema_id = $show->user_id";
			$data = mysqli_query($conn,$select);

			@endphp
				<div role="tabpanel" class="tab-pane fade in active edit_cinema_show_time" id="home" aria-labelledby="home-tab" style="margin-top: 30px;">		

					@while($row=mysqli_fetch_assoc($data))
	                 <p class="m-s-t">{{$row['th_name']}}</p>

	                 @php

	                 $user_id = $row['cinema_id'];
	                 $select_show = "select * from movie_show where m_id=$id and user_id=$user_id and date=$today5 order by show_time asc";
	                 $data_show = mysqli_query($conn,$select_show);

	                 @endphp
		                 @while($row_s = mysqli_fetch_assoc($data_show))
						 <a href="{{$row['th_name']}}_{{$row['location']}}_screen_{{$row_s['screen']}}/{{$row_s['show_id']}}" class="show-time">{{$row_s['show_time']}}</a>
						 @endwhile
						 <div class="clearfix"></div>
					@endwhile
				</div>
			@endforeach
			</div>	

			<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-5">
			@foreach($cinema6 as $show)
			@php

			$select = "select * from cinema_register where cinema_id = $show->user_id";
			$data = mysqli_query($conn,$select);

			@endphp
				<div role="tabpanel" class="tab-pane fade in active edit_cinema_show_time" id="home" aria-labelledby="home-tab" style="margin-top: 30px;">		

					@while($row=mysqli_fetch_assoc($data))
	                 <p class="m-s-t">{{$row['th_name']}}</p>

	                 @php

	                 $user_id = $row['cinema_id'];
	                 $select_show = "select * from movie_show where m_id=$id and user_id=$user_id and date=$today6 order by show_time asc";
	                 $data_show = mysqli_query($conn,$select_show);

	                 @endphp
		                 @while($row_s = mysqli_fetch_assoc($data_show))
						 <a href="{{$row['th_name']}}_{{$row['location']}}_screen_{{$row_s['screen']}}/{{$row_s['show_id']}}" class="show-time">{{$row_s['show_time']}}</a>
						 @endwhile
						 <div class="clearfix"></div>
					@endwhile
				</div>
			@endforeach
			</div>	
						 	        					 
								</div>	
							</div>
					</div>
				</div>	
			</div>
		</div>
		<div class="clearfix"></div>
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

</html>