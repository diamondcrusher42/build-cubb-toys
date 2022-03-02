<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/project/{slug}', [ProjectController::class, 'show']);

Route::get('/submit-project', function () {
    return view('subpages.submit-project');
});
Route::get('/how-it-works', function () {
    return view('subpages.how-it-works');
});
Route::get('/faq', function () {
    return view('subpages.faq');
});
Route::get('/about-us', function () {
    return view('subpages.about-us');
});

