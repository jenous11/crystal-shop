<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class MoodWidgetService
{
  /**
   * Create a new class instance.
   */
  protected $apiKey;
  public function __construct()
  {
    $this->apiKey = config('services.weather.openweather_api_key');
  }

  public function getWeatherData()
  {
    $weatherResponse = Http::get('http://api.openweathermap.org/data/2.5/weather', ['q' => 'Kathmandu', 'appid' => $this->apiKey, 'units' => 'metric']);
    $data = $weatherResponse->json();
    $dataWeatherArray = $data['weather'];
    $dataWeather=$dataWeatherArray[0]['main'];
    $datatemp = $data['main']['temp'];
    return ['condition'=>$dataWeather,'temp'=>$datatemp];
  }
}
