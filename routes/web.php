<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\EspecialidadeController;

    Route::resource('especialidades', EspecialidadeController::class)->except(['show']);
	Route::get('/especialidades/create', [EspecialidadeController::class, 'create'])->name('especialidades.create');
	Route::post('/especialidades', [EspecialidadeController::class, 'store'])->name('especialidades.store');
	Route::get('/especialidades/data', [EspecialidadeController::class, 'getData'])->name('especialidades.data');
	Route::put('/especialidades/{id}', [EspecialidadeController::class, 'update'])->name('especialidades.update');
	Route::get('/especialidades/search', [EspecialidadeController::class, 'search'])->name('especialidades.search');
