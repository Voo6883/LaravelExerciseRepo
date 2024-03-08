<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;

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
Route::get('users/{user}',[UserController::class, 'index']);

Route::get('user/{user}', [UserController::class, 'loadView']);

// Route::get('/user/{user}', function($user) {
//     return view('user', ['user' => $user]);
// });

Route::get('/', function () {
    return view('welcome');
});

//* Get the route by the name of the view, can be further modify to handle different condition
Route::get('/about', function () {
    return view('about');
});

//* Viewing only
Route::view("contact", "contact");
Route::view('signup', 'signup');
Route::view('addUser', 'addUser');
// Route::view('signup', 'signup');
// Route::view('login', 'login');
Route::view('noaccess', 'noaccess')->name('noaccess');
Route::view('home', 'welcome');

Route::get('/datatest', [UserController::class, 'testData']);
Route::get('/deleteUser/{id}', [UserController::class, 'deleteUser']);
Route::post('/createUser', [UserController::class, 'signup']);
Route::post('/login', [UserController::class, 'login']);
Route::group(['middleware' => ['protectedPage']], function(){
    Route::view('signup', 'signup');
    Route::view('contact', 'contact');
    Route::view('login', 'login');
});

Route::get('login', function(){
    if(session()->has('user')){
        return redirect('home');
    }
    return view('login');
});
Route::post('login', [UserController::class, 'login']);
Route::get('logout', function(){
    if(session()->has('user')){
        session()->pull('user');
    }
    return redirect('login');
});


// Route::get('/{username}', function ($username) {
//     return view('welcome', ['username' => $username]);
// });