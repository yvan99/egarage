<?php

namespace App\Http\Controllers;
class UtilitiesController extends Controller
 
{
  public $apiKey;
  public function __construct()
  {
    $this->apiKey=env("GOOGLE_GEOCODE_API");
  }
  
  function codeGenerator($prefix)
  {
    return $prefix . rand(100000, 999999);
  }

  function getDistance($addressFrom, $addressTo)
  {
    $distance_data = file_get_contents('https://maps.googleapis.com/maps/api/distancematrix/json?&origins=' . urlencode($addressFrom) . '&destinations=' . urlencode($addressTo) . '&key=' . $this->apiKey);
    $distance_arr = json_decode($distance_data);
    if ($distance_arr->status == 'OK') {
      $destination_addresses = $distance_arr->destination_addresses[0];
      $origin_addresses = $distance_arr->origin_addresses[0];
    } else {
      echo "<p>The request was Invalid</p>";
      exit();
    }
    if ($origin_addresses == "" or $destination_addresses == "") {
      echo "<p>Destination or origin address not found</p>";
      exit();
    }
    // Get the elements as array
    $elements = $distance_arr->rows[0]->elements;
    $distance = $elements[0]->distance->text;
    return $distance;
  }

  public function getTimeInDistance($addressFrom, $addressTo)
  {
    $distance_data = file_get_contents('https://maps.googleapis.com/maps/api/distancematrix/json?&origins=' . urlencode($addressFrom) . '&destinations=' . urlencode($addressTo) . '&key=' . $this->apiKey);
    $distance_arr = json_decode($distance_data);
    $elements = $distance_arr->rows[0]->elements;
    $duration = $elements[0]->duration->text;
    return $duration;
  }
}
