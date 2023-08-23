<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;


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

Route::get('/register', [RegisterController::class, 'index']);  //会員登録画面表示
Route::get('/data', [RegisterController::class, 'work']);  //日付別画面表示
Route::get('/login', [RegisterController::class, 'registerForm']); //ログイン画面表示
Route::post('/login', [RegisterController::class, 'store']);  //会員データをDBに送信
Route::middleware(['stamp.access'])->group(function () {
    Route::match(['get', 'post'], '/stamp', [RegisterController::class, 'display'])->name('stamp');
});   //ログインページ認証機能　stampのget,postメソッド両方に対応するコード
Route::post('/login_stamp', [RegisterController::class, 'login_staぎtmp'])->name('login_stamp'); //ログイン照合
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
