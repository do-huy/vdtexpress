<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('style/style.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title>ADMIN VDT</title>
</head>
<body id="adminindex">
	<div class="row">
		<div class="col-md-4">
			<p><img id="adminimg" src="{{asset('images/vdtgroup.png')}}" alt=""></p>
		</div>
		<div class="col-md-8">
			<br />
	<div class="container box">
		<h3 align="center">Simple Login System in Laravel</h3><br />
		
		@if(isset(Auth::user()->email))
			<div class="alert alert-danger success-block"> 
				<strong> Welcome {{ Auth::user()->email }} </strong>
				<br />
				<a href="{{ url('/Admincp/logout') }}">logout</a>
			</div>
		{{-- else
				<script>window.location = "/Admincp";</script> --}}
		@endif

	<br />
	</div>
		</div>
	</div>
</body>
</html>