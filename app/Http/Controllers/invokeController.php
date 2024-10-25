<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class invokeController extends Controller
{
    public function __invoke($page)
    {
        $validPages = ['Accueil', 'Contact', 'Présentation'];

            if (in_array($page, $validPages)) {
            return view($page);
        }
        }
}
