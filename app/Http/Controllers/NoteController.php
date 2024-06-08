<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\User;
use Illuminate\Http\Request;

class NoteController extends Controller
{

    public function index()
    {
        $notes = Note::all();
        return view('notes.index', ['notes' => $notes]);
    }

    public function create()
    {
        $users = User::all();
        return view('notes.create', ['users' => $users]);
    }

    public function store(Request $req)
    {

        $req->validate([
            "name" => "required",
            "desc" => "required",
            "select" => "required",
        ]);

        Note::create([
            "note_name" => $req->name,
            "desc" => $req->desc,
            "user_id" => $req->select,
        ]);
        return to_route('note.index');
    }


    public function show(Note $note)
    {
        // $note = Note::findOrFail($note_id);
        return view('notes.show', ['note' => $note]);
    }




    public function edit(Note $note)
    {
        $users = User::all();
        return view('notes.edit', ['users' => $users, 'data' => $note]);
    }
    public function update($note, Request $req)
    {
        $req->validate([
            "name" => "required",
            "desc" => "required",
            "select" => "required",
        ]);

        Note::where('id', $note)->update([
            'note_name' => $req->name,
            'desc' => $req->desc,
            'user_id' => $req->select,
        ]);

        return to_route('note.index');
    }



    public function delete($note)
    {
        Note::find($note)->delete();
        return to_route('note.index');
    }
}
