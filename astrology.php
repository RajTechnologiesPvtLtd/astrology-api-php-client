<?php
/**
 * A php file to test the Astrology Client class
 * Author: Jitendra Ravia
 * Date: 08/08/21
 * Time: 8:00 PM
 */

require_once 'src/AstroClient.php';

$userId = "786";
$apiKey = "000-000-009-786";

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
$AstroData->setLanguage('EN');

// call horoscope functions of Astro Client

//*****************Basic Astro****************//
$responseData = $AstroData->getBirthDetails($data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['second'], $data['latitude'], $data['longitude'], $data['timezone']);

$responseData1 = $AstroData->getAstroDetails($data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['second'], $data['latitude'], $data['longitude'], $data['timezone']);

$responseData2 = $AstroData->getPlanetsDetails($data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['second'], $data['latitude'], $data['longitude'], $data['timezone']);

$responseData3 = $AstroData->getPlanetsExtendedDetails($data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['second'], $data['latitude'], $data['longitude'], $data['timezone']);

$responseData4 = $AstroData->getPlanetsTropicalDetails($data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['second'], $data['latitude'], $data['longitude'], $data['timezone']);

$responseData98 = $AstroData->getAyanamsha($data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['second'], $data['latitude'], $data['longitude'], $data['timezone']);

$responseData99 = $AstroData->getHouseCuspTropical($data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['second'], $data['latitude'], $data['longitude'], $data['timezone']);

//***************** Panchange ****************//
$responseData91 = $AstroData->getBasicPanchang($data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['second'], $data['latitude'], $data['longitude'], $data['timezone']);

$responseData92 = $AstroData->getPlanetPanchang($data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['second'], $data['latitude'], $data['longitude'], $data['timezone']);

$responseData93 = $AstroData->getAdvancedPanchang($data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['second'], $data['latitude'], $data['longitude'], $data['timezone']);

//***************** Muhurat ****************//	

$responseData94 = $AstroData->getChaughadiyaMuhurta($data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['second'], $data['latitude'], $data['longitude'], $data['timezone']);

$responseData95 = $AstroData->getHoraMuhurta($data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['second'], $data['latitude'], $data['longitude'], $data['timezone']);

echo  $responseData2 . PHP_EOL;

echo "\n";
