<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;





use Illuminate\Support\Facades\Route;
use League\Flysystem\UrlGeneration\PrefixPublicUrlGenerator;

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
Route::get('/logout',[UserController::class,'logout'])->name('logout');



Route::group(['middleware'=>'auth'],function(){

Route::get('/',[HomeController::class,'home'])->name('dashboard');




Route::get('/employee',[EmployeeController::class,'field'])->name('employee');
Route::get('/employee/form',[EmployeeController::class,'formcreate'])->name('employee.form');
Route::post('/employee/form/store',[EmployeeController::class,'store'])->name('form.store');
Route::get('/employee/delete/{employee_id}',[EmployeeController::class,'deleteEmployee'])->name('employee.delete');
Route::get('/employe/view/{employee_id}',[EmployeeController::class,'viewEmployee'])->name('employee.view');
Route::get('/employee/edit{employee_id}',[EmployeeController::class,'editEmployee'])->name('employee.edit');
Route::put('/employee/update{employee_id}',[EmployeeController::class,'updateEmployee'])->name('employee.update');







Route::get('/admin',[AdminController::class,'list'])->name('admin');
Route::get('/admin/create',[AdminController::class,'createForm']);
Route::post('/admin/employee',[AdminController::class,'createEmployee'])->name('admin.employee');


});









