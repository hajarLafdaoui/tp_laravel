<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calculatriceTest extends Controller
{
    

function calcule (Request $request) {
    $num1 = $request->input('number1');
    $num2 = $request->input('number2');
    $operation = $request->input('operation');
    
    $res = 0;
    switch ($operation) {
        case 'addition':
            $res = $num1 + $num2;
            break;
        case 'soustraction':
            $res = $num1 - $num2;
            break;
        case 'multiplication':
            $res = $num1 * $num2;
            break;
        case 'division':
            if ($num2 != 0) {
                $res = $num1 / $num2;
            } else {
                $res = 'Cannot divide by zero';
            }
            break;
        default:
            $res = 'Invalid operation';
            break;
    }

    return view('calculatriceView', ['res' => $res]);
    // return redirect()->route("home", ["result"=>……….])
    // Use return view( ) if you want to stay on the same page and render the result immediately.
    // Use return redirect()->route() if you want to redirect the user to another route and pass the result along

}
}