@extends('layouts.app')

@section('content')
    <div class="container">

        @include('partials.validation_error')
        <h5 class="text-uppercase text-muted py-4">Add A new Comic</h5>
        <form action="{{ route('admin.comics.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="tiltle" class="form-label">Title:</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                    placeholder="Insert comic name here" aria-describe="titleHelper" required value="{{ old('title') }}">
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
                    placeholder="Insert comic image here" aria-describe="thumbHelper" value="{{ old('thumb') }}">
                <small id="thumbHelper" class="text-muted">Type the name of comic max 255 characters</small>
                @error('thumb')
                    <div class="alert alert-danger" role="alert">
                        <strong>Image, Error: </strong>{{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea class="form-control  @error('description') is-invalid @enderror" name="description" id="description"
                    rows="3" placeholder="Write new description comics here">{{ old('description') }}</textarea>
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
