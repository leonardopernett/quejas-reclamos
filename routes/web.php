<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\PeticionController;

Route::redirect('/','/quejas-reclamos');

Route::get('/quejas-reclamos', [PeticionController::class, 'create'] )
       ->name('quejas');

/* contactos quejas y reclamos */
Route::post('/contact',[ PeticionController::class, 'store' ])
       ->name('contact');

Route::post('/tipologia/all', [ PeticionController::class, 'tipologia'])
      ->name('tipologia');

Route::view('mail','web.mail.message');