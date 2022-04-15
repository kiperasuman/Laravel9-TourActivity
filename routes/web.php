<?php

use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|  Test Comment
*/
// 1- Write in route or do something in route

Route::get('/hello',function(){
    return "<h1> Hello World </h1>";
});
// 2- Call view in route
Route::get('/welcome',function (){
return view("welcome");
});

// 3- Call Controller Function

Route::get("/",[HomeController::class,'index'])->name('home');

// 4- Route -> Controller -> View
Route::get("/test1",[HomeController::class,'test'])->name('test');

// 5- Route with Parameters
Route::get('/param/{id}/{number}',[HomeController::class,'param'])->name('param');


// 6- Route with post

Route::get('/save',[HomeController::class,'save'])->name('save');



/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// *********  ADMİN PANEL  ********//
Route::get('/admin',[AdminHomeController::class,'index'])->name('index');
// *********  ADMİN CATEGORY ROUTES  ********//
Route::get('/admin/category',[AdminCategoryController::class,'index'])->name('admin_category');
Route::get('/admin/category/create',[AdminCategoryController::class,'create'])->name('admin_category_create');
Route::post('/admin/category/store',[AdminCategoryController::class,'store'])->name('admin_category_store');
Route::get('/admin/category/edit/{id}',[AdminCategoryController::class,'edit'])->name('admin_category_edit');
Route::post('/admin/category/update/{id}',[AdminCategoryController::class,'update'])->name('admin_category_update');
Route::get('/admin/category/show/{id}',[AdminCategoryController::class,'show'])->name('admin_category_show');
