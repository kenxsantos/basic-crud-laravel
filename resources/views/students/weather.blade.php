@extends('students.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="weather-form">
                    <h2 class="mb-4">Weather Forecast</h2>
                    <form action="/weather" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="city">Enter City:</label>
                            <input type="text" id="city" name="city" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Get Weather</button>
                    </form>
                </div>
            </div>
        </div>
        @if (isset($weather))
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
        @endif
    </div>
@endsection
