<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\DepartmentController as AdminDepartmentController;
use App\Http\Controllers\Admin\DoctorAdminController;
use App\Http\Controllers\Admin\FacilityController;
use App\Http\Controllers\Admin\GalleryController as AdminGalleryController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\VideoController;

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Website\BlogController as WebsiteBlogController;
use App\Http\Controllers\Website\DepartmentController;
use App\Http\Controllers\Website\FacilityController as WebsiteFacilityController;
use App\Http\Controllers\Website\GalleryController as WebsiteGalleryController;
use App\Http\Controllers\Website\VideoController as WebsiteVideoController;


// ==================== Website Routes ====================

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

// Videos
Route::get('/videos', [WebsiteVideoController::class, 'index'])
    ->name('videos.index');

// Gallery
Route::get('/gallery', [WebsiteGalleryController::class, 'publicIndex'])
    ->name('gallery.index');

// ICU
Route::get('/icu', function () {
    return view('website.pages.icu');
})->name('icu');

// Departments

Route::get('/departments/{slug?}', [DepartmentController::class, 'show'])
    ->name('departments.show');

// Facilities
Route::get('/facilities/{slug?}', [WebsiteFacilityController::class, 'show'])
    ->name('facilities.show');

// Blog
Route::get('/blog', [WebsiteBlogController::class, 'index'])
    ->name('blog');

Route::get('/blog/{slug}', [WebsiteBlogController::class, 'show'])
    ->name('blog.show');

// Doctors
Route::get('/doctors', [DoctorController::class, 'index'])
    ->name('doctors.index');

Route::get('/doctors/{slug}', [DoctorController::class, 'show'])
    ->name('doctors.show');


// ==================== Admin Authentication ====================

// Admin Login
Route::get('/admin/login', [AuthController::class, 'showLogin'])
    ->middleware('guest')
    ->name('admin.login');

Route::post('/admin/login', [AuthController::class, 'login'])
    ->middleware('guest')
    ->name('admin.login.submit');

// Admin Logout
Route::post('/admin/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('admin.logout');


// ==================== Admin Protected Routes ====================

Route::middleware('auth')
    ->prefix('admin')
    ->group(function () {

        // Dashboard
        Route::get('/dashboard', function () {
            return view('admin.index');
        })->name('admin.dashboard');


        // Videos
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


        // Gallery
        Route::get('/galleries', [AdminGalleryController::class, 'index'])
            ->name('admin.gallery.index');

        Route::get('/galleries/create', [AdminGalleryController::class, 'create'])
            ->name('admin.gallery.create');

        Route::post('/galleries', [AdminGalleryController::class, 'store'])
            ->name('admin.gallery.store');

        Route::get('/galleries/{gallery}/edit', [AdminGalleryController::class, 'edit'])
            ->name('admin.gallery.edit');

        Route::put('/galleries/{gallery}', [AdminGalleryController::class, 'update'])
            ->name('admin.gallery.update');

        Route::delete('/galleries/{gallery}', [AdminGalleryController::class, 'destroy'])
            ->name('admin.gallery.destroy');

        Route::patch('/galleries/{gallery}/status', [AdminGalleryController::class, 'toggleStatus'])
            ->name('admin.gallery.status');


        // Doctors
        Route::get('/doctors', [DoctorAdminController::class, 'index'])
            ->name('admin.doctors.index');

        Route::get('/doctors/create', [DoctorAdminController::class, 'create'])
            ->name('admin.doctors.create');

        Route::post('/doctors', [DoctorAdminController::class, 'store'])
            ->name('admin.doctors.store');

        Route::get('/doctors/{doctor}/edit', [DoctorAdminController::class, 'edit'])
            ->name('admin.doctors.edit');

        Route::put('/doctors/{doctor}', [DoctorAdminController::class, 'update'])
            ->name('admin.doctors.update');

        Route::delete('/doctors/{doctor}', [DoctorAdminController::class, 'destroy'])
            ->name('admin.doctors.destroy');

        Route::patch('/doctors/{doctor}/status', [DoctorAdminController::class, 'toggleStatus'])
            ->name('admin.doctors.status');


        // Facilities
        Route::get('/facilities', [FacilityController::class, 'index'])
            ->name('admin.facilities.index');

        Route::get('/facilities/create', [FacilityController::class, 'create'])
            ->name('admin.facilities.create');

        Route::post('/facilities', [FacilityController::class, 'store'])
            ->name('admin.facilities.store');

        Route::get('/facilities/{facility}/edit', [FacilityController::class, 'edit'])
            ->name('admin.facilities.edit');

        Route::put('/facilities/{facility}', [FacilityController::class, 'update'])
            ->name('admin.facilities.update');

        Route::delete('/facilities/{facility}', [FacilityController::class, 'destroy'])
            ->name('admin.facilities.destroy');

        Route::patch('/facilities/{facility}/status', [FacilityController::class, 'toggleStatus'])
            ->name('admin.facilities.status');


        // Blogs
        Route::get('/blogs', [BlogController::class, 'index'])
            ->name('admin.blogs.index');

        Route::get('/blogs/create', [BlogController::class, 'create'])
            ->name('admin.blogs.create');

        Route::post('/blogs', [BlogController::class, 'store'])
            ->name('admin.blogs.store');

        Route::get('/blogs/{blog}/edit', [BlogController::class, 'edit'])
            ->name('admin.blogs.edit');

        Route::put('/blogs/{blog}', [BlogController::class, 'update'])
            ->name('admin.blogs.update');

        Route::delete('/blogs/{blog}', [BlogController::class, 'destroy'])
            ->name('admin.blogs.destroy');

        Route::patch('/blogs/{blog}/status', [BlogController::class, 'toggleStatus'])
            ->name('admin.blogs.status');

        Route::patch('/blogs/{blog}/featured', [BlogController::class, 'toggleFeatured'])
            ->name('admin.blogs.featured');

        // Settings
        Route::get('/settings', [SettingController::class, 'index'])
            ->name('admin.settings.index');

        Route::put('/settings', [SettingController::class, 'update'])
            ->name('admin.settings.update');

        // Departments
        Route::get('/departments', [AdminDepartmentController::class, 'index'])
            ->name('admin.departments.index');

        Route::get('/departments/create', [AdminDepartmentController::class, 'create'])
            ->name('admin.departments.create');

        Route::post('/departments', [AdminDepartmentController::class, 'store'])
            ->name('admin.departments.store');

        Route::get('/departments/{department}/edit', [AdminDepartmentController::class, 'edit'])
            ->name('admin.departments.edit');

        Route::put('/departments/{department}', [AdminDepartmentController::class, 'update'])
            ->name('admin.departments.update');

        Route::delete('/departments/{department}', [AdminDepartmentController::class, 'destroy'])
            ->name('admin.departments.destroy');

        Route::patch('/departments/{department}/status', [AdminDepartmentController::class, 'toggleStatus'])
            ->name('admin.departments.status');
    });


// Fallback
Route::fallback(function () {
    return redirect('/');
});
