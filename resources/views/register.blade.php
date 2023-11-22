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
			<h3 class="gilmer-font p-b-10">Register to MoviesYet</h3>
		</div>
		@if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif

        <!-- validation message -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
		<div class="row input-group">
			<form method="post">
				@csrf
				<div class="mb-3 p-b-10">
					<input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name"
						required maxlength="30">
				</div>
				<div class="mb-3 ">

					<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email"
						aria-describedby="emailHelp" required>
					<div id="emailHelp" class="form-text">We'll never share your email with anyone.</div>
				</div>
				<div class="mb-3 ">

					<input type="text" name="mobile" class="form-control" id="exampleInputEmail1" placeholder="Mobile no"
						aria-describedby="emailHelp" required>
					<div id="emailHelp" class="form-text">We'll never share your mobile no with anyone.</div>
				</div>
				<div class="input-group p-b-10">
					<input type="password" name="password" placeholder="Password (8 to 15 digit)" class="form-control" id="exampleInputPassword1" required>
				</div>
				<div class="input-group p-b-10">
					<input type="password" name="password2" id="password" placeholder="Re-enter Password (8 to 15 digit)" class="form-control" id="exampleInputPassword1" required>
					<button type="button" class="material-icons-round green-color" onclick="password_visibility()"
						id="visible_button">visibility</button>
				</div>
				<div class="mb-3 form-check">
					<input type="checkbox" class="form-check-input" id="exampleCheck1" required>
					<label class="form-check-label" for="exampleCheck1">
						Accept our Terms & Conditions
					</label>
				</div>
				<input type="submit" class="btn btn-primary w-100" name="register" value="Register">
			</form>
			<div class="p-t-10">Already have an account? <a href="/login">Login</a></div>
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