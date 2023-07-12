<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProviderController;
//use Illuminate\Support\Facades\URL;
//URL::forceScheme("https");
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
// de la code with tony
//Route::get('/auth/{provider}/redirect', [ProviderController::class, 'redirect']);
//
//Route::get('/auth/{provider}/callback', [ProviderController::class, 'callback']);


// de la arabu destept
Route::get('auth/google', [ProviderController::class , 'redirect']) -> name('google-auth');

Route::get('auth/google/callback', [ProviderController::class, 'callback']);

//require __DIR__.'/auth.php';
