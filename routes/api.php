<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiControler;
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

Route::get('/homepage/title',[App\Http\Controllers\ApiController::class,'titleSelect']);
Route::get('/homepage/techdes',[App\Http\Controllers\ApiController::class,'techdesSelect']);
Route::get('/homepage/summary',[App\Http\Controllers\ApiController::class,'summarySelect']);
Route::get('/homepage/video',[App\Http\Controllers\ApiController::class,'videoSelect']);
Route::get('/projectdes/{projectId}',[App\Http\Controllers\ApiController::class,'SelectidProject']);
Route::get('/project',[App\Http\Controllers\ApiController::class,'allSelectProject']);
Route::get('/client',[App\Http\Controllers\ApiController::class,'allSelectClient']);
Route::get('/footer',[App\Http\Controllers\ApiController::class,'allSelectFooter']);
Route::get('/course',[App\Http\Controllers\ApiController::class,'allSelectCourse']);
Route::get('/coursedes/{courseId}',[App\Http\Controllers\ApiController::class,'Selectid']);
Route::get('/information',[App\Http\Controllers\ApiController::class,'allSelectInformation']);
Route::get('/information/about',[App\Http\Controllers\ApiController::class,'aboutSelect']);
Route::post('/contactsend',[App\Http\Controllers\ApiController::class,'create']);

Route::get('/service',[App\Http\Controllers\ApiController::class,'allSelectService']);

Route::get('/chart',[App\Http\Controllers\ApiController::class,'allSelectChart']);