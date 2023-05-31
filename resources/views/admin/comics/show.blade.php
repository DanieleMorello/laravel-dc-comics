@extends('layouts.app')

@section('page_title', 'Show')

@section('content')
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="py-3">{{ $comic->title }}</h1>
            <a name="" id="" class="btn btn-primary ml-auto" href="{{ route('admin.comics.index') }}"
                role="button">
                Return Back</a>
        </div>
        <div class="col-6 m-auto">
            <div class="card">
                <img class="card-img-top" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                <div class="card-body">
                    <h4 class="card-title">{{ $comic->title }}</h4>
                    <p class="card-text">{{ $comic->description }}</p>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="container py-5">
        <h1 class="py-3">{{ $comic->title }}</h1>
        <div class="d-flex justify-content-end">

            <a name="" id="" class="btn btn-outline-primary ms-auto" href="{{ route('admin.comics.index') }}"
                role="button">
                <i class="fas fa-arrow-left fa-xs"></i> Back
            </a>
        </div>

        <div class="row justify-content-center">
            <div class="col-3">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="img-fluid">
            </div>
            <div class="col-6">
                <div>Title:{{ $comic->title }}</div>
                <div>Description:{{ $comic->description }}</div>
            </div>
        </div>
    </div> --}}

@endsection
