@extends('layout')
@section('title', 'Neon')

@section('body')

<body class="bg-black text-white">
    <div>
        @livewire('neon')
    </div>

    @livewireAssets
</body>

@endsection
