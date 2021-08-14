<?php
/**
 * A php file to test the Astrology Client class
 * Author: Jitendra Ravia
 * Date: 08/08/21
 * Time: 8:00 PM
 */

require_once 'src/AstroClient.php';

$userId = "786";
$apiKey = "000-000-000-786";

// make some dummy data in order to call Astro api
$data = array(
	'date' => 17,
	'month' => 5,
	'year' => 1968,
	'hour' => 8,
	'minute' => 15,
	'second' => 0,
	'latitude' => 23.03,
	'longitude' => 72.97,
	'timezone' => 5.5,
	'prediction_timezone' => 5.5 // Optional. Only For Transit Prediction API
);

// instantiate AstroClient class
$AstroData = new AstroClient($userId, $apiKey);
$AstroData->setLanguage('hi');

// call horoscope functions of Astro Client

//*****************Basic Astro****************//

$responseData2 = $AstroData->getPlanetsDetails($data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['second'], $data['latitude'], $data['longitude'], $data['timezone']);

echo  $responseData2 . PHP_EOL;

echo "\n";
