@extends('layouts.app')

@section('content')
    <h5 class="text-uppercase text-muted my-4">Add A new Comic</h5>
    <form action="{{ route('comics.store') }} method="POST">
        @csrf

        <div class="mb-3">
            <label for="tiltle" class="form-label">Title:</label>
            <input type="text" name="title" class="form-control" placeholder="Insert comic name here"
                aria-describe="titleHelper">
            <small id="titleHelper" class="text-muted">Type the name of comic max 50 characters</small>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Image:</label>
            <input type="text" name="thumb" class="form-control" placeholder="Insert comic image here"
                aria-describe="thumbHelper">
        </div>

        <div class="mb-3 form-floating">
            <textarea class="form-control" placeholder="Leave a description here" id="description" name="description"
                style="height: 100px"></textarea>
            <label for="description">Description:</label>
        </div>

        <button type="submit" class="btn btn-dark w-100 my-4">Save</button>

    </form>
@endsection
