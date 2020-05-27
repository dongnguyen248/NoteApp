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
}