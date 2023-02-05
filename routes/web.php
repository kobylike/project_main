<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\registered_UserController;
use App\Http\Controllers\Admin\PermissionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//welcome
Route::get('/',[WelcomeController::class,'index'])->name('/.index');


//Admin
    Route::get('/admin', function () {
    return view('Pages.admin.index');
    })->middleware(['auth', 'verified','role:admin'])->name('admin.index');

    Route::middleware(['auth', 'verified','role:admin'])->name('admin ')->prefix('/admin')->group(function () {
    // Route::get('/',[IndexController::class,'index'])->name('admin.index');
    Route::get('blog/create',[BlogController::class,'create'])->name('blog.create');
    Route::post('blog/store',[BlogController::class,'store'])->name('blog.store');
    Route::get('blog/{post}/delete',[BlogController::class,'destroy'])->name('blog.delete');
    Route::get('blog/{post}/edit',[BlogController::class,'edit'])->name('blog.edit');
    Route::post('blog/update',[BlogController::class,'update'])->name('blog.update');

        //Category
    Route::get('category/create',[CategoryController::class,'create'])->name('category.create');
    Route::get('category',[CategoryController::class,'index'])->name('category.index');
    Route::post('category/store',[CategoryController::class,'store'])->name('category.store');
    Route::get('category/{category}/delete',[CategoryController::class,'destroy'])->name('category.delete');
    Route::get('category/{category}/edit',[CategoryController::class,'edit'])->name('category.edit');
    Route::post('category/update',[CategoryController::class,'update'])->name('category.update');

        //roles
    Route::resource('/roles',RoleController::class);
    Route::get('/roles/{role}/delete',[RoleController::class,'destroy'])->name('role.delete');

    //permissions
    Route::resource('/permissions',PermissionController::class);
    Route::get('/permissions/{permission}/delete',[PermissionController::class,'destroy'])->name('permission.delete');
});


//Blog global
Route::get('blog',[BlogController::class,'index'])->name('blog.index');
Route::get('blog/{post:slug}',[BlogController::class,'show'])->name('blog.show');





//Comment global
Route::post('comment/store',[CommentController::class,'store'])->name('comment.store');
Route::get('comment/{comment}/delete',[CommentController::class,'destroy'])->name('comment.delete');
Route::get('comment/{comment}/edit',[CommentController::class,'edit'])->name('comment.edit');


//registered user
Route::prefix('registered-user')->group(function (){
Route::get('/register',[registered_UserController::class,'register'])->name('registeredUser.register');
Route::post('/store',[registered_UserController::class,'store'])->name('registeredUser.store');
Route::get('/login',[registered_UserController::class,'signin'])->name('registeredUser.login');
Route::post('/signin',[registered_UserController::class,'login'])->name('registeredUser.signin');
Route::get('/dashboard',[registered_UserController::class,'dashboard'])->name('registeredUser.dashboard')->middleware('register_User');

Route::get('/logout',[registered_UserController::class,'logout'])->
        name('registeredUser.logout')->middleware('register_User');
});






//normal user
Route::get('/dashboard', function () {
    return view('Pages.registeredUsers.index');
})->middleware(['auth', 'verified'])->name('dashboard');






Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
