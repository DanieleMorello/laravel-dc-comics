@extends('layouts.app')
@section('content')
    @include('partials.validation_error')
    <h5 class="text-uppercase text-muted text-center p-4">Edit {{ $comic->title }}</h5>
    <form action="{{ route('admin.comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="container">
            <div class="mb-3">
                <label for="tiltle" class="form-label @error('title') is-invalid @enderror">Title:</label>
                <input type="text" name="title" class="form-control" placeholder="Insert comic name here"
                    aria-describe="titleHelper" value="{{ old('title', $comic->title) }}" required>
                <small id="titleHelper" class="text-muted">Type the name of comic max 50 characters</small>
                @error('title')
                    <div class="alert alert-danger" role="alert">
                        <strong>Title, Error: </strong>{{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Image:</label>
                <input type="text" name="thumb" class="form-control @error('thumb') is-invalid @enderror"
                    placeholder="Insert comic image here" aria-describe="thumbHelper"
                    value="{{ old('thumb', $comic->thumb) }}">
                <small id="thumbHelper" class="text-muted">Type the image of the comic max 255 characters</small>
                @error('thumb')
                    <div class="alert alert-danger" role="alert">
                        <strong>Image, Error: </strong>{{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                    rows="3">{{ old('description', $comic->description) }}</textarea>
                @error('description')
                    <div class="alert alert-danger" role="alert">
                        <strong>Description, Error: </strong>{{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-dark w-100 my-4">Save</button>

    </form>
    </div>
@endsection
