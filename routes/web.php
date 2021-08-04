<?php

use App\Http\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::get('register', Register::class);
