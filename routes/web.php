<?php

use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PersonnageController;
use Illuminate\Foundation\Auth\User;
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


Route::get('/', function(){
    return view("welcome");
});
Route::middleware('auth:sanctum')->get('/user', function () {
    Route::get('/', function(){
    return view("dashboard");
});
});


Route::get('dashboard',DashboardController::class)->name('dashboard')->middleware('auth');

Route::get('login', [Authcontroller::class, 'login'])->name('login');
Route::post('authenticate', [Authcontroller::class, 'authenticate'])->name('authenticate');
Route::get('logout', [Authcontroller::class, 'logout'])->name('logout');
Route::get('/inscription', function(){
    return view('inscription');
});

Route::post('/inscription', function(){

    $user = \App\Models\User::create([
        "email"=>request('email'),
        "pseudo"=>request('pseudo'),
        "name"=>request('name'),
        "password"=>bcrypt(request('password')),
    ]);
    return view('dashboard');
    
});

Route::fallback(function() {
    return view('404'); 
 });

// Personnage

Route::get('/personnage', function(){
    return view("personnage.create");
    
});



Route::get('/', [PersonnageController::class, 'index'])->name('personnages.index');
Route::get('/{id}', [PersonnageController::class, 'show'])->name('personnages.show');
Route::post('/', [PersonnageController::class, 'store'])->name('personnages.store');
Route::get('/{id}', [PersonnageController::class, 'edit'])->name('personnages.edit');
Route::put('/', [PersonnageController::class, 'update'])->name('personnages.update');
Route::get('/', [PersonnageController::class, 'create'])->name('personnages.create');
Route::delete('/', [PersonnageController::class, 'delete'])->name('personnages.delete');

// Route::get('/', [GroupeController::class, 'index'])->name('groupes.index');
// Route::get('/{id}', [GroupeController::class, 'show'])->name('groupes.show');
// Route::post('/', [GroupeController::class, 'store'])->name('groupes.store');
// Route::get('/{id}', [GroupeController::class, 'edit'])->name('groupes.edit');
// Route::put('/', [GroupeController::class, 'update'])->name('groupes.update');
// Route::get('/', [GroupeController::class, 'create'])->name('groupes.create');
// Route::delete('/', [GroupeController::class, 'delete'])->name('groupes.delete');

// Route::get('/', [InviteController::class, 'index'])->name('invites.index');
// Route::get('/{id}', [InviteController::class, 'show'])->name('invites.show');
// Route::post('/', [InviteController::class, 'store'])->name('invites.store');
// Route::get('/{id}', [InviteController::class, 'edit'])->name('invites.edit');
// Route::put('/', [InviteController::class, 'update'])->name('invites.update');
// Route::get('/', [InviteController::class, 'create'])->name('invites.create');
// Route::delete('/', [InviteController::class, 'delete'])->name('invites.delete');