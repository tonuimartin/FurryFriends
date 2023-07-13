<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\ProviderController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\Auth\RegisterSourceController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return view('landingpage');
});

Route::get('/petinformation', function () {
    return view('allpetinfo');
});


Route::get('/dogsadoption', function () {
    return view('dogsforadoption');
});

Route::get('/catsadoption', function () {
    return view('catsforadoption');
});

Route::get('/source_dashboard', function () {
    return view('source\sourcedashboard');
});

Route::get('/registersource', [RegisterSourceController::class, 'create'])->name('registersource');

Route::post('/addedsource', [RegisterSourceController::class, 'stores']);

//edit property
Route::get('/pet/{pet}/edit', [PetController::class, 'petedit'])->middleware('auth');

//update property
Route::put('/pet/{pet}/update',[PetController::class, 'petupdate'])->middleware('auth');

//delete property
Route::delete('/pet/{pet}/delete',[PetController::class, 'delete'])->middleware('auth');

Route::get('/navbar', function () {
    return view('layouts\navbar');
});

Route::get('/displaycards2', function () {
    return view('userpartials\displaycards2');
});

Route::get('/admindashboard', function () {
    return view('admin\admindashboard');
});

// Route::get('/basictable', function () {
//     return view('admin\basictable');
// });

Route::get('/basictable', [RegisterSourceController::class, 'show']);

Route::get('/source/{sourceapplicant}/accept',[RegisterSourceController::class,'store']);

Route::delete('/source/{sourceapplicant}/deny',[RegisterSourceController::class,'deny']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/addpets', [PetController::class, 'create'])->middleware('auth');
Route::post('/addedpet', [PetController::class, 'store'])->middleware('auth');

Route::get('/petsadoption', [FilterController::class, 'index']);

Route::get('/displaypets', [PetController::class, 'show'])->middleware('auth');
Route::get('/displaydogs', [PetController::class, 'showdogs'])->middleware('auth');
Route::get('/displaycats', [PetController::class, 'showcats'])->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/auth/{provider}/redirect',[ProviderController::class,'redirect']);
 
Route::get('/auth/{provider}/callback',[ProviderController::class,'callback']);
 
//Route::get('/auth/google/redirect', function () {
 //  return Socialite::driver('google')->redirect();
//});
 
//Route::get('/auth/google/callback', function () {
  //$user = Socialite::driver('google')->user();
 
    
//});


require __DIR__.'/auth.php';