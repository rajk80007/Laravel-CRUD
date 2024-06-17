<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Register;
use App\Livewire\Login;
use App\Livewire\Logout;
use App\Livewire\About;
use App\Livewire\Contact;

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

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/', Dashboard::class);
Route::get('/register', Register::class);

Route::get('/login', Login::class);

Route::get('/logout', Logout::class);

Route::get('/about', About::class);

Route::get('/contact', Contact::class);