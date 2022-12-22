<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Student\studentHomeComponent;
use App\Http\Livewire\Student\studentContactComponent;
use App\Http\Livewire\Student\studentAdmissionComponent;
use App\Http\Livewire\Student\aboutUsComponent;
use App\Http\Livewire\Student\whyUsComponent;
use App\Http\Livewire\Student\studentLoginComponent;
use App\Http\Livewire\Student\registerComponent;
use App\Http\Livewire\Student\studentProfileComponent;
use App\Http\Livewire\Student\studentPersonalInfoComponent;
use App\Http\Livewire\Student\studentRoutinComponent;
use App\Http\Livewire\student\studentListComponent;
use App\Http\Livewire\student\studentAttendanceComponent;


use App\Http\Livewire\admin\adminLoginComponent;
use App\Http\Livewire\admin\adminProfileComponent;
use App\Http\Livewire\admin\sAndTComponent;
use App\Http\Livewire\admin\classTeacherComponent;
use App\Http\Livewire\admin\subjectComponent;
use App\Http\Livewire\admin\subjectListComponent;
use App\Http\Livewire\admin\paymentSetComponent;
use App\Http\Livewire\admin\setStudentPaymentCompoonent;



use App\Http\Livewire\teacher\teacherProfileComponent;
use App\Http\Livewire\teacher\teacherListComponent;
use App\Http\Livewire\teacher\teacherPersonanInfoComponent;
use App\Http\Livewire\teacher\classTeacherListComponent;
use App\Http\Livewire\teacher\teacherAttendanceComponent;
use App\Http\Livewire\teacher\approveTeacherAttendance;


use App\Http\Livewire\notVerifiedComponent;



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
/* ....................Student..................*/

Route::get('/',studentHomeComponent::class);
Route::get('/contact-us',studentContactComponent::class);
Route::get('/student-admission',studentAdmissionComponent::class);
Route::get('/about-us',aboutUsComponent::class);
Route::get('/why-us',whyUsComponent::class);
Route::get('/student-login',studentLoginComponent::class);
Route::get('/register',registerComponent::class);
Route::get('/student-profile',studentProfileComponent::class)->middleware('checkStudent');
Route::get('/student-personal-information',studentPersonalInfoComponent::class);
Route::get('/student-routin',studentRoutinComponent::class);
Route::get('/sudent-attendance',studentAttendanceComponent::class);


/*...................admin....................*/

Route::get('/admin-login',adminLoginComponent::class);
Route::get('/admin-profile',adminProfileComponent::class);
Route::get('/list-of-user',sAndTComponent::class);
Route::get('/student-list',studentListComponent::class);
Route::get('/assign-class-teacher',classTeacherComponent::class);
Route::get('/subject-list',subjectListComponent::class);
Route::get('/set-payment',paymentSetComponent::class);
Route::get('/set-student-payment',setStudentPaymentCompoonent::class);



/*..................Teacher......................*/

Route::get('/teacher-profile',teacherProfileComponent::class)->middleware('checkTeacher');
Route::get('/teacher-personal-information',teacherPersonanInfoComponent::class);
Route::get('/teacher-list',teacherListComponent::class);
Route::get('/class-teacher-list',classTeacherListComponent::class);
Route::get('/add-subject',subjectComponent::class);
Route::get('/teacher-attendance',teacherAttendanceComponent::class);
Route::get('/approve-teacher-attendance',approveTeacherAttendance::class);



/*....................Common........................*/

Route::get('/not-verified-component',notVerifiedComponent::class);
