<?php
/**
 * Astrol Client for consuming  Astro Web APIs
 * https://brahmsamaj.org/astrology/
 * Author: Jitendra Ravia
 * Date: 08/08/21
 * Time: 8:00 PM
 */

require 'sdk.php';


class AstroClient
{
    private $userId = null;
    private $apiKey = null;
    private $language = null;

    //TODO: MUST enable this on production- MUST
    //private $apiEndPoint = "https://brahmsamaj.org/astrology/v2";

    //TODO: MUST- comment this and uncomment https url above on production for added security

    /**
     * @param $uid string userId for Astro API
     * @param $key string api key for Astro API access
     */
    public function __construct($uid, $key)
    {
        $this->userId = $uid;
        $this->apiKey = $key;
    }

    /*
    A Function to set the Language of Response.
    Just call this function and you can change the language.
    This function should be passed either 'en' for English or 'hi' for Hindi.
*/
    public function setLanguage( $language )
    {
        $this->language = $language;
    }

    private function packageHoroData($date, $month, $year, $hour, $minute, $second, $latitude, $longitude, $timezone)
    {
        return array(
		'date' => $date,
		'month' => $month,
		'year' => $year,
		'hour' => $hour,
		'minute' => $minute,
		'second' => $second,
		'latitude' => $latitude,
		'longitude' => $longitude,
		'timezone' => $timezone,
		'name' => 'Jitendra'
        );
    }

	//***************** Birth Detail ****************//

    public function getBirthDetails($date, $month, $year, $hour, $minute, $second, $latitude, $longitude, $timezone)
    {
        $resourceName = 'birth_details';
        $data = $this->packageHoroData($date, $month, $year, $hour, $minute, $second, $latitude, $longitude, $timezone);
        $response = getCurlReponse($this->userId, $this->apiKey, $resourceName, $data, $this->language);
        return $response;
    }

    //*****************Basic Astro ****************//

    public function getAstroDetails($date, $month, $year, $hour, $minute, $second, $latitude, $longitude, $timezone)
    {
        
	   $resourceName = 'astro_details';
        $data = $this->packageHoroData($date, $month, $year, $hour, $minute, $second, $latitude, $longitude, $timezone);
        $response = getCurlReponse($this->userId, $this->apiKey, $resourceName, $data, $this->language);
        return $response;
    }
    
	public function getPlanetsDetails($date, $month, $year, $hour, $minute, $second, $latitude, $longitude, $timezone)
    {
		$resourceName = 'planets';
		$data = $this->packageHoroData($date, $month, $year, $hour, $minute, $second, $latitude, $longitude, $timezone);
		$response = getCurlReponse($this->userId, $this->apiKey, $resourceName, $data, $this->language);
		return $response;
    }
	
    public function getPlanetsExtendedDetails($date, $month, $year, $hour, $minute, $second, $latitude, $longitude, $timezone)
    {
        $resourceName = 'planets/extended';
        $data = $this->packageHoroData($date, $month, $year, $hour, $minute, $second, $latitude, $longitude, $timezone);
        $response = getCurlReponse($this->userId, $this->apiKey, $resourceName, $data, $this->language);
        return $response;
    }

    public function getPlanetsTropicalDetails($date, $month, $year, $hour, $minute, $second, $latitude, $longitude, $timezone)
    {
        $resourceName = 'planets/tropical';
        $data = $this->packageHoroData($date, $month, $year, $hour, $minute, $second, $latitude, $longitude, $timezone);
        $response = getCurlReponse($this->userId, $this->apiKey, $resourceName, $data, $this->language);
        return $response;
    }

    public function getHouseCuspTropical($date, $month, $year, $hour, $minute, $second, $latitude, $longitude, $timezone)
    {
        $resourceName = 'house_cusps/tropical';
        $data = $this->packageHoroData($date, $month, $year, $hour, $minute, $second, $latitude, $longitude, $timezone);
        $response = getCurlReponse($this->userId, $this->apiKey, $resourceName, $data, $this->language);
        return $response;
    }
	
	//***************** ayanamsha ****************//
	
    public function getAyanamsha($date, $month, $year, $hour, $minute, $second, $latitude, $longitude, $timezone)
    {
        $resourceName = 'ayanamsha';
        $data = $this->packageHoroData($date, $month, $year, $hour, $minute, $second, $latitude, $longitude, $timezone);
        $response = getCurlReponse($this->userId, $this->apiKey, $resourceName, $data, $this->language);
        return $response;
    }
	
	
    //***************** Panchang ****************//
    public function getBasicPanchang($date, $month, $year, $hour, $minute, $second, $latitude, $longitude, $timezone)
    {
        $resourceName = 'basic_panchang';
        $data = $this->packageHoroData($date, $month, $year, $hour, $minute, $second, $latitude, $longitude, $timezone);
        $response = getCurlReponse($this->userId, $this->apiKey, $resourceName, $data, $this->language);
        return $response;
    }

    public function getPlanetPanchang($date, $month, $year, $hour, $minute, $second, $latitude, $longitude, $timezone)
    {
        $resourceName = 'planet_panchang';
        $data = $this->packageHoroData($date, $month, $year, $hour, $minute, $second, $latitude, $longitude, $timezone);
        $response = getCurlReponse($this->userId, $this->apiKey, $resourceName, $data, $this->language);
        return $response;
    }

    public function getAdvancedPanchang($date, $month, $year, $hour, $minute, $second, $latitude, $longitude, $timezone)
    {
        $resourceName = 'advanced_panchang';
        $data = $this->packageHoroData($date, $month, $year, $hour, $minute, $second, $latitude, $longitude, $timezone);
        $response = getCurlReponse($this->userId, $this->apiKey, $resourceName, $data, $this->language);
        return $response;
    }

	//***************** Muhurat ****************//	

    public function getChaughadiyaMuhurta($date, $month, $year, $hour, $minute, $second, $latitude, $longitude, $timezone)
    {
        $resourceName = 'chaughadiya_muhurta';
        $data = $this->packageHoroData($date, $month, $year, 0, 0, 0, $latitude, $longitude, $timezone);
        $response = getCurlReponse($this->userId, $this->apiKey, $resourceName, $data, $this->language);
        return $response;
    }

    public function getHoraMuhurta($date, $month, $year, $hour, $minute, $second, $latitude, $longitude, $timezone)
    {
        $resourceName = 'hora_muhurta';
        $data = $this->packageHoroData($date, $month, $year, 0, 0,0, $latitude, $longitude, $timezone);
        $response = getCurlReponse($this->userId, $this->apiKey, $resourceName, $data, $this->language);
        return $response;
    }
	
	
}
