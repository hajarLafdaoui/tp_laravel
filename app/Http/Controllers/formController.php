<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    public function index(){
        return view('formulaire');
    }
    public function Afficher(Request $request){
        $nom = $request->input('nom');
        $prénom = $request->input('prénom');
        $sexe = $request->input('sexe');
        $email = $request->input('email');

        return view("formulaire", ["nom" => $nom, "prénom" => $prénom, "sexe" => $sexe, "email" => $email]);


    }
}
