<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Example\FirstController;
use App\Http\Controllers\Second\SecondController;
// Route::get('/about', function () {
//     return redirect('/contact');
// });
//Route::view('/about','about');
Route::get('/about', function (Request $request) {
    //$token = $request->session()->token();
  $token = csrf_token();
  dd($token);
 })->name('about.us');


//.laravel-08.//
 Route::get('/contact', [FirstController::class, 'index'])->name('contact.us');
 Route::get('/phone',[FirstController::class,'phone'])->name('phonenumber');
 Route::get('/name',[SecondController::class,'name'])->name('Name');

// Route::get('/contact', function () {
//     return view('contact');
// });
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
