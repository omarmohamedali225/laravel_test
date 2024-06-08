@extends('layouts.app')

@section('title')
    Show Note
@endsection


@section('content')
    <div class="card m-auto bg-dark" style="width: 40rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <h5>NoteId -> {{ $note->id }}</h5>
            </li>
            <li class="list-group-item">
                <h5>NoteName -> {{ $note->note_name }}</h5>
            </li>
            <li class="list-group-item">
                <h5>Description -> {{ $note->desc }}</h5>
            </li>
            <li class="list-group-item">
                <h5>Create_by -> {{ $note->user->name }}</h5>
            </li>
            <li class="list-group-item">
                <h5>Create_at -> {{ $note->created_at }}</h5>
            </li>
        </ul>
    </div>
@endsection
