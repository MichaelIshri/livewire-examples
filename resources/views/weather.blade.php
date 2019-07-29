@extends('layout')
@section('title', 'Weather')

@section('styles')
    <link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">
@endsection

@section('body')

<body class="bg-blue-300 text-blue-200 bg-fixed" style="background-image: url({{ url('/img/weather-bg-low.jpg') }}); background-size: 1500px; background-position: center;">
    <div>
        @livewire('weather')
    </div>

    @livewireAssets
</body>

@endsection
