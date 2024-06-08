@extends('layouts.app')


@section('title')
    Index Note
@endsection

@section('content')
    {{-- tabel --}}
    <div class="mt-3 mb-3 text-center">
        <a href="{{ route('note.create') }}" class="btn btn-success">Create Note</a>
    </div>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Note</th>
                <th scope="col">Created_by</th>
                <th scope="col">Created_at</th>
                <th scope="col">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($notes as $note)
            {{-- @dump($note) --}}
                <tr>
                    <th scope="row">{{ $note->id }}</th>
                    <td>{{ $note->note_name }}</td>
                    <td>{{ $note->user->name }}</td>
                    <td>{{ $note->created_at->toFormattedDateString() }}</td>
                    <td>
                        <a href="{{ route('note.edit', $note->id) }}" class="btn btn-outline-primary text-white">Edit</a>
                        <a href="{{ route('note.show', $note->id) }}" class="btn btn-outline-light">View</a>
                        <form action="{{ route('note.delete', $note->id) }}" class="d-inline" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-danger text-white">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- tabel --}}
@endsection
