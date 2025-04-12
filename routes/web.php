<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoitureController;
use App\Http\Controllers\PointageController;



Route::get('teste',[VoitureController::class, 'index'] );
Route::get('detail',[VoitureController::class, 'show'] );
Route::get('index',[VoitureController::class, 'create'] );
Route::get('index',[VoitureController::class, 'store'] )->name('voiture.store');
Route::get('affiche',[PointageController::class, 'index'] )->name('pointage.index');
Route::get('ajout',[PointageController::class, 'create'] )->name('pointage.create');
Route::post('save',[PointageController::class, 'store'] )->name('pointage.store');

