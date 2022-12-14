<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Example\FirstController;
use App\Http\Controllers\Example\SecondController;
use App\Http\Controllers\thirdcontroller;
use App\Http\Controllers\LearnController;

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
 Route::get('/birth',[thirdcontroller::class,'birthday'])->name('birthday');
 Route::post('/student', [FirstController::class, 'Student'])->name('student');
 Route::get('/test1',[SecondController::class,'test']);
 Route::get('/Laravel',[FirstController::class,'laravel'])->name('Laravel');

 //invokable route:
 Route::get('/test', LearnController::class);
 Route::get('/hello', LearnController::class,'hello');
 Route::get('/country2',[FirstController::class,'country2'])->name('country2')->middleware('country');





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
