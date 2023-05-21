<?php

use App\Http\Controllers\indexController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::post('/name',[indexController::class, 'returnName']);
Route::get('/user-agent',[indexController::class, 'userAgent']);
Route::get('/message', [indexController::class, 'messageReturn']);
Route::post('/file-upload',[indexController::class, 'fileUpload']);
Route::get('/get-cookie',[indexController::class,"getCookie"]);

Route::post('/submit', function(Request $request){
     $email= $request->input('email');
     return response()->json([
        "success"=>"true",
        "message"=>"form submitted Successfully"
     ]);
});
