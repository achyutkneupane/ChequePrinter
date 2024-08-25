<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\HomePage::class);
Route::view('/cheque', 'cheque', [
    'amount_num' => 1040128.54,
    'payee' => 'Achyut Neupane',
    'show_crossing' => true,
    'date' => '1997-09-28'
]);
