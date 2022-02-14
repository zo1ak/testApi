<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatisticController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/statistic', [StatisticController::class, 'list']);
Route::post('/statistic', [StatisticController::class, 'inc']);
