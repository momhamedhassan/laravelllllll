<?php

use App\Http\Controllers\Api\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\CustomerController;
use App\Http\Controllers\Api\ThirdPartyController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace'=>'Api'],function(){
    //Done 
    Route::any('/contact'      ,'LoginController@contact')->middleware('CheckUser');
    //Done
    Route::any('/login'        ,'LoginController@login');
    //Done 
    Route::any('/get_rtc_token','AccessTokenController@get_rtc_token');
    //not Done
    Route::any('/send_notice'  ,'LoginController@send_notice')->middleware('CheckUser');
    //Done
    Route::any('/bind_fcmtoken','LoginController@bind_fcmtoken')->middleware('CheckUser');
    Route::any('/getData','LoginController@getAlldata');
   
   // Route::any('/list','Members@dbOperations');
});

Route::get('/get-api',[\App\Http\Controllers\Api\ThirdPartyController::class,'index']);
// Route::controller(LoginController::class)->group(function(){
// Route::get('/login','get_user');
// });

Route::group(['prefix'=> 'v1'],function(){
    
    Route::apiResource('customers',CustomerController::class);
    Route::apiResource('invoices',InvoiceController::class);
});