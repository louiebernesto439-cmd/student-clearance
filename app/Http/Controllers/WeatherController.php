<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function getWeather()
    {
        $city = config('services.openweather.city', 'Manila');
        $apiKey = config('services.openweather.key');

        // Default fallback data
        $weather = [
            'success' => false,
            'city' => $city,
            'temperature' => null,
            'description' => null,
            'humidity' => null,
            'wind_speed' => null,
            'error' => 'Weather information is currently unavailable.',
        ];

        // Check API key
        if (empty($apiKey)) {
            $weather['error'] = 'Weather API key is not configured.';

            return view('admin.dashboard', compact('weather'));
        }

        try {

            $response = Http::timeout(10)
                ->get('https://api.openweathermap.org/data/2.5/weather', [
                    'q' => $city,
                    'appid' => $apiKey,
                    'units' => 'metric',
                ]);

            // API returned an error
            if ($response->failed()) {

                $weather['error'] =
                    'Unable to retrieve weather information. Please try again later.';

                return view('admin.dashboard', compact('weather'));
            }

            $data = $response->json();

            // Make sure required data exists
            if (
                !isset($data['main']) ||
                !isset($data['weather'][0]) ||
                !isset($data['wind'])
            ) {

                $weather['error'] =
                    'Weather data is incomplete or unavailable.';

                return view('admin.dashboard', compact('weather'));
            }

            // Map OpenWeatherMap JSON to our application
            $weather = [
                'success' => true,

                'city' => $data['name'] ?? $city,

                'temperature' => $data['main']['temp'] ?? null,

                'description' =>
                    $data['weather'][0]['description'] ?? 'Unknown',

                'humidity' =>
                    $data['main']['humidity'] ?? null,

                'wind_speed' =>
                    $data['wind']['speed'] ?? null,

                'error' => null,
            ];

        } catch (\Illuminate\Http\Client\ConnectionException $e) {

            $weather['error'] =
                'Unable to connect to the weather service.';

        } catch (\Throwable $e) {

            $weather['error'] =
                'An unexpected error occurred while retrieving weather information.';
        }

        return view('admin.dashboard', compact('weather'));
    }
}