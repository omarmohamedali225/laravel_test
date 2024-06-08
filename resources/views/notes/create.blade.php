@extends('layouts.app')

@section('title')
    Create Note
@endsection

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger w-50 m-auto">
            <ul>
                @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('note.store') }}">
        @csrf
        <fieldset class="w-50 m-auto">
            <legend>Create Note Now</legend>
            @error('name')
                {{$errors->name}}
            @enderror
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Note Name</label>
                <input type="text" name="name" id="disabledTextInput" class="form-control" value="{{ old('name') }}"
                    placeholder="Disabled input">
            </div>
            <div class="mb-3">
                <label for="floatingTextarea" class="form-label">Description</label>
                <textarea class="form-control"name="desc" placeholder="Desc Write...." id="floatingTextarea">{{ old('desc') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="Select" class="form-label">Owner</label>
                <select id="Select" class="form-select" name="select">
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </fieldset>
    </form>
@endsection
