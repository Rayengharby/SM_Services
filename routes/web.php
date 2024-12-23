<?php
use Illuminate\Support\Facades\Auth;

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
Route::any('/search',[App\Http\Controllers\SearchController::class, 'search']);



Route::get('/',[App\Http\Controllers\WelcomeController::class, 'home']);

Route::get('/services',[App\Http\Controllers\ServicesController::class, 'home']);

Route::get('/propos',[App\Http\Controllers\ProposController::class, 'home']);

Route::get('/contact', function () {
    return view('contact ');
});
Route::get('/references',[App\Http\Controllers\ReferencesController::class, 'home']);

Route::post('/contact/add',[App\Http\Controllers\ContactController::class, 'store']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->middleware('auth','admin');
/*route Services */
Route::get('/admin/Services',[App\Http\Controllers\ServicesController::class, 'index'])->middleware('auth','admin');
Route::post('/admin/Services/store',[App\Http\Controllers\ServicesController::class, 'store'])->middleware('auth','admin');
Route::get('/admin/Services/{id}/delete',[App\Http\Controllers\ServicesController::class, 'destroy'])->middleware('auth','admin');
Route::post('/admin/Services/update',[App\Http\Controllers\ServicesController::class, 'update'])->middleware('auth','admin');

/*route propos */
Route::get('/admin/propos',[App\Http\Controllers\ProposController::class, 'index'])->middleware('auth','admin');
Route::post('/admin/propos/store',[App\Http\Controllers\ProposController::class, 'store'])->middleware('auth','admin');
Route::get('/admin/propos/{id}/delete',[App\Http\Controllers\ProposController::class, 'destroy'])->middleware('auth','admin');
Route::post('/admin/propos/update',[App\Http\Controllers\ProposController::class, 'update'])->middleware('auth','admin');

/*route Chiffres */
Route::get('/admin/Chiffres',[App\Http\Controllers\ChiffresController::class, 'index'])->middleware('auth','admin');
Route::post('/admin/Chiffres/store',[App\Http\Controllers\ChiffresController::class, 'store'])->middleware('auth','admin');
Route::get('/admin/Chiffres/{id}/delete',[App\Http\Controllers\ChiffresController::class, 'destroy'])->middleware('auth','admin');
Route::post('/admin/Chiffres/update',[App\Http\Controllers\ChiffresController::class, 'update'])->middleware('auth','admin');

/*route References */
Route::get('/admin/References',[App\Http\Controllers\ReferencesController::class, 'index'])->middleware('auth','admin');
Route::post('/admin/References/store',[App\Http\Controllers\ReferencesController::class, 'store'])->middleware('auth','admin');
Route::get('/admin/References/{id}/delete',[App\Http\Controllers\ReferencesController::class, 'destroy'])->middleware('auth','admin');
Route::post('/admin/References/update',[App\Http\Controllers\ReferencesController::class, 'update'])->middleware('auth','admin');

/*route contact */
Route::get('/admin/contact',[App\Http\Controllers\ContactController::class, 'index'])->middleware('auth','admin');
Route::get('/admin/Contact/{id}/delete',[App\Http\Controllers\ContactController::class, 'destroy'])->middleware('auth','admin');

/*route admin */
Route::get('/admin/admin',[App\Http\Controllers\AdminController::class, 'index'])->middleware('auth','admin');
Route::post('/admin/admin/store',[App\Http\Controllers\AdminController::class, 'store'])->middleware('auth','admin');
Route::get('/admin/admin/{id}/delete',[App\Http\Controllers\AdminController::class, 'destroy'])->middleware('auth','admin');

