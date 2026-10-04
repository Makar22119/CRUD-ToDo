<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;

Route::view('/', "welcome");

Route::controller(UserController::class)->prefix('form')->group(function(){
    Route::middleware("guest")->group(function(){
        Route::post('/logout', "logout");
    });
    
    Route::view('/', "form");
    Route::post('/login', "login");
    Route::post('/register', "register");
});

Route::middleware("auth")->controller(TaskController::class)->prefix("tasks")->group(function() {
    Route::view('/', "tasks");
    Route::post('/add', "addTask");
    Route::post('/update/{id}', "updateTask");
    Route::post('/delete/{id}', "deleteTask");
});
