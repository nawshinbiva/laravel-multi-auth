<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('/account/login', [LoginController::class, 'index'])->name('account.login');
route::post('/account/authenticate',[LoginController::class,'authenticate'])->name('account.authenticate');