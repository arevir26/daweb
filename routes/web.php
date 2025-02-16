<?php

use App\Http\Controllers\MarketinfoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/market', [MarketinfoController::class, 'index'])->name('market');
Route::get('/market/create',[MarketinfoController::class, 'create'] )->name('market.createnew');
Route::post('/market/create',[MarketinfoController::class, 'store'] )->name('market.create');
Route::get('/market/{marketinfo?}',[MarketinfoController::class, 'show'] )->name('market.show');
Route::get('/market/{marketinfo?}/update',[MarketinfoController::class, 'edit'] );
Route::post('/market/{marketinfo?}/update',[MarketinfoController::class, 'update'] );
Route::get('/market/{marketinfo?}/remove',[MarketinfoController::class, 'destroy'] );
