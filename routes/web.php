<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Register;
use App\Livewire\Login;
use App\Livewire\Dashboard;

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

<<<<<<< HEAD
// Route::get('/', Dashboard::class);
Route::get('/register', Register::class);

=======
Route::get('/', Dashboard::class);
Route::get('/register', Register::class);
>>>>>>> decf5b5b81151ef2efb08ed548369760ca6cfd9a
Route::get('/login', Login::class);