<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
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
    return view('welcome');
});

Route::get('/admin/login', function () {
    return view('admin.login');
});

Route::post("admin/login", [AuthController::class, "login"])->name("admin.login");
Route::get("logout", [AuthController::class, "logout"])->name("logout");

Route::resource("post", PostController::class)->only("show");

Route::prefix('admin')->name("admin.")->middleware(["AdminAuthRedirection", 'role:admin'])->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    });
});
