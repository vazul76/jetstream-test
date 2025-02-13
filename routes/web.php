<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Post; // Import the Livewire Post component

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/post', Post::class)->name('post'); // Use Livewire component for the post route
});
