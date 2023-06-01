@extends('layouts.app')

@section('page_title', 'Show')

@section('content')
    <div class="container d-flex p-3">
        <img class="img-fluid" src="{{ $comic->thumb }}" alt="">
        <div class="ps-5">
            <h1>{{ $comic->title }}</h1>
            <p>{{ $comic->description }}</p>
        </div>

    </div>

@endsection
