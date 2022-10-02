<?php

use App\Http\Controllers\PortfolioController;
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

 /** Common Resource Routes: */

// index - Show all entities
// show - Show single entity
// create - Show form to create new entity
// store - Store new entity
// edit - Show form to edit entity
// update - Update entity
// destroy - Delete entity 

Route::get('/', [PortfolioController::class, 'index']);

Route::post('/', [PortfolioController::class, 'store']);
