<?php


use App\Http\Controllers\FrontsideController;
use App\Http\Controllers\SocialiconeController;
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
// Methode 1: taper toute les routes à la main ('edit show create et destroy ...)
Route::get('/', [FrontsideController::class, 'index']);
// Methode 2: créé seulement une ressource et voir dans le terminal le tableau pour les routes
Route::get('/delete-all',[SocialiconeController::class, 'destroyAllSocialicones'])->name('destroyall');
Route::resource('socialicones', SocialiconeController::class);
// Route::resource('aboutlis', Controller::class);
// Route::resource('skillslis', BacksideController::class);
// Route::resource('porfolioimgs', BacksideController::class);
// Route::resource('contacticones', BacksideController::class);

