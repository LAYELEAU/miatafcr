<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation; // Attention à importer ton modèle Formation

class FormationController extends Controller
{
    public function show($slug)
    {
        $formation = Formation::where('slug', $slug)->firstOrFail();

        return view('formations.show', compact('formation'));
    }
}
