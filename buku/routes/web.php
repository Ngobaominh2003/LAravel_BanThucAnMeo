<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\Home\HomeController;

 Route::get('/fu', [HomeController::class, 'index'])->name('Menu');

 Route::get('index', function () {
    return view('Home/index');
});
