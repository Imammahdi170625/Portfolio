<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PorfolioController;
use App\Http\Controllers\TestimonialController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/service', [ServiceController::class, 'index'])->name('service');

Route::get('/testimonial', [TestimonialController::class, 'index'])->name('testimonial');

Route::get('/portfolio', [PorfolioController::class, 'index'])->name('portfolio');

Route::get('/fac', [FacController::class, 'index'])->name('fac');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
