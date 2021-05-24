<?php

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

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\test\FirstTestController;
use App\Http\Controllers\test\SecondTestController;

Route::get('/', [WelcomeController::class, 'show']);

Route::group(['prefix' => 'test'], function () {
    Route::get('/1', [FirstTestController::class, 'index']);
    Route::get('/2', [SecondTestController::class, 'index']);
});

/*Route::group(['prefix'=>'my'], function () {
    Route::group(['prefix'=>'route'], function () {
        Route::get('/{text}', function ($text) {
            echo $text;
        });
    });
});*/

Route::group(['prefix' => 'my'], function () {
    Route::get('/controller/{text}', [MyController::class, 'controller']);
    Route::get('/route/{text}', [MyController::class, 'route']);
    Route::get('/view', [MyController::class, 'view']);
});

Route::get('/user/{name?}', [UserController::class, 'showName']);
