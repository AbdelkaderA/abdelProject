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
    return view('welcome');
});




// Route::get('/test', function () {
//     return view('test');
// });
// Route::get('/1', function () {
//     return view('1');
// });
// Route::get('/2', function () {
//     return view('2');
// });
// Route::get('/3', function () {
//     return view('3');
// })->name('1');

// Route::get('1', function () { return 'page1';});
// Route::get('2', function () { return 'page2';});
// Route::get('3', function () { return 'page3';});

// Route::get('{n}', function($n) {
//     return 'Je suis la page ' . $n . ' !';
// });

// Route::get('{n?}', function($n = 1) {
//     return 'Je suis la page ' . $n . ' !';
// });

// Route::get('{n}', function($n) {
//     return 'Je suis la page ' . $n . ' !';
// })->where('n', '[1-5]');

// Route::get('test', function () {
//     return ['un', 'deux', 'trois'];
// });

// Route::get('test', function () {
//     return response('un test', 206)->header('Content-Type', 'text/plain');
// });

// Route::get('/', function() {
//     return view('vue1');
// });

// Route::get('test', function () {
//     return response('un test', 206)->header('Content-Type', 'text/plain');
// });

// Route::get('article/{n}', function($n) {
//     //return view('article')->with('numero', $n);
//     //return view('article')->withNumero($n);
//     return view('article', ['numero' => $n]);
// })->where('n', '[0-9]+');

// Route::get('articlee/{n}', function($n) {
//     //return view('articlee')->with('numero', $n);
//     //return view('articlee')->withNumero($n);
//     return view('articlee', ['numero' => $n]);
// })->where('n', '[0-9]+');

// Route::get('facture/{n}', function($n) {
//     return view('facture')->withNumero($n);
// })->where('n', '[0-9]+');

// Route::get('articlee/{n}',function($n){
//     return view('articlee')->withNumero($n);
// })->where('n','[0-9]+');

// Route::get('/test', function () {
//     // return redirect('2');
//     return redirect()->route('3');
// });

//Route::get('/', 'WelcomeController@index');

//Route::get('/', 'WelcomeController@index')->name('nomdelaroute');

//Route::get('article/{n}', 'ArticleController@show')->where('n', '[0-9]+');

// Route::get('users', 'UsersController@create');
// Route::post('users', 'UsersController@store');

// Route::get('contact', 'ContactController@create');
// Route::post('contact', 'ContactController@store');

// Route::get('/test-contact', function () {
//     return new App\Mail\Contact([
//       'nom' => 'Durand',
//       'email' => 'durand@chezlui.com',
//       'message' => 'Je voulais vous dire que votre site est magnifique !'
//       ]);
// });

// Route::get('photo', 'PhotoController@create');
// Route::post('photo', 'PhotoController@store');

Route::get('contact', 'ContactController@create')->name('contact.create');
Route::post('contact', 'ContactController@store')->name('contact.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
