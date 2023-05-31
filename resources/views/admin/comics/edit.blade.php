@extends('layouts.app')
@section('content')
    <h5 class="text-uppercase text-muted text-center p-4">Edit Comic</h5>
    <form action="{{ route('admin.comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="container">
            <div class="mb-3">
                <label for="tiltle" class="form-label">Title:</label>
                <input type="text" name="title" class="form-control" placeholder="Insert comic name here"
                    aria-describe="titleHelper" value="{{ $comic->title }}">
                <small id="titleHelper" class="text-muted">Type the name of comic max 50 characters</small>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Image:</label>
                <input type="text" name="thumb" class="form-control" placeholder="Insert comic image here"
                    aria-describe="thumbHelper" value="{{ $comic->thumb }}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3">{{ $comic->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-dark w-100 my-4">Save</button>

    </form>
    </div>
@endsection
