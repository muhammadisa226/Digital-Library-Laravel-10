<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminBookController;
use App\Models\Book;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// auth login register route

Route::get('/', function(){
    return view('auth.login',[
        "title" => 'Login'
    ]);
})->middleware('guest')->name('login');
Route::get('/register',function(){
    return view('auth.register',[
        "title" => 'Register'
    ]);
})->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

// admin dashboard routing
Route::prefix('/dashboard/admin')->middleware('admin')->group(
    function(){
        Route::get('/', function(){
            return view('dashboard.admin.index',[
                "title" => 'Dashboard',
                "countBook" => Book::count(),
                "countCategory" => Category::count()
            ]);});
        Route::resource('/books', AdminBookController::class,[
            "names" => [
                'index' => 'admin.books.index',
                'store' => 'admin.books.store',
                'create' => 'admin.books.create',
                'show' => 'admin.books.show',
                'edit' => 'admin.books.edit',
                'update' => 'admin.books.update',
                'destroy' => 'admin.books.destroy',
            ]
        ]);
        Route::resource('categories', AdminCategoryController::class);
        Route::get('/exportpdf',[AdminBookController::class, 'exportpdf'])->name('admin.exportpdf');
        Route::get('/exportexcel',[AdminBookController::class, 'exportexcel'])->name('admin.exportexcel');
    });
// user dashboard routing
Route::prefix('/dashboard/user')->middleware('auth')->group(
    function(){
        Route::get('/', function(){
            return view('dashboard.user.index',[
                "title" => 'Dashboard',
                "countBook" => Book::where('user_id', auth()->user()->id)->count()
            ]);})->middleware('auth');

        Route::resource('/books', BookController::class,[
            "names" => [
                'index' => 'user.books.index',
                'store' => 'user.books.store',
                'create' => 'user.books.create',
                'show' => 'user.books.show',
                'edit' => 'user.books.edit',
                'update' => 'user.books.update',
                'destroy' => 'user.books.destroy',
            ]
        ]);
        Route::get('/exportpdf',[BookController::class, 'exportpdf'])->name('user.exportpdf');
        Route::get('/exportexcel',[BookController::class, 'exportexcel'])->name('user.exportexcel');
    });

Route::get('/dashboard/profile',function(){
        return view('dashboard.profile',[
            "title" => 'My Profile',
        ]);
    })->middleware('auth');
