@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Admin Comics</h1>
            <a href="{{ route('comics.create') }}" class="btn btn-dark d-block">
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
                            <td scope="row">{{ $comics->id }}</td>
                            <td><img height="100" src="{{ $comic->tumb }}" alt="{{ $comic->title }}"></td>
                            <td>{{ $comic->title }}</td>
                            <td>{{ $comic->description }}</td>
                            <td>
                                <a href="{{ route('comics.show', $comic->id) }}" title="View"
                                    class="text-decoration-none">
                                    <i class="fas fa-eye fa-sm fa-fw"></i>
                                </a>
                                <a href="" title="Edit" class="text-decoration-none">
                                    <i class="fas fa-pencil fa-sm fa-fw"></i>
                                </a>
                                <a href="" title="Delete" class="text-decoration-none">
                                    <i class="fas fa-trash fa-sm fa-fw"></i>
                                </a>
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
