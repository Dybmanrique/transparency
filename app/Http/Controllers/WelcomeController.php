<?php

namespace App\Http\Controllers;

use App\Models\Condition;
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
        $informations = Information::all();
        $documents = Document::all();
        return view('numerals',compact('numerals','informations','documents'));
    }
    public function indicador_cbc() {
        $conditions = Condition::where('is_active',true)->get();
        $informations = Information::all();
        $documents = Document::all();
        return view('indicator_cbc',compact('conditions','informations','documents'));
    }
    public function information(Information $information) {
        $informations = Information::all();
        $documents = Document::all();
        return view('information',compact('information','informations','documents'));
    }
    public function document(Document $document) {
        $informations = Information::all();
        $documents = Document::all();
        return view('document',compact('document','informations','documents'));
    }
}
