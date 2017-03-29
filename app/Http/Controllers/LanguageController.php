<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Language;

class LanguageController extends Controller
{
    public function index(){
        $languages = Language::all();
        return view('languages.index', compact('languages'));
    }

    public function show(Language $lenguaje){
        return view('languages.show', compact('lenguaje'));
    }
}
