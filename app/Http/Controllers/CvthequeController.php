<?php

namespace App\Http\Controllers; // Espace de nom, sorte d'identifiant

use Illuminate\Http\Request;

class CvthequeController extends Controller
{
    public function index(){

        $data = [
            'title' => 'Accueil CVThèque'
        ];

        return view('cvtheque', $data);
    }
}
