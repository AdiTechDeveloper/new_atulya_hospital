<?php 
use App\Http\Controllers\Admin\GalleryController;
use Illuminate\Support\Facades\Route;

Route::apiResource('galleries', GalleryController::class);

Route::get('/gallery', [GalleryController::class, 'index']);
