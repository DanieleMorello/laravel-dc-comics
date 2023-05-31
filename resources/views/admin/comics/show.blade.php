@extends('layouts.app')

@section('page_title', 'Show')

@section('content')

    <div class="container py-5">
        <h1 class="py-3">{{ $comic->title }}</h1>
        <div class="row justify-content-center">
            <div class="col-3">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="img-fluid">
            </div>
            <div class="col-6">
                <div>${{ $comic->title }}</div>
                <div>{{ $comic->thumb }}</div>
                <div>{{ $comic->description }}</div>
            </div>
        </div>
    </div>

@endsection
