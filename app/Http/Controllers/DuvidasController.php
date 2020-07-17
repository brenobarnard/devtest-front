<?php

namespace App\Http\Controllers;https://fonts.google.com/specimen/Ubuntu?query=Ubuntu

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DuvidasController extends Controller
{
    //
    public function index() {
        // Get duvidas from JSON archive as an array of objects.
        $duvidas = json_decode(Storage::disk('public')->get('duvidas.json'));
        
        // Returns the view passing questions data for this.
        return view('pages/duvidas', ['questions' => $duvidas->lista_tarefas]);
    }
}
