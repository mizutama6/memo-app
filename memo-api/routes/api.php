<?php

use App\Http\Controllers\MemosController;
use Illuminate\Http\Request;
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

// memo一覧取得
Route::get('/memos', [MemosController::class, 'index']);

// memo新規作成
Route::post('/memos', [MemosController::class, 'create']);

// memo詳細の取得
Route::get('/memos/{memo}', [MemosController::class, 'show']);

// memoの更新
Route::put('/memos/{memo}', [MemosController::class, 'update']);

// memoの削除
Route::delete('/memos/{memo}', [MemosController::class, 'destroy']);