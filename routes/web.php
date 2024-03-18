<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;

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

Route::get('/{id}', [CommentController::class, 'index']);
Route::get('/', function () {
    $name = 'Fulan';
    $image = '9';
    return view('welcome', compact(['name', 'image']));
});
