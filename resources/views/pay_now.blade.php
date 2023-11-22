<!DOCTYPE html>
<html>

<head>
	<title>Sign Up</title>
	<link rel="icon" href="images/favicon.png">
	<link rel="stylesheet" href="bootstrap/bootstrap.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/compact_util.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
		crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/material-icon-outlined.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Two+Tone" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="theme-color" content="#7952b3">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class=" text-dark raleway-medium-font" id="wrapper">
	<div class="container bg-grey m-w-400 p-t-10 p-b-30 p-l-30 b-r-8 m-t-30">
		<div class="middle">
			<img src="images/favicon.png" class="m-w-80 b-r-100 bg">
			<h3 class="gilmer-font p-b-10">Pay Now</h3>
		</div>
		<div class="row input-group">
			@foreach($arr as $detail)
				<div class="mb-3 ">					
					<span type="text" class="form-control image_size_control" readonly required value="{{$detail->name}}"><img src="{{asset('site_images/'.$detail->movie_image)}}"> </span>
				</div>
				<div class="mb-3 ">					
					<label style="margin-right: 7px; margin-top: 5px;">Movie Name : </label>
					<span type="text" class="form-control" readonly required value="{{$detail->name}}">{{$detail->name}}</span>
				</div>
				<div class="input-group p-b-10">					
					<label style="margin-right: 7px; margin-top: 5px;">Total Seat : </label>
					<span type="text" class="form-control" readonly required value="{{$detail->total_seats}}">{{$detail->total_seats}}</span>
				</div>
				<div class="input-group p-b-10">					
					<label style="margin-right: 7px; margin-top: 5px;">Seat Numbers : </label>
					<span type="text" class="form-control" readonly required value="{{$detail->all_seat_no}}">{{$detail->all_seat_no}}</span>
				</div>
				<div class="input-group p-b-10">
					<label style="margin-right: 7px; margin-top: 5px;">Total Payment : </label>
					<span type="text" class="form-control" readonly required value="{{$detail->total_pay}}">{{$detail->total_pay}}</span>
				</div>
				<div class="input-group p-b-10">
					<label style="margin-right: 7px; margin-top: 5px;">Show Time : </label>
					<span type="text" class="form-control" readonly required value="{{$detail->show_time}}">{{$detail->date}}, {{$detail->show_time}}</span>
				</div>
			<form method="post">
			@csrf
				<div class="mb-3 p-b-10 mt-3">
					<label>Select Payment Status : </label>
					<select class="form-control" name="payment_method">
						<option>UPI</option>
						<option>Credit Card / Debit Card</option>
						<option>Wallet : PhonePay / GooglePay / Etc..</option>
					</select>
				</div>

				<input type="hidden" name="booked_id" value="{{$detail->booked_id}}">
			
				<div class="mb-3 form-check">
					<input type="checkbox" class="form-check-input" id="exampleCheck1" required>
					<label class="form-check-label" for="exampleCheck1">
						Accept our Terms & Conditions
					</label>
				</div>
				<input type="submit" class="btn btn-primary w-100" name="book_now" value="Process to Book">
			</form>
			@endforeach
			<div class="p-t-10">Cancel the process? <a href="/">Back to home</a></div>
		</div>
	</div>
	<footer class="footer">
		<!-- Copyrights -->
		<div class=" py-4 m-t-20">
			<div class="container text-center">
				<p class="text-muted mb-0 py-2"> MoviesYet © 2023 All rights reserved. <br>(This project made by PRATIK GINOYA for learning purpose...)</p>
			</div>
		</div>
	</footer>
</body>
<script src="js/visible_icon.js"></script>
</html>