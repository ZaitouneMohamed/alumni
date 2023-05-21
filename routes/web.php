<?php

use App\Http\Controllers\allController;
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
Route::get('/profile', function () {
    return view('landing.content.profile');
});

Route::get('/chat', function () {
    return view('landing.content.chat');
})->name("chat");

Route::get('/admin/login', function () {
    return view('admin.login');
});

Route::post("admin/login", [AuthController::class, "login"])->name("admin.login");
Route::post("register", [AuthController::class, "register"])->name("register");
Route::get("logout", [AuthController::class, "logout"])->name("logout");
Route::get("events", [allController::class, "EvenetsList"])->name("EvenetsList.list");
Route::get("offres", [allController::class, "OffresList"])->name("offres.list");
Route::get("actualite", [allController::class, "ActualiteList"])->name("ActualiteList.list");

Route::post("AddComment/{id}", [allController::class, "addComment"])->name("addComment");

Route::resource("post", PostController::class);

Route::prefix('admin')->name("admin.")->middleware(["AdminAuthRedirection", 'role:admin'])->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    });
});
