@extends('layouts.app')

@section('title')
    Create Note
@endsection

@section('content')
    {{-- <div class="alert alert-danger w-50 m-auto">
        @error
        12
        @enderror
    </div> --}}
    <form method="POST" action="{{ route('note.update', $data->id) }}">
        @csrf
        @method("PUT")
        <fieldset class="w-50 m-auto">
            <legend>Update Note Now</legend>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Note Name</label>
                <input type="text" name="name" id="disabledTextInput" value="{{ $data->note_name }}" class="form-control"
                    placeholder="Disabled input">
            </div>
            <div class="mb-3">
                <label for="floatingTextarea" class="form-label">Description</label>
                <textarea class="form-control"name="desc" placeholder="Desc Write...." id="floatingTextarea">{{ $data->desc }}</textarea>
            </div>
            <div class="mb-3">
                <label for="Select" class="form-label">Owner</label>
                <select id="Select" class="form-select" name="select">
                    @foreach ($users as $user)
                        <option @selected($data->user_id == $user->id) value="{{ $user->id }}">
                            {{ $user->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </fieldset>
    </form>
@endsection
