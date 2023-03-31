<?php

use App\Http\Controllers\Front\HomeController;
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

Route::get('/', function (){
    return view('coming-soon-2');
});
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('faq', [HomeController::class, 'faq'])->name('faq');
Route::get('pricing', [HomeController::class, 'pricing'])->name('pricing');
Route::get('services', [HomeController::class, 'services'])->name('services');
Route::get('cart', [HomeController::class, 'cart'])->name('cart');
Route::get('checkout', [HomeController::class, 'checkout'])->name('checkout');
Route::get('terms', [HomeController::class, 'terms'])->name('terms');


Route::post('calculate-growth', [HomeController::class, 'calculateGrowth'])->name('calculate-growth');
