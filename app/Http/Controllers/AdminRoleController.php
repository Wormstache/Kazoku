<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;

class AdminRoleController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return view('admin.notes.index', compact('notes'));
    }
}
