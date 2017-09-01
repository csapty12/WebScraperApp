<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- custom css stylesheet -->
    <link rel="stylesheet" type="text/css" href="./style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    
  </head>
  <body>
  	<div class="container-fluid">
		<div class="col-md-6 box">
			<h1 class="text-center head">How's My Week Lookin'?</h1>
			<p class ="lead text-center sub-head">Enter Your City </p>
			<form class="form-group">
				<input type="text" name="city" class="form-control" id="city" placeholder="E.g. London, Stockholm">
			</form>
			<button class="btn btn-lg btn-success" id="search">Get Forecast!</button>
			<div class="alert alert-success" id="success"></div>
			<div class="alert alert-danger" id="fail">Could not find the weather data, please enter a valid city</div>
			<div class="alert alert-warning" id="warn">Please enter a city e.g. London, Stockholm...</div>

		</div>
		

  	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="./weather.js"></script>
  </body>
</html>
<!-- by Carl Saptarshi -->