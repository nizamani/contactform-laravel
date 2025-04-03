<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class WeatherService
{
    protected $apiKey;
    
    public function __construct()
    {
        $this->apiKey = config('services.weather.api_key');
    }

    public function getWeather($city)
    {
        // $response = Http::get("https://api.openweathermap.org/data/2.5/weather", [
        //     'q' => $city,
        //     'appid' => $this->apiKey,
        //     'units' => 'metric',
        // ]);

        // return $response->json();
        return response()->json([
            'city' => $city,
            'temperature' => 28.5,
            'description' => 'Sunny',
            'humidity' => 60,
            'wind_speed' => 5.2,
            'forecast' => [
                ['day' => 'Monday', 'temperature' => 30, 'description' => 'Partly Cloudy'],
                ['day' => 'Tuesday', 'temperature' => 29, 'description' => 'Sunny'],
                ['day' => 'Wednesday', 'temperature' => 27, 'description' => 'Rainy'],
            ]
        ]);
    }
}
