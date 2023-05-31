@extends('layouts.app')

@section('content')
    <div class="container">

        @if (session('message'))
            <div class="alert alert-primary" role="alert">
                <strong>{{ session('message') }}</strong>
            </div>
        @endif

        <div class="d-flex justify-content-between align-items-center">
            <h1>Admin Comics</h1>
            <a href="{{ route('admin.comics.create') }}" class="btn btn-dark d-block">
                <i class="fas fa-plus-circle fa-sm fa-fw"></i>
                New Comic
            </a>
        </div>
        <div class="table-responsive">
            <table class="table table-light">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($comics as $comic)
                        <tr class="table-primary">
                            <td scope="row">{{ $comic->id }}</td>
                            <td><img height="100" src="{{ $comic->thumb }}" alt="{{ $comic->title }}"></td>
                            <td>{{ $comic->title }}</td>
                            <td>{{ $comic->description }}</td>
                            <td>
                                <a href="{{ route('admin.comics.show', $comic->id) }}" title="View"
                                    class="text-decoration-none">
                                    <i class="fas fa-eye fa-sm fa-fw"></i>
                                </a>
                                <a href="{{ route('admin.comics.edit', $comic->id) }}" title="Edit"
                                    class="text-decoration-none">
                                    <i class="fas fa-pencil fa-sm fa-fw"></i>
                                </a>
                                <!-- Modal trigger button -->
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#modal-{{ $comic->id }}">
                                    Delete
                                </button>

                                <!-- Modal Body -->
                                <div class="modal fade" id="modal-{{ $comic->id }}" tabindex="-1"
                                    data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                    aria-labelledby="modal-{{ $comic->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modal-{{ $comic->id }}">Delete
                                                    {{ $comic->title }} </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure?
                                            </div>
                                            <div class="modal-footer">

                                                <form action="{{ route('admin.comics.destroy', $comic->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">yes</button>
                                                </form>

                                                <button type="button" class="btn btn-secondary "
                                                    data-bs-dismiss="modal">No</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <td scope="row">No records</td>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
@endsection
