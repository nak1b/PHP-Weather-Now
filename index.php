<!DOCTYPE html>
<html>
<head>
	<title>Weather Now</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 center">
				<h1 class="heading">Weather Now</h1>
				<p class="lead heading">Enter your city below to get a forecast</p>

				<div class="form">
					<div class="form-group">
						 <input type="text" class="form-control" name="city" id="city" placeholder="Eg: Toronto, New York, Paris...">
					</div>

					<button class="btn btn-success btn-lg" id="findWeather">Get My Weather</button>

				</div>

				<div class="alert alert-success" id="success"></div>
				<div class="alert alert-danger" id="noCity">Please enter a city</div>
				<div class="alert alert-danger" id="fail">Could not find weather data for that city</div>
			</div>
		</div>
	</div>
</body>
</html>