<?php
use Illuminate\Support\Facades\Route;
// Route::get('/about', function () {
//     return redirect('/contact');
// });
Route::view('/about','about');
Route::get('/contact', function () {
    return view('contact');
});
// Route::get('/contact/{roll}', function ($roll) {
//     return "My Roll No is $roll";
// });
Route::get('/', function () {
    return view('welcome');
});
Route::get('/country', function () {
  return view('country');
})->middleware('country');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
