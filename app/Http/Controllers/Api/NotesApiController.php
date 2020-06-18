<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Note;

class NotesApiController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return response()->json($notes);
    }
    public function store(Request $request)
    {
        $note = new Note();
        $note->title = $request->get('title');
        $note->body = $request->get('body');
        $note->user_id = $request->get('user_id');
        $note->save();
        return response()->json($note);
    }
}