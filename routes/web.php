<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\SalaryController;
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



Route::get('/',[UserController::class,'login'])->name('login');
Route::post('/',[UserController::class,'dologin'])->name('do.login');
Route::get('/logout',[UserController::class,'logout'])->name('logout');

Route::group(['middleware'=>'auth','prefix'=>'admin'],function(){
Route::get('/',[HomeController::class,'home'])->name('dashboard');





Route::get('/employee',[EmployeeController::class,'field'])->name('employee');
Route::get('/employee/form',[EmployeeController::class,'formcreate'])->name('employee.form');
Route::post('/employee/form/store',[EmployeeController::class,'store'])->name('form.store');
Route::get('/employee/delete/{employee_id}',[EmployeeController::class,'deleteEmployee'])->name('employee.delete');
Route::get('/employe/view/{employee_id}',[EmployeeController::class,'viewEmployee'])->name('employee.view');
Route::get('/employee/edit{employee_id}',[EmployeeController::class,'editEmployee'])->name('employee.edit');
Route::put('/employee/update{employee_id}',[EmployeeController::class,'updateEmployee'])->name('employee.update');





Route::get('/department',[DepartmentController::class,'start'])->name('department');
Route::get('/department/form',[DepartmentController::class,'formcreate'])->name('department.form');
Route::post('/department/form/store',[DepartmentController::class,'store'])->name('department.form.store');
Route::get('/department/delete/{department_id}',[DepartmentController::class,'deleteDepartment'])->name('department.delete');
Route::get('/department/view/{department_id}',[DepartmentController::class,'viewDepartment'])->name('department.view');
Route::get('/department/edit/{department_id}',[DepartmentController::class,'editDepartment'])->name('department.edit');
Route::put('/department/update{department_id}',[DepartmentController::class,'updateDepartment'])->name('department.update');



Route::get('/designation',[DesignationController::class,'startOne'])->name('designation');
Route::get('/designation/form',[DesignationController::class,'formcreate'])->name('designation.form');
Route::post('/designation/form/store',[DesignationController::class,'store'])->name('designation.form.store');
Route::get('/designation/delete/{designation_id}',[DesignationController::class,'deleteDesignation'])->name('designation.delete');
Route::get('/designation/view/{designation_id}',[DesignationController::class,'viewDesignation'])->name('designation.view');
Route::get('/designation/edit/{designation_id}',[DesignationController::class,'editDesignation'])->name('designation.edit');
Route::put('/designation/update{designation_id}',[DesignationController::class,'updateDesignation'])->name('designation.update');





Route::get('/salary',[SalaryController::class,'startNow'])->name('salary');
Route::get('/salary/form',[SalaryController::class,'formcreate'])->name('salary.form');

 














Route::get('/admin',[AdminController::class,'list'])->name('admin');
Route::get('/admin/create',[AdminController::class,'createForm']);
Route::post('/admin/employee',[AdminController::class,'createEmployee'])->name('admin.employee');


});









