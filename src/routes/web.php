<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\RouteQuestionController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Routing\Router;

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

// Route::get('/test/{text}', [TestController::class,'index']); //必須パラメータ
// Route::get('/test/{text?}', [TestController::class, 'index']); //任意パラメータ
Route::get('/test', [TestController::class, 'index']);
Route::get('/hello', [HelloController::class, 'index']);
Route::get('/', function () {
    return view('welcome');
});

/* Route::prefix('user')->group(function () {
    Route::get('', [UserController::class, 'index']);
    Route::get('add', [UserController::class, 'add']);
    Route::get('del', [UserController::class, 'del']);
}); */ //ルートプレフィックス(全てのパスが'user'ルーティングを経由して設定)

/* Route::group(['prefix' => 'user'], function () {
    Route::get('', [UserController::class, 'index']);
    Route::get('add', [UserController::class, 'add']);
    Route::get('del', [UserController::class, 'del']);
}); */ //ルートグループ prefix,ミドルウェアを一括管理

/* Route::group(['prefix' => 'user'], function () {
    Route::group(['middleware' => 'auth'],function(){
        Route::get('', [UserController::class, 'index']);
        Route::get('add', [UserController::class, 'add']);
        Route::get('del', [UserController::class, 'del']);
    });
}); */ //ルートグループ authというミドルウェアが追加された場合

// 問1
Route::get('/RouteQ/{room}/{id}', [RouteQuestionController::class, 'RouteQuestion']);

// 問2
Route::get('/RouteQ2/test/{greeting?}', function ($greeting = 'Goodmorning') {
    return $greeting . '=おはようございます';
});
