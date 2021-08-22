<?php
/**
 * Created by Jitendra Ravia
 * User: Bhargav
 * Date: 08/08/21
 * Time: 07:05 PM
 * guide by https://rapidapi.com/blog/how-to-use-an-api-with-php/
 */


function getCurlReponse($userId, $apiKey, $resource, array $data, $language)
{
	$apiEndPoint = "https://brahmsamaj.org/astrology/v2";

	$serviceUrl = $apiEndPoint.'/'.$resource;
	$authData = $userId.":".$apiKey;

	// Initializes a new cURL session
	$curl = curl_init($serviceUrl);

	// Set the CURLOPT_RETURNTRANSFER option to true
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

	curl_setopt($curl, CURLOPT_TIMEOUT, 20);
	curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 5);

	// Set the CURLOPT_POST option to true for POST request
	curl_setopt($curl, CURLOPT_POST, true);

	// Set the request data as JSON using json_encode function
	curl_setopt($curl, CURLOPT_POSTFIELDS,  $data);

	// Set custom headers for Auth and Content-Type header
	// curl_setopt($curl, CURLOPT_HTTPHEADER, [
	  // 'X-AstroAPI-Host: brahmsamajj.org',
	  // 'X-AstroAPI-Key: 7xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
	  // 'Content-Type: application/json'
	// ]);

	// Execute cURL request with all previous settings
	$response = curl_exec($curl);

	// Close cURL session
	curl_close($curl);

	return $response;
}
