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

// route::get('/create', 'create');
// route::get('/', 'index');
// route::get('/register', 'register');
// route::get('/login', 'login');
// route::get();

// routes/web.php

// Route::get('/', 'JobController@index');
// Route::get('/jobs', 'JobController@search');
// Route::get('/login', 'AuthController@loginForm');
// Route::post('/login', 'AuthController@login');
// Route::get('/register', 'AuthController@registerForm');
// Route::post('/register', 'AuthController@register');
// Route::get('/logout', 'AuthController@logout');


////////////////////////////////////////////////////
Route::get('/', function () {
    return view('index');
});

// Route::get('/worker', function () {
//     return view('worker');
// });

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

// Route::get('/logout', function () {
//     return view('logout');
// });
///////////////////////////////////////////////////
// route::post();
// route::put();
// route::patch();
// route::delete();
// route::options();

// route::match(['get' , 'post'], '/', function(){
//     return 'POST and GET is allowed';
// });