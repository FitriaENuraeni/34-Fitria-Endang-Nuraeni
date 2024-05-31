<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\Admin;

Route::get('/', [UserController::class, "index"]);
Route::get('/book/{id}', [UserController::class, 'show']);

Route::controller(AuthController::class)->prefix("auth")->name("auth.")->group(function(){
    Route::get("/login", "loginPage")->name("loginPage");
    Route::post("/login", "login")->name("login");
    Route::get("/register", "registerPage")->name("registerPage");
    Route::post("/register", "register")->name("register");
    Route::get("/logout", "logout")->name("logout");
});

Route::controller(ReviewController::class)->middleware(["authenticate:user"])->name("review.")->group(function(){
    Route::get('/review/{id}/edit', 'edit')->name("edit");
    Route::get('/review/{id}', 'show')->name("show");
    Route::post('/review/{id}', 'store')->name("store");
    Route::put('/review/{id}', 'update')->name("update");
    Route::delete('/review/{id}', 'destroy')->name("delete");
});


Route::prefix('admin')->group(function(){
    Route::get('/', [BookController::class, "index"])->middleware(["authenticate:admin"]);
    Route::get('/create', [BookController::class, "create"])->middleware(["authenticate:admin"]);

    //book
    Route::post('/book', [BookController::class, 'store'])->middleware(["authenticate:admin"]);
    Route::get('/book/{id}/edit', [BookController::class, 'edit'])->middleware(["authenticate:admin"]);
    Route::get('/book/{id}', [BookController::class, "show"])->middleware(["authenticate:admin"]);
    Route::put('/book/{id}', [BookController::class, 'update'])->middleware(["authenticate:admin"]);
    Route::delete('/book/{id}', [BookController::class, 'destroy'])->middleware(["authenticate:admin"]);

    //genre
    Route::get('/genre', [GenreController::class, "index"])->middleware(["authenticate:admin"]);
    Route::get('/genre/create', [GenreController::class, "create"])->middleware(["authenticate:admin"]);
    Route::post('/genre', [GenreController::class, 'store'])->middleware(["authenticate:admin"]);
    Route::get('/genre/{id}/edit', [GenreController::class, 'edit'])->middleware(["authenticate:admin"]);
    Route::put('/genre/{id}', [GenreController::class, 'update'])->middleware(["authenticate:admin"]);
    Route::delete('/genre/{id}', [GenreController::class, 'destroy'])->middleware(["authenticate:admin"]);

    //author
    Route::get('/author', [AuthorController::class, "index"])->middleware(["authenticate:admin"]);
    Route::get('/author/create', [AuthorController::class, "create"])->middleware(["authenticate:admin"]);
    Route::post('/author', [AuthorController::class, 'store'])->middleware(["authenticate:admin"]);
    Route::get('/author/{id}/edit', [AuthorController::class, 'edit'])->middleware(["authenticate:admin"]);
    Route::put('/author/{id}', [AuthorController::class, 'update'])->middleware(["authenticate:admin"]);
    Route::delete('/author/{id}', [AuthorController::class, 'destroy'])->middleware(["authenticate:admin"]);

    //detail genre
    Route::post('/detail/{id}', [DetailController::class, 'store'])->middleware(["authenticate:admin"]);
    Route::delete('/detail/{id}', [DetailController::class, 'destroy'])->middleware(["authenticate:admin"]);
});

