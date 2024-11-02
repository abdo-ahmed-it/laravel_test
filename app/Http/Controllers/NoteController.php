<?php

namespace App\Http\Controllers;

use App\Models\Note;

class NoteController extends Controller
{
    public function csrfToken()
    {
        return csrf_token();
    }

    public function index()
    {
        $notes = Note::all();
        return response()->json($notes);
    }

    public function show($id)
    {
        $note = Note::find($id);
        return response()->json($note);
    }

    public function update($id)
    {
        $note = Note::find($id);
        $note->update(request()->all());

        return response()->json($note);
    }

    public function destroy($id)
    {
        note::destroy($id);
        return response()->json(['status' => '200', 'message' => 'Note deleted successfully']);
    }

    public function store()
    {
        $note = Note::create(request()->all());
        return response()->json($note);
    }
}
