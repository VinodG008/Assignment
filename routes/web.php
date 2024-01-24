<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\EmployeeController;

use App\DataTables\UsersDataTable;

use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersController;
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
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('addemp', [AuthController::class, 'addemployee'])->name('auth.addemp');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::post('empdata', [AuthController::class, 'EmpRegistration'])->name('empdata');
Route::post('user-login', [AuthController::class, 'userLogin'])->name('user.login'); 
Route::get('userlogin', [AuthController::class, 'userloginmethod'])->name('userlogin');

Route::get('employee', [AuthController::class, 'emploginmethod'])->name('employee.index');
Route::get('employee/datatables', [AuthController::class, 'datatables'])->name('employee.datatables');
    
Route::get('usersshow', [UserController::class,'index'])->name('users.indexshow');


Route::get('/emps', EmployeeController::class .'@index')->name('emps.index');

Route::get('/emps/{emp}/edit', EmployeeController::class .'@edit')->name('emps.edit');
// updates a post
Route::put('/emps/{id}', EmployeeController::class .'@update')->name('emps.update');
// deletes a post
Route::delete('/emps/{id}', EmployeeController::class .'@destroy')->name('emps.destroy');

