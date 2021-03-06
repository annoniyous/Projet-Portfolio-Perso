<?php

use App\Http\Controllers\AboutliController;
use App\Http\Controllers\FrontsideController;
use App\Http\Controllers\SkillsliController;
use App\Http\Controllers\SocialiconeController;
use App\Http\Controllers\PortfolioimgController;
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
Route::get('/delete-all',[AboutliController::class, 'destroyAllAboulis'])->name('destroyall');
Route::resource('aboutlis', AboutliController::class);
Route::get('/delete-all',[SkillsliController::class, 'destroyAllSkillslis'])->name('destroyall');
Route::resource('skillslis', SkillsliController::class);
Route::get('/delete-all',[PortfolioimgController::class, 'destroyAllPortfolioimgs'])->name('destroyall');
Route::resource('porfolioimgs', PortfolioimgController::class);
// Route::resource('contacticones', BacksideController::class);

