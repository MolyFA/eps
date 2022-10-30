<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;



use Illuminate\Support\Facades\Route;

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


Route::get('/',[HomeController::class,'home']);
Route::get('/employee',[EmployeeController::class,'field']);
Route::get('/employee/form',[EmployeeController::class,'formcreate']);
Route::get('/about',[HomeController::class,'aboutus']);
Route::get('/admin',[AdminController::class,'list']);
Route::get('/admin/create',[AdminController::class,'createForm']);






