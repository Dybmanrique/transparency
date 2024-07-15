<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Information;
use App\Models\Numeral;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        $informations = Information::all();
        $documents = Document::all();
        return view('welcome', compact('informations','documents'));
    }
    public function numerals() {
        $numerals = Numeral::where('is_active',true)->get();
        return view('numerals',compact('numerals'));
    }
}
