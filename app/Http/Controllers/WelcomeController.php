<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Information;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        $informations = Information::all();
        $documents = Document::all();
        return view('welcome', compact('informations','documents'));
    }
}
