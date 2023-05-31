@extends('layouts.app')

@section('content')
    <div class="container">
        <img class="img-fluid" src="{{ $comic->thumb }}" alt="">
        <h1>{{ $comic->title }}</h1>
        <p>
            {{ $comic->description }}

        </p>
    </div>
@endsection
