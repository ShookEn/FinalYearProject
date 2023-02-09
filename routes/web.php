<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StripePaymentController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/contactUs', function () {
    return view('contact');
});

Route::get('/addJohor', function(){
    return view('addJohor');
});

Route::get('/addMelaka', function(){
    return view('addMelaka');
});

Route::get('/addKuala', function(){
    return view('addKuala');
});

Route::get('/addGenting', function(){
    return view('addGenting');
});

Route::get('/addPenang', function(){
    return view('addPenang');
});

Route::get('/addCameron', function(){
    return view('addCameron');
});

Route::get('/addHotel', function(){
    return view('addHotel');
});

Route::get('/addFlight', function(){
    return view('addFlight');
});

Route::get('/', [HotelController::class, 'index']);
Route::post('/select', [HotelController::class, 'getDate']);

Route::post('/addHotel/store', [App\Http\Controllers\HotelController::class, 'add'])->name('addHotel');

Route::get('/viewHotel',[App\Http\Controllers\HotelController::class,'view'])->name('viewHotel');

Route::get('/deleteHotel/{id}',[App\Http\Controllers\HotelController::class,'delete'])->name('deleteHotel');

Route::get('/showHotel',[App\Http\Controllers\HotelController::class,'show'])->name('showHotel');

Route::get('/showHotel/{id}',[App\Http\Controllers\HotelController::class,'showDetail'])->name('showHotelDetail');

Route::get('/HotelDetail/{id}',[App\Http\Controllers\HotelController::class,'edit'])->name('editHotel');

Route::post('/updateHotel/store', [App\Http\Controllers\HotelController::class, 'update'])->name('updateHotel');
Auth::routes();

Route::get('/', [FlightController::class, 'index']);
Route::post('/select', [FlightController::class, 'getDate']);

Route::post('/addFlight/store', [App\Http\Controllers\FlightController::class, 'add'])->name('addFlight');

Route::get('/viewFlight',[App\Http\Controllers\FlightController::class,'view'])->name('viewFlight');

Route::get('/deleteFlight/{id}',[App\Http\Controllers\FlightController::class,'delete'])->name('deleteFlight');

Route::get('/showFlight',[App\Http\Controllers\FlightController::class,'show'])->name('showFlight');

Route::get('/showFlight/{id}',[App\Http\Controllers\FlightController::class,'showDetail'])->name('showFlightDetail');

Route::get('FlightDetail/{id}',[App\Http\Controllers\FlightController::class,'edit'])->name('editFlight');

Route::post('/updateFlight/store', [App\Http\Controllers\FlightController::class, 'update'])->name('updateFlight');
Auth::routes();

Route::get('/', [CameronController::class, 'index']);
Route::post('/select', [CameronController::class, 'getDate']);

Route::post('/addJohor/store', [App\Http\Controllers\JohorController::class, 'add'])->name('addJohor');

Route::get('/viewJohor',[App\Http\Controllers\JohorController::class,'view'])->name('viewJohor');

Route::get('/deleteJohor/{id}',[App\Http\Controllers\JohorController::class,'delete'])->name('deleteJohor');

Route::get('/showJohor',[App\Http\Controllers\JohorController::class,'show'])->name('showJohor');

Route::get('/showJohor/{id}',[App\Http\Controllers\JohorController::class,'showDetail'])->name('showJohorDetail');

Route::get('/JohorDetail/{id}',[App\Http\Controllers\JohorController::class,'edit'])->name('editJohor');

Route::post('/updateJohor/store', [App\Http\Controllers\JohorController::class, 'update'])->name('updateJohor');
Auth::routes();

Route::post('/addPenang/store', [App\Http\Controllers\PenangController::class, 'add'])->name('addPenang');

Route::get('/viewPenang',[App\Http\Controllers\PenangController::class,'view'])->name('viewPenang');

Route::get('/deletePenang/{id}',[App\Http\Controllers\PenangController::class,'delete'])->name('deletePenang');

Route::get('/showPenang',[App\Http\Controllers\PenangController::class,'show'])->name('showPenang');

Route::get('/showPenang/{id}',[App\Http\Controllers\PenangController::class,'showDetail'])->name('showPenangDetail');

Route::get('/PenangDetail/{id}',[App\Http\Controllers\PenangController::class,'edit'])->name('editPenang');

Route::post('/updatePenang/store', [App\Http\Controllers\PenangController::class, 'update'])->name('updatePenang');
Auth::routes();

Route::post('/addMelaka/store', [App\Http\Controllers\MelakaController::class, 'add'])->name('addMelaka');

Route::get('/viewMelaka',[App\Http\Controllers\MelakaController::class,'view'])->name('viewMelaka');

Route::get('/deleteMelaka/{id}',[App\Http\Controllers\MelakaController::class,'delete'])->name('deleteMelaka');

