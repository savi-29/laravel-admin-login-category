<?php 
use App\Http\Controllers\WebController;
use App\Http\Controllers\AdminController;

// Login page
Route::get('admin_login', function () {
    return view('admin.login');
});

Route::get('admin_category', function () {
    return view('admin.category');
});

// Login submit
Route::post('admin_login', [AdminController::class, 'admin_login']);

Route::post('admin_category', [AdminController::class, 'admin_category']);



// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
});

// Home
Route::get('/', function () {
    return view('dashboard');
});


Route::get('/category_list', function () {
    return view('category_list');
});

// Home


//Route::get('/', [AdminController::class, 'index']); 
// Tour package
Route::get('/TourPackage', [WebController::class, 'TourPackage']);

// Category form page


// Insert category
Route::post('categoryInsert', [AdminController::class, 'categoryInsert']);



Route::get('category_list', [AdminController::class, 'category_list']);


Route::post('category_insert', [AdminController::class, 'categoryInsert']);

Route::get('/editcategory', [AdminController::class, 'editcategory']);

Route::get('/deleteCategory', [AdminController::class, 'deleteCategory']);