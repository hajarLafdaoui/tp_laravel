<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Notes extends Controller
{
  
    public function all()
    {
        $notes = ["Mohamed Alaoui" => "16", "Ahmed Bennani" => "14", "Rachida kich" => "6", "Aicha Saaoudi" => "19", "Noura Alaoui" => "7", "Samar Rhaoussi" => "13", 
        "Aicha Siraj" => "10", "Samiha Hakim" => "09", "Mohamed Rami"=> "17", "Sami Tazi"
        => "7", "Noura Tazi" => "14"] ;

        arsort($notes);        
        return view('notes',compact('notes'));
        
    }
     
    public function color()
    {
        $notes = [
            "Mohamed Alaoui" => "16", 
            "Ahmed Bennani" => "14", 
            "Rachida kich" => "6", 
            "Aicha Saaoudi" => "19", 
            "Noura Alaoui" => "7", 
            "Samar Rhaoussi" => "13", 
            "Aicha Siraj" => "10", 
            "Samiha Hakim" => "09", 
            "Mohamed Rami" => "17", 
            "Sami Tazi" => "7", 
            "Noura Tazi" => "14"
        ];
    
        arsort($notes);        
        $array = [];  

        foreach ($notes as $nom => $note) {
            $color = "";
    
            if ($note > 10) {
                $color = "green";
            } elseif ($note >= 8 && $note <= 10) {
                $color = "orange";
            } else {
                $color = "red";
            }
    
            $array[] = [
                'nom' => $nom,
                'note' => $note,
                'color' => $color
            ];
        }
    
        return view('notes', compact('array'));
    }
    
    public function show(Request $request){
        $searchValue = $request->input('search');
        $notes = [
            "Mohamed Alaoui" => "16", 
            "Ahmed Bennani" => "14", 
            "Rachida kich" => "6", 
            "Aicha Saaoudi" => "19", 
            "Noura Alaoui" => "7", 
            "Samar Rhaoussi" => "13", 
            "Aicha Siraj" => "10", 
            "Samiha Hakim" => "09", 
            "Mohamed Rami" => "17", 
            "Sami Tazi" => "7", 
            "Noura Tazi" => "14"
        ];
      
    $filteredNotes = [];
        foreach ($notes as $key => $value) {
            if (stripos($key, $searchValue) !== false) {
                $filteredNotes[$key] = $value;
            }
        }

        // If there are no filtered notes, create a message
        if (empty($filteredNotes)) {
            $filteredNotes['message'] = "Aucune note trouvée pour '$searchValue'.";
        }

        return view('notes', ['notes' => $filteredNotes]);
}

}
