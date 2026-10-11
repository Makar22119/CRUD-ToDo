<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;

Route::view('/', "welcome")->name("index");

Route::controller(UserController::class)->prefix('form')->group(function(){
    Route::middleware("guest")->group(function(){
        Route::post('/logout', "logout")->name('form.logout');
    });
    
    Route::view('/', "form")->name('login');
    Route::post('/login', "login")->name('form.login');
    Route::post('/register', "register")->name('form.register');
});

Route::middleware("auth")->controller(TaskController::class)->prefix("tasks")->group(function() {
    Route::view('/', "tasks")->name('tasks');
    Route::post('/add', "addTask")->name('tasks.add');
    Route::post('/update/{id}', "updateTask")->name('tasks.update');
    Route::post('/delete/{id}', "deleteTask")->name('tasks.delete');
});
