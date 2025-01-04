<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class,'showlist']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/form',[ProductController::class,'index'])->name('form');

Route::post('/datastore',[ProductController::class,'store'])->name('datastore');

Route::get('/listdata',[ProductController::class,'showlist'])->name('listdata');

Route::get('/edit/{id}',[ProductController::class,'edit'])->name('edit');

Route::post('/update/{id}',[ProductController::class,'update'])->name('update');

Route::get('/delete/{id}',[ProductController::class,'delete'])->name('delete');


require __DIR__.'/auth.php';
