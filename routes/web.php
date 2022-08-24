<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontpageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\studentregistration;
use App\Http\Controllers\Controller;
use App\Http\Controllers\StudentclassController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\CourseController;

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

// fornt page route
Route::get('/', [frontpageController::class, 'frontpage']);
// fornt page route

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// admin login
Route::get('/admin/dashboard', [AdminController::class, 'admin'])->name('admin');
Route::get('/admin/login', [AdminController::class, 'adminLogin'])->name('adminLogin');
Route::post('/admin/login/submit', [AdminController::class, 'submitLogin'])->name('submitLogin');

//adminLogout
Route::get('/admin/logout', [AdminController::class, 'adminLogout'])->name('adminLogout');

// student  batch  route
Route::get('/admin/batch', [BatchController::class, 'index'])->name('ShowStudentBatch');
Route::get('/admin/batch/create', [BatchController::class, 'create'])->name('CreateStudentBatch');
Route::post('/admin/batch/store', [BatchController::class, 'store'])->name('StoreStudentBatch');

Route::get('/admin/batch/edit/{id}', [BatchController::class, 'edit'])->name('EditStudentBatch');
Route::put('/admin/batch/update/{id}', [BatchController::class, 'update'])->name('UpdateStudentBatch');
Route::get('/admin/batch/delete/{id}', [BatchController::class, 'destroy'])->name('DeleteStudentBatch');
// student  Course  route
Route::get('/admin/course', [CourseController::class, 'index'])->name('ShowStudentCourse');
Route::get('/admin/course/create', [CourseController::class, 'create'])->name('CreateStudentCourse');
Route::post('/admin/course/store', [CourseController::class, 'store'])->name('StoreStudentCourse');

Route::get('/admin/course/edit/{id}', [CourseController::class, 'edit'])->name('EditStudentCourse');
Route::put('/admin/course/update/{id}', [CourseController::class, 'update'])->name('UpdateStudentCourse');
Route::get('/admin/course/delete/{id}', [CourseController::class, 'destroy'])->name('DeleteStudentCourse');

// student  class  route
Route::get('/admin/class', [StudentclassController::class, 'index'])->name('ShowStudentClass');
Route::get('/admin/class/create', [StudentclassController::class, 'create'])->name('CreateStudentClass');
Route::post('/admin/class/store', [StudentclassController::class, 'store'])->name('StoreStudentClass');

Route::get('/admin/class/edit/{id}', [StudentclassController::class, 'edit'])->name('EditStudentClass');
Route::put('/admin/class/update/{id}', [StudentclassController::class, 'update'])->name('UpdateStudentClass');
Route::get('/admin/class/delete/{id}', [StudentclassController::class, 'destroy'])->name('DeleteStudentClass');

// student class Section  route

Route::get('/admin/section', [SectionController::class, 'index'])->name('ShowStudentSection');
Route::get('/admin/section/create', [SectionController::class, 'create'])->name('CreateStudentSection');
Route::post('/admin/section/store', [SectionController::class, 'store'])->name('StoreStudentSection');

Route::get('/admin/section/edit/{id}', [SectionController::class, 'edit'])->name('EditStudentSection');
Route::put('/admin/section/update/{id}', [SectionController::class, 'update'])->name('UpdateStudentSection');
Route::get('/admin/section/delete/{id}', [SectionController::class, 'destroy'])->name('DeleteStudentSection');

// admin student registration

Route::get('/admin/studentregister', [studentregistration::class, 'registerStudent'])->name('adminStudent');
Route::get('/admin/studentregister/profile/{id}', [studentregistration::class, 'registerStudentProfile'])->name('adminStudentProfile');

Route::get('/admin/studentregister/edit/{id}', [Controller::class, 'editStudent'])->name('adminStudentEdit');
Route::post('/admin/studentregister/update/{id}', [Controller::class, 'UpdateStudent'])->name('UpdateStudent');

Route::get('/admin/studentregister/delete/{id}', [Controller::class, 'deleteStudent'])->name('adminStudenDelete');

// অ্যাড ডাটা নিন্ধন থেকে
Route::get('/student/register', [Controller::class, 'student'])->name('student');
Route::post('/getSection', [Controller::class,'getSection']);
Route::post('/studentregister', [Controller::class,'studentRegistration'])->name('studentReg');

// PDF Download with dumpPDF
Route::get('/admin/studentpdf/{id}', [studentregistration::class,'mpdf'])->name('studentPdf');

// PDF Download with dumpPDF
Route::get('/admin/studentpdfprofile/{id}', [studentregistration::class,'mpdf'])->name('studentPdf');

