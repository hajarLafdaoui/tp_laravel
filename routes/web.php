<?php

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Notes;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formController;
use App\Http\Controllers\calculatriceTest;
use App\Http\Controllers\invokeController;

// //3
// Route::get('contact', function() {
//     return "C'est moi le contact.";
// });

// // 2
// Route::get('/', function () {
//     return 'welcome to the home page';
// });

// Route::get('/login', function () {
//     return 'welcome to the login page';
// });

// Route::get('/something',[formController::class, 'index']);
// Route::post('/formm',[formController::class, 'afficher']);


// Route::get('/{page}', invokeController::class);


// Route::get('/page/1', function () {
//     return 'welcome to the page1';
// });



// ex2
// Route::get('/profile', function() {
//     return view('form');

// });

// Route::post('/profile', function() {
//     $nom = request('nom');
//     $email = request('email');
//     return view('form', ['nom' => $nom, 'email' => $email]);

// });

// Route::post('/profile', function(Request $request) {
//     $nom = $request->nom;
//     $email = $request->email;
//     return view('form', ['nom' => $nom, 'email' => $email])->name('profile');

// });
// Feature	        $request->input('number1')	           $request->number1
// Access Scope     Works with nested data, query, form    Limited to simple flat input data
                    // and JSON payloads          
// Default Value  	Yes 	                                No


// // End of ex2

// // 3
// Route::get('{n}', function($n) {
//     return 'Je suis la page ' . $n . ' !';
// });

// // A  C
// Route::get('test/{param}', function($param) {
//     return view('welcome', ["param" => $param]);

// });

// B
// Route::get('/test/{param}', function ($param) {
//     return 'Le paramètre est : ' . $param;
// })->where('param', '[A-Za-z0-9]+');  // Regex for alphanumeric values

// D
// Route::view('test','welcome', ["param" => $param]);


// // 4
// Route::get('/Formation/{formation}/filiere/{filiere}/groupe/{groupe}/stagiaire/{stagiaire?}', function($formation, $filiere, $groupe, $stagiaire = null) {
//     return view('welcome', [
//         'for' => $formation, 
//         'fil' => $filiere, 
//         'gro' => $groupe, 
//         'stagiaire' => $stagiaire ?? now()->year
//     ]);
// });
// Route::get('/Formation/{formation}/filiere/{filiere}/groupe/{groupe}/stagiaire/{stagiaire}', function ($formation, $filiere, $groupe, $stagiaire) {
//     // a. Retourner une chaîne de caractères avec les valeurs des paramètres
//     return "Formation: $formation, Filière: $filiere, Groupe: $groupe, Stagiaire: $stagiaire";
// });



// 5
// php artisan route:list





// Route::view("/home", "calculatriceView")->name("home");

// Route::post("/calculer", [calculatriceTest::class, 'calcule']);




// Route::get("/notes", [Notes::class, 'all']);


// Route::get("/notes/statistiques", [Notes::class, 'color']);

// Route::get(" /notes/show", [Notes::class, 'show']);



// Route::get('/home2', function() {
//     return view('Acceuil');

// });


// Route::get('/Res', function() {
//     $notes = [
//         "Mohamed Alaoui" => "16", 
//         "Ahmed Bennani" => "14", 
//         "Rachida Kich" => "6", 
//         "Aicha Saaoudi" => "19", 
//         "Noura Alaoui" => "7", 
//         "Samar Rhaoussi" => "13", 
//         "Aicha Siraj" => "10", 
//         "Samiha Hakim" => "09", 
//         "Mohamed Rami" => "17", 
//         "Sami Tazi" => "7", 
//         "Noura Tazi" => "14"
//     ];

//     // Ensure data is passed as an array with a key
//     return view('components.Res', ['notes' => $notes]);
// });

// Route::get('/Resultat', function() {
//     return view('Resultat');

// });


// Route::get('/notes', function (Request $request) {
//     $notes = [
//         "Mohamed Alaoui" => "16",
//         "Ahmed Bennani" => "14",
//         "Rachida Kich" => "6",
//         "Aicha Saaoudi" => "19",
//         "Noura Alaoui" => "7",
//         "Samar Rhaoussi" => "13",
//         "Aicha Siraj" => "10",
//         "Samiha Hakim" => "09",
//         "Mohamed Rami" => "17",
//         "Sami Tazi" => "7",
//         "Noura Tazi" => "14"
//     ];

//     $searchValue = $request->input('search');

//     $filteredNotes = $searchValue
//         ? array_filter($notes, fn($key) => stripos($key, $searchValue) !== false, ARRAY_FILTER_USE_KEY)
//         : $notes;

//     if (empty($filteredNotes)) {
//         $filteredNotes['message'] = "Aucune note trouvée pour '$searchValue'.";
//     }

//     return view('Resultat', ['newNotes' => $filteredNotes]);
// });








// Route::get('/contact', function() {
//     return view('Contact');

// });

