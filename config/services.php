<?php

return [

    // other services


    'openweather' => [

        'key' => env('WEATHER_API_KEY'),

        'city' => env('WEATHER_CITY', 'Manila'),

    ],

];