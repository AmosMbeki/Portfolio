<?php

use App\Models\Experience;
use App\Models\Project;
use App\Models\Skill;
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

Route::get('/', function () {
    return view('portfolio', [
        'projects' => Project::all(),
        'skills' => Skill::all(),
        'experiences' => Experience::all(),
    ]);
});
