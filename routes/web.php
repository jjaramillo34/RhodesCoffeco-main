<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontPageController;
use App\Http\Controllers\SubscribersController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [FrontPageController::class, 'welcome']);
Route::get('/our-story', [FrontPageController::class, 'ourStory']);
Route::get('faqs', [FrontPageController::class, 'faqs']);
Route::get('contact', [FrontPageController::class, 'contact']);
Route::post('contact', [ContactController::class, 'store']);
Route::post('/subscribe', [SubscribersController::class, 'store']);
Route::get('/blogs', [FrontPageController::class, 'blogs'])->name('blogs');
Route::get('/menu', [FrontPageController::class, 'menu']);
Route::get('/gallery', function () {
    return Inertia::render('FrontPages/Gallery');
})->name('gallery');
Route::get('/quote-submitted', [FrontPageController::class, 'quoteSubmitted'])->name('quote.submitted');
