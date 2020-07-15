<?php

namespace App\Http\Controllers;https://fonts.google.com/specimen/Ubuntu?query=Ubuntu

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DuvidasController extends Controller
{
    //
    public function index() {
        $duvidas = json_decode(Storage::disk('public')->get('duvidas.json'));
        
        return view('pages/duvidas', ['questions' => $duvidas->lista_tarefas]);
    }
}
