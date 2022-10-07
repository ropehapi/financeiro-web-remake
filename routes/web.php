<?php

use Illuminate\Support\Facades\Route;

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

Route::get("/", function () {
    return view("welcome");
});

Route::get("/wallets", "WalletController@index")->name("wallets");
Route::get("/wallet/{id}","WalletController@show")->name("showWallet");
Route::get("/wallet","WalletController@create")->name("createWallet");
Route::post("/wallet","WalletController@store")->name("storeWallet");
Route::get("/wallet/{id}","WalletController@edit")->name("editWallet");
Route::put("/wallet/{id}","WalletController@update")->name("updateWallet");
Route::delete("/wallet/{id}","WalletController@destroy")->name("destroyWallet");
