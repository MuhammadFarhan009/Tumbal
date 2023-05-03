<?php

use App\Http\Controllers\home;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [home::class, 'HomeIndex']);
// Route::get('/', [home::class, '']);
//  Route::get('/data', [home::class, 'DataIndex']);
 Route::post('/dataInsert', [home::class, 'DataInsert']);
// Route::get('/index', 'OptionController@index');
// Route::get('/welcome', 'App\Http\Controllers\OptionController@index');

