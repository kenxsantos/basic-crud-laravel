<div class="row justify-content-center mt-4">
    <div class="col-md-6">
        <div class="weather-info">
            <h2>Weather Forecast for {{ $city }}</h2>
            <p>Temperature: {{ $weather['main']['temp'] }} &deg;C</p>
            <p>Weather: {{ $weather['weather'][0]['main'] }}</p>
            <p>Description: {{ $weather['weather'][0]['description'] }}</p>
            <p>Humidity: {{ $weather['main']['humidity'] }}%</p>
            <p>Wind Speed: {{ $weather['wind']['speed'] }} m/s</p>
        </div>
    </div>
</div>