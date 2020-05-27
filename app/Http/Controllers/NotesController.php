<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function index()
    {
        return view('notes.index');
    }
    public function create()
    {
        return view('notes.create');
    }
}