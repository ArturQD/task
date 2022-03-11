<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::post('/create_subscriber',[SubscriberController::class,'create']);
Route::post('/user',[UserController::class,'create_user']);
Route::post('/post', [PostController::class, 'create']);
Route::post('/send',[MailController::class,'send']);
Route::post('/subscribe', [SubscriberController::class, 'addSubscriberToUser']);
