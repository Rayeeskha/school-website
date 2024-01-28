<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use  \App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\LanguageController;
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

Route::get('/', HomeController::class)->name('home');


Route::get('website', [HomeController::class,'website'])->name('website');

Route::get('gareeb-nawaz-markaz', function() {
  	return QrCode::size(300)->generate('https://ghareebnawazmarkaz.com/');
});

Route::match(['POST','GET'],'/page/{page}', [HomeController::class, 'page'])->name('page')->where('page',"examination");

Route::get('lang/change/{lang}',[LanguageController::class,'change'])->name('change');


require __DIR__.'/auth.php';