Route::get('/showMelaka',[App\Http\Controllers\MelakaController::class,'show'])->name('showMelaka');

Route::get('/showMelaka/{id}',[App\Http\Controllers\MelakaController::class,'showDetail'])->name('showMelakaDetail');

Route::get('/MelakaDetail/{id}',[App\Http\Controllers\MelakaController::class,'edit'])->name('editMelaka');

Route::post('/updateMelaka/store', [App\Http\Controllers\MelakaController::class, 'update'])->name('updateMelaka');
Auth::routes();

Route::post('/addKuala/store', [App\Http\Controllers\KualaController::class, 'add'])->name('addKuala');

Route::get('/viewKuala',[App\Http\Controllers\KualaController::class,'view'])->name('viewKuala');

Route::get('/deleteKuala/{id}',[App\Http\Controllers\KualaController::class,'delete'])->name('deleteKuala');

Route::get('/showKuala',[App\Http\Controllers\KualaController::class,'show'])->name('showKuala');

Route::get('/showKuala/{id}',[App\Http\Controllers\KualaController::class,'showDetail'])->name('showKualaDetail');


Route::post('/updateKuala/store', [App\Http\Controllers\KualaController::class, 'update'])->name('updateKuala');
Auth::routes();

Route::post('/addCameron/store', [App\Http\Controllers\CameronController::class, 'add'])->name('addCameron');

Route::get('/viewCameron',[App\Http\Controllers\CameronController::class, 'view'])->name('viewCameron');

Route::get('/deleteCameron/{id}',[App\Http\Controllers\CameronController::class,'delete'])->name('deleteCameron');

Route::get('/showCameron',[App\Http\Controllers\CameronController::class,'show'])->name('showCameron');

Route::get('/showCameron/{id}',[App\Http\Controllers\CameronController::class,'showDetail'])->name('showCameronDetail');

Route::get('/CameronDetail/{id}',[App\Http\Controllers\CameronController::class,'edit'])->name('editCameron');

Route::post('/updateCameron/store', [App\Http\Controllers\CameronController::class, 'update'])->name('updateCameron');
Auth::routes();

Route::post('/addGenting/store', [App\Http\Controllers\GentingController::class, 'add'])->name('addGenting');

Route::get('/viewGenting',[App\Http\Controllers\GentingController::class,'view'])->name('viewGenting');

Route::get('/deleteGenting/{id}',[App\Http\Controllers\GentingController::class,'delete'])->name('deleteGenting');

Route::get('/showGenting',[App\Http\Controllers\GentingController::class,'show'])->name('showGenting');

Route::get('/showGenting/{id}',[App\Http\Controllers\GentingController::class,'showDetail'])->name('showGentingDetail');

Route::get('/GentingDetail/{id}',[App\Http\Controllers\GentingController::class,'edit'])->name('editGenting');

Route::post('/updateGenting/store', [App\Http\Controllers\GentingController::class, 'update'])->name('updateGenting');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\HotelController::class, 'index']);  
Route::get('cart', [App\Http\Controllers\HotelController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}',[App\Http\Controllers\HotelController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [App\Http\Controllers\HotelController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [App\Http\Controllers\HotelController::class, 'remove'])->name('remove.from.cart');

Route::post('/testcart.post',[App\Http\Controllers\StripePaymentController::class,'cartPost'])->name('cart.post');
Route::post('/searchHotel',[App\Http\Controllers\HotelController::class,'searchHotel'])->name('searchHotel');
Auth::routes();



Route::get('/', function () {
    return view('auth.login');
});


Route::get('fullcalendar',[App\Http\Controllers\FullCalendarController::class, 'index'])->name('fullcalendar');
Route::post('fullcalendar/create',[App\Http\Controllers\FullCalendarController::class, 'create'])->name('createfullcalendar');
Route::post('fullcalendar/update',[App\Http\Controllers\FullCalendarController::class, 'update'])->name('updatefullcalendar');
Route::post('fullcalendar/delete',[App\Http\Controllers\FullCalendarController::class, 'delete'])->name('deletefullcalendar');

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/', function () {
    return view('auth.register');
});

Route::get('/addComment', function(){
    return view('addComment');
});

Route::post('/addComment/store', [App\Http\Controllers\CommentController::class, 'add'])->name('addComment');

Route::get('/viewComment',[App\Http\Controllers\CommentController::class,'view'])->name('viewComment');

Route::get('/deleteComment/{id}',[App\Http\Controllers\CommentController::class,'delete'])->name('deleteComment');

Route::get('/aboutUs', function () {
    return view('aboutUs');
});


Route::get('aboutUs',[App\Http\Controllers\AboutUsController::class, 'index'])->name('aboutUs');

