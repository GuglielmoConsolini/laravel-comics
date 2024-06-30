<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// ROTTA CON ARRAY DATA

Route::get('/', function () {

    $comics = config("store");

    $data = [
      "saluto" => "Benvenuti in Laravel",
      "descrizione" => "Nella home avrai alcuni esempi di fumetti che vanno per la maggiore , cosa aspetti a ordinarli?",
      "copyright" => "(c) 1994 Wizards of the Coast Inc. All right reserved.",
      "comics" => $comics
    ];
    return view('welcome',$data);
});

//ROTTA CON METODO COMPACT

Route::get('/home',function(){

    $saluto = "Benvenuti in Laravel";
    $descrizione = "Nella home avrai alcuni esempi di fumetti che vanno per la maggiore , cosa aspetti a ordinarli?";
    $copyright = "(c) 1994 Wizards of the Coast Inc. All right reserved.";

    $data = compact("saluto","descrizione","copyright");

    $comics = config("store");

    $data['comics'] = $comics;

    return view('welcome',$data);
});

//ROTTA PER about.blade.php

Route::get('/credits',function(){

    $comics = config("store");

    return view('about',['comics'=> $comics]);
});
