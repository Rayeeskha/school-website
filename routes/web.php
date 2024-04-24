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

Route::match(['POST','GET'],'staff-details', [HomeController::class, 'staffDetail'])->name('staff_details');

Route::match(['POST','GET'],'course-details', [HomeController::class, 'courseDetail'])->name('course_detail');

Route::match(['POST','GET'],'gallary/{id?}/{key?}', [HomeController::class, 'gallary'])->name('gallary');

Route::match(['POST','GET'],'event', [HomeController::class, 'event'])->name('event');

Route::match(['POST','GET'],'media-detail/{id?}', [HomeController::class, 'mediaDetail'])->name('media_detail');


Route::match(['POST','GET'],'/page/{page}', [HomeController::class, 'page'])->name('page')->where('page',"examination|academic|admission|contact-us");

Route::get('lang/change/{lang}',[LanguageController::class,'change'])->name('change');


require __DIR__.'/auth.php';
