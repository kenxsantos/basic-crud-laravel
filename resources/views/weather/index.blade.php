@extends('students.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="weather-form">
                    <h2 class="mb-4">Weather Forecast</h2>
                    <form action="{{route('weather.show')}}" method="POST">
                        @csrf   
                        @method('GET')
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
            @include('weather.show')
        @endif
    </div>
@endsection
