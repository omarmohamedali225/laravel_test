<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [NoteController::class, 'index'])->name('note.index');
Route::get('/create', [NoteController::class, 'create'])->name('note.create');

Route::get('/{note}', [NoteController::class, 'show'])->name('note.show');

Route::post('/create', [NoteController::class, "store"])->name("note.store");

Route::get('/{note}/edit', [NoteController::class, 'edit'])->name('note.edit');

Route::put('/{note}/edit', [NoteController::class, 'update'])->name('note.update');

Route::delete('/{note}/delete', [NoteController::class, 'delete'])->name("note.delete");
