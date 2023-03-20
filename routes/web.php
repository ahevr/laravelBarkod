<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarcodeController;

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

//Route::group(["prefix" => "admin", "as" => "admin."], function () {
//
//});


Route::middleware(["guest"])->group(function () {

    Route::get('/', function () {return view('auth.login');})->name('admin.index');

});

Route::middleware(["auth"])->group(function (){



    Route::get("/testo",[BarcodeController::class,"testo"])->name("testo");




    Route::get("/dashboard",[BarcodeController::class,"index"])->name("dashboard");
    Route::get("/barkodForm",[BarcodeController::class,"barkodForm"])->name("barkodForm");
    Route::get("/barkodDetail/{id}",[BarcodeController::class,"barkodDetail"])->name("barkodDetail");

    Route::get("/downloadPDF/{id}",[BarcodeController::class,"downloadPDF"])->name("downloadPDF");

    Route::post("/barkodStore",[BarcodeController::class,"store"])->name("barkodStore");
    Route::get("/barkodSearch",[BarcodeController::class,"searchProduct"])->name("barkodSearch");
});


//Route::middleware(['guest'])->group(function () {
//
//    Route::get('/', function () {return view('auth.login');});
//
//});
//
//Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
//
//    Route::get("/dashboard",[BarcodeController::class,"index"])->name("dashboard");
//    Route::get("/barkodForm",[BarcodeController::class,"barkodForm"])->name("barkodForm");
//    Route::post('/barkodStore', function () {return view('barkodForm');})->name('barkodStore');
//
//});
//












