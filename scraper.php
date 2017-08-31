<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	$city = $_GET["city"];
	//remove all spaces  
	$city= str_replace(" ","",$city);
	//get the website
	$contents=file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");

	
	//find the actual text with the city weather information with a 3 day summary
	preg_match('/3 Day Weather Forecast Summary:<\/b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">(.*?)<\/span>/s', $contents, $matches);

	echo $matches[1];



?>


