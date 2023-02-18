<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Auth;
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

Route::get("/", [TodoController::class, "home"])->name("todo.home");
Route::get("/create", [TodoController::class, "create"]);
Route::get("/{todo}/show", [TodoController::class, "show"])->name("todo.show");
Route::post("/create", [TodoController::class, "store"]);
Route::get("/{todo}/edit", [TodoController::class, "edit"]);
Route::patch("/{todo}/edit", [TodoController::class, "update"])->name("todo.update");
Route::patch("/{todo}/complete", [TodoController::class, "complete"])->name("todo.complete");
Route::patch("/{todo}/incomplete", [TodoController::class, "incomplete"])->name("todo.incomplete");
Route::delete("/{todo}/delete", [TodoController::class, "deleteTodo"])->name("todo.deleteTodo");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
