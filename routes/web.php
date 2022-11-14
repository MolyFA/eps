<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;





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

Route::get('/login',[UserController::class,'login'])->name('login');
Route::post('/do-login',[UserController::class,'dologin'])->name('do.login');



Route::group(['middleware'=>'auth'],function(){

Route::get('/',[HomeController::class,'home'])->name('dashboard');

Route::get('/employee',[EmployeeController::class,'field']);
Route::get('/employee/form',[EmployeeController::class,'formcreate']);

Route::get('/admin',[AdminController::class,'list'])->name('admin');
Route::get('/admin/create',[AdminController::class,'createForm']);
Route::post('/admin/employee',[AdminController::class,'createEmployee'])->name('admin.employee');


});









