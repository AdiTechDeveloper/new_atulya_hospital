<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\GalleryController as AdminGalleryController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Website\GalleryController as WebsiteGalleryController;
use App\Http\Controllers\Website\DepartmentController;
use App\Http\Controllers\Website\FacilityController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\VideoController as WebsiteVideoController;


/*
|--------------------------------------------------------------------------
| Website Routes
|--------------------------------------------------------------------------
*/

// Home
Route::get('/', [HomeController::class, 'index'])
    ->name('home');


// About
Route::get('/about', function () {
    return view('website.pages.about');
})->name('about');


// Contact
Route::get('/contact', function () {
    return view('website.pages.contact');
})->name('contact');


Route::get('/videos', [WebsiteVideoController::class, 'index'])
    ->name('videos.index');


// Gallery - Public Website
Route::get('/gallery', [WebsiteGalleryController::class, 'publicIndex'])
    ->name('gallery.index');


// ICU
Route::get('/icu', function () {
    return view('website.pages.icu');
})->name('icu');


// Departments
Route::get('/departments', function () {
    return view('website.pages.show');
})->name('departments.index');

Route::get('/departments/{slug}', [DepartmentController::class, 'show'])
    ->name('departments.show');


// Facilities
Route::get('/facilities/{slug}', [FacilityController::class, 'show'])
    ->name('facilities.show');


// Blog
Route::get('/blog', function () {
    return view('website.pages.blog');
})->name('blog');


// Doctors
Route::get('/doctors', [DoctorController::class, 'index'])
    ->name('doctors.index');

Route::get('/doctors/{slug}', [DoctorController::class, 'show'])
    ->name('doctors.show');


/*
|--------------------------------------------------------------------------
| Admin Authentication Routes
|--------------------------------------------------------------------------
*/

// Admin Login Page
Route::get('/admin/login', [AuthController::class, 'showLogin'])
    ->middleware('guest')
    ->name('admin.login');


// Admin Login
Route::post('/admin/login', [AuthController::class, 'login'])
    ->middleware('guest')
    ->name('admin.login.submit');


// Admin Logout
Route::post('/admin/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('admin.logout');


/*
|--------------------------------------------------------------------------
| Admin Protected Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth')
    ->prefix('admin')
    ->group(function () {

        /*
        |--------------------------------------------------------------------------
        | Dashboard
        |--------------------------------------------------------------------------
        */

        Route::get('/dashboard', function () {
            return view('admin.index');
        })->name('admin.dashboard');


        /*
        |--------------------------------------------------------------------------
        | Videos
        |--------------------------------------------------------------------------
        */

         Route::get('/videos', [VideoController::class, 'index'])
    ->name('admin.videos.index');

Route::get('/videos/create', [VideoController::class, 'create'])
    ->name('admin.videos.create');

Route::post('/videos', [VideoController::class, 'store'])
    ->name('admin.videos.store');

Route::get('/videos/{video}/edit', [VideoController::class, 'edit'])
    ->name('admin.videos.edit');

Route::put('/videos/{video}', [VideoController::class, 'update'])
    ->name('admin.videos.update');

Route::delete('/videos/{video}', [VideoController::class, 'destroy'])
    ->name('admin.videos.destroy');

Route::patch('/videos/{video}/status', [VideoController::class, 'toggleStatus'])
    ->name('admin.videos.status');
    


        /*
        |--------------------------------------------------------------------------
        | Gallery
        |--------------------------------------------------------------------------
        */

        // Gallery List
        Route::get('/galleries', [AdminGalleryController::class, 'index'])
            ->name('admin.gallery.index');

        // Create Gallery Form
        Route::get('/galleries/create', [AdminGalleryController::class, 'create'])
            ->name('admin.gallery.create');

        // Store Gallery
        Route::post('/galleries', [AdminGalleryController::class, 'store'])
            ->name('admin.gallery.store');

        // Edit Gallery Form
        Route::get('/galleries/{gallery}/edit', [AdminGalleryController::class, 'edit'])
            ->name('admin.gallery.edit');

        // Update Gallery
        Route::put('/galleries/{gallery}', [AdminGalleryController::class, 'update'])
            ->name('admin.gallery.update');

        // Delete Gallery
        Route::delete('/galleries/{gallery}', [AdminGalleryController::class, 'destroy'])
            ->name('admin.gallery.destroy');

        // Toggle Gallery Status
        Route::patch('/galleries/{gallery}/status', [AdminGalleryController::class, 'toggleStatus'])
            ->name('admin.gallery.status');
    });


/*
|--------------------------------------------------------------------------
| Fallback Route
|--------------------------------------------------------------------------
*/

Route::fallback(function () {
    return redirect('/');
});