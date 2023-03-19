<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\LeaveTypeController;
use App\Http\Controllers\LeaveApplyController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SslCommerzPaymentController;
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







Route::get('/employe/view/{employee_id}',[EmployeeController::class,'viewEmployee'])->name('employee.view');


Route::group(["middleware"=>["checkAdmin"]],function(){

Route::get('/employee/form',[EmployeeController::class,'formcreate'])->name('employee.form');
Route::post('/employee/form/store',[EmployeeController::class,'store'])->name('form.store');
Route::get('/employee/delete/{employee_id}',[EmployeeController::class,'deleteEmployee'])->name('employee.delete');

Route::get('/employee/edit{employee_id}',[EmployeeController::class,'editEmployee'])->name('employee.edit');
Route::put('/employee/update{employee_id}',[EmployeeController::class,'updateEmployee'])->name('employee.update');




Route::get('/department/form',[DepartmentController::class,'formcreate'])->name('department.form');
Route::post('/department/form/store',[DepartmentController::class,'store'])->name('department.form.store');
Route::get('/department/delete/{department_id}',[DepartmentController::class,'deleteDepartment'])->name('department.delete');
Route::get('/department/view/{department_id}',[DepartmentController::class,'viewDepartment'])->name('department.view');
Route::get('/department/edit/{department_id}',[DepartmentController::class,'editDepartment'])->name('department.edit');
Route::put('/department/update{department_id}',[DepartmentController::class,'updateDepartment'])->name('department.update');


Route::get('/designation/form',[DesignationController::class,'formcreate'])->name('designation.form');
Route::post('/designation/form/store',[DesignationController::class,'store'])->name('designation.form.store');
Route::get('/designation/delete/{designation_id}',[DesignationController::class,'deleteDesignation'])->name('designation.delete');
Route::get('/designation/view/{designation_id}',[DesignationController::class,'viewDesignation'])->name('designation.view');
Route::get('/designation/edit/{designation_id}',[DesignationController::class,'editDesignation'])->name('designation.edit');
Route::put('/designation/update{designation_id}',[DesignationController::class,'updateDesignation'])->name('designation.update');


Route::get('/salary/form',[SalaryController::class,'formcreate'])->name('salary.form');
Route::post('/salary/form/store',[SalaryController::class,'store'])->name('salary.form.store');
Route::get('/salary/delete/{salary_id}',[SalaryController::class,'deleteSalary'])->name('salary.delete');
Route::get('/salary/view/{salary_id}',[SalaryController::class,'viewSalary'])->name('salary.view');
Route::get('/salary/edit/{salary_id}',[SalaryController::class,'editSalary'])->name('salary.edit');
Route::put('/salary/update{salary_id}',[SalaryController::class,'updateSalary'])->name('salary.update');


Route::get('/leaveapply/form',[LeaveApplyController::class,'formcreate'])->name('leaveapply.form');
Route::post('/leaveapply/form/store',[LeaveApplyController::class,'store'])->name('leaveapply.form.store');





Route::get("/user", [UserController::class,"start"])->name("user.list");
Route::get("/user/create", [UserController::class,"create"])->name("user.create");
Route::post("/user/store", [UserController::class,"store"])->name("user.store");
Route::get('/user/delete/{user_id}',[UserController::class,'deleteUser'])->name('user.delete');
Route::get('/user/view/{user_id}',[UserController::class,'viewUser'])->name('user.view');


Route::get('/leavetype',[LeaveTypeController::class,'start'])->name('leavetype');
Route::get('/leavetype/form',[LeaveTypeController::class,'formcreate'])->name('leavetype.form');
Route::post('/leavetype/form/store',[LeaveTypeController::class,'store'])->name('leavetype.form.store');
Route::get('/leavetype/delete/{leavetype_id}',[LeaveTypeController::class,'deleteLeavetype'])->name('leavetype.delete');
Route::get('/leavetype/view/{leavetype_id}',[LeaveTypeController::class,'viewleavetype'])->name('leavetype.view');
Route::get('/leavetype/edit/{leavetype_id}',[LeaveTypeController::class,'editleavetype'])->name('leavetype.edit');
Route::put('/leavetype/update{leavetype_id}',[LeaveTypeController::class,'updateleavetype'])->name('leavetype.update');


Route::get("/role", [RoleController::class,"start"])->name("role.list");
Route::get("/role/create", [RoleController::class,"create"])->name("role.create");
Route::post("/role/store", [RoleController::class,"store"])->name("role.store");
Route::get('/role/delete/{role_id}',[RoleController::class,'deleteRole'])->name('role.delete');
Route::get('/role/view/{role_id}',[RoleController::class,'viewRole'])->name('role.view');
Route::get('/role/edit/{role_id}',[RoleController::class,'editRole'])->name('role.edit');
Route::put('/role/update{role_id}',[RoleController::class,'updateRole'])->name('role.update');


});

Route::group(["middleware"=>["checkManager"]],function(){
Route::get('/department',[DepartmentController::class,'start'])->name('department');
Route::get('/employee',[EmployeeController::class,'field'])->name('employee');
Route::get('/designation',[DesignationController::class,'startOne'])->name('designation');
Route::get('/salary',[SalaryController::class,'startNow'])->name('salary');
Route::get('/leaveapply',[leaveApplyController::class,'start'])->name('leaveapply');
Route::get('/leaveapply/approve/{leaveapply_id}',[LeaveApplyController::class,'approve'])->name('leaveapply.approve');
Route::get('/leaveapply/reject/{leaveapply_id}',[LeaveApplyController::class,'reject'])->name('leaveapply.reject');

});





Route::get('/leave',[LeaveController::class,'start'])->name('leave');
Route::get('/leave/form',[LeaveController::class,'formcreate'])->name('leave.form');
Route::post('/leave/form/store',[LeaveController::class,'store'])->name('leave.form.store');
Route::get('/leave/delete/{leave_id}',[LeaveController::class,'deleteLeave'])->name('leave.delete');
Route::get('/leave/view/{leave_id}',[LeaveController::class,'viewleave'])->name('leave.view');
Route::get('/leave/edit/{leave_id}',[LeaveController::class,'editleave'])->name('leave.edit');
Route::put('/leave/update{leave_id}',[LeaveController::class,'updateleave'])->name('leave.update');










Route::get('/attendance',[AttendanceController::class,'start'])->name('attendance');
Route::get('/attendance/check',[AttendanceController::class,'checkAttendance'])->name('attendance.check');
Route::get('/attendance/check-out',[AttendanceController::class,'checkoutAttendance'])->name('attendance.check-out');




Route::get('/payment',[PaymentController::class,'start'])->name('payment');
Route::get('/payment/list',[PaymentController::class,'list'])->name('payment.list');
Route::post('/payment/form/store',[PaymentController::class,'store'])->name('payment.form.store');



// SSLCOMMERZ Start

Route::post('/pay/{id}', [SslCommerzPaymentController::class, 'index'])->name("pay.now");


//SSLCOMMERZ END




Route::get('/report',[ReportController::class,'start'])->name('report');
Route::get("/report/search",[ReportController::class,"search"])->name("attendance.report.search");





























//Route::get('/admin',[AdminController::class,'list'])->name('admin');
//Route::get('/admin/create',[AdminController::class,'createForm']);
//Route::post('/admin/employee',[AdminController::class,'createEmployee'])->name('admin.employee');


});




Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);




