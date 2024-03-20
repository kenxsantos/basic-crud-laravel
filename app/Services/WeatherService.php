<?php

namespace App\Services;
use GuzzleHttp\Client;

class WeatherService{
    protected $client;
    protected $apiKey;
    protected $baseUrl;

    public function __construct()
    {
        $this->client = new Client;
        $this->apiKey = env('OPENWEATHERMSP_API_KEY');
    }

    public function getCurrentWeather($city)
    {
        $reponse = $this->client->get("{$this->baseUrl}/weather?q={$city}&appid={$this->apiKey}");
        return json_decode($response->getBody()->getContent(0), true);
    }
}