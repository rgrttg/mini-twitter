<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TweetController;

Route::get("/test-me", function () {
    return 'Hallo vom Laravel Backend!';
});

// Für alle Tweets
Route::get('/all', [TweetController::class, 'all']);

// Für einen neuen Tweet
Route::post('/new', [TweetController::class, 'store']);



// Für einen einzelnen Tweet
// eventuell wird noch eine id gebraucht
Route::get('/tweet/{id}', [TweetController::class, 'show']);

// Um einen Tweet zu edieren
// eventuell wird auch hier noch eine id gebraucht
Route::get('/edit', [TweetController::class, 'edit']);

