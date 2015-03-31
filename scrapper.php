<?php

//getting entered city
if(isset($_GET['city'])){
	$city = htmlspecialchars(trim($_GET['city']));

	//removing any space between city
	$city = str_replace(" ", "", $city);
}


//getting conntent of weather-forecast website with provided city
$content = file_get_contents("http://www.weather-forecast.com/locations/" .$city ."/forecasts/latest");

//sing regex to scrap 3 days weather prediction
preg_match("/3 Day Weather Forecast Summary:<\/b>(.*?)<\/span>/s", $content, $match);
print_r($match[1]);

?>