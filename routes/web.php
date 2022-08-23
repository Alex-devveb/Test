<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('vue1');
});

/** ------- creer n page ------- **/
// route::get('{n}', function($n) {
//     return 'Je suis la page ' . $n . '!';
// })->where('n', '[1-3]');

/** ---- changer la page d'accueil ---- **/
// route::get('/', function(){
//     return 'je suis la page d\'accuueil !';
// })->name('home');

//---------------Ordre des pages---------------//
/** les routes s'affiche dans l'ordre decendant **/
// route::get('{n}', function($n){
//     return 'je suis la page ' . $n . '  !';
// });

// route::get('contact', function(){
//     return "c'est moi le contact.";
// });

//------------------- Réponses ----------------------//

// route::get('test', function(){
//     return ['un', 'deux' , 'trois'];
// });

//-----------------------------------------//
/** /article/1,2,3,4,5,... **/
// route::get('article/{n}', function($n){
//     return view('article')->with('numero', $n);
// })->where('n', '[0-9]');

// ou

// route::get('article/{n}', function($n){
//     return view('article', ['numero' => $n]);
// })->where('n', '[0-9]');

// ou

// route::get('article/{n}', function($n){
//     return view('article')->withNumero($n);
// })->where('n', '[0-9]');

//----------------Blade------------------//

// route::get('facture/{n}', function($n){
//     return view('facture')->with('numero', $n);
// })->where('n', '[0-9]');



