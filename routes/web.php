<?php

//Backend
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthenticationController as auth;
use App\Http\Controllers\Backend\UserController as user;
use App\Http\Controllers\Backend\RoleController as role;
use App\Http\Controllers\Backend\DashboardController as dashboard;
use App\Http\Controllers\Backend\PermissionController as permission;
use App\Http\Controllers\Backend\JobNatureController;
use App\Http\Controllers\Backend\JobCategoryController;
use App\Http\Controllers\Backend\JobLevelController;
use App\Http\Controllers\Backend\OrgTypeController;
use App\Http\Controllers\Backend\GenderController;
use App\Http\Controllers\Backend\LocationController;
use App\Http\Controllers\Backend\EducationController;
use App\Http\Controllers\Backend\SubscriptionController;
use App\Http\Controllers\Backend\JobController;
use App\Http\Controllers\Backend\BlogsController;
use App\Http\Controllers\Backend\ReligionController;
use App\Http\Controllers\Backend\JobseekerUserController;
use App\Http\Controllers\Backend\EmployerUserController;

// Frontend
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\BlogDetailsController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\ElementsController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\JobDetailsController;
use App\Http\Controllers\Frontend\JobListingController;
use App\Http\Controllers\Frontend\ServiceController;

/* JobseeekrUser panel */
use App\Http\Controllers\Frontend\JobseekerUser\AuthController as jsuserauth;
use App\Http\Controllers\Frontend\JobseekerUser\DashboardController as jsuserdashboard;
use App\Http\Controllers\Frontend\JobseekerUser\JobseekerprofileController;


/* EmployerUser panel */
use App\Http\Controllers\Frontend\EmployerUser\AuthController as empuserauth;
use App\Http\Controllers\Frontend\EmployerUser\DashboardController as empuserdashboard;
use App\Http\Controllers\Frontend\EmployerUser\JobPostController;
use App\Http\Controllers\Frontend\EmployerUser\EmployerProfileController;


Route::get('/register', [auth::class,'signUpForm'])->name('register');
Route::post('/register', [auth::class,'signUpStore'])->name('register.store');
Route::get('/login', [auth::class,'signInForm'])->name('login');
Route::post('/login', [auth::class,'signInCheck'])->name('login.check');
Route::get('/logout', [auth::class,'signOut'])->name('logOut');


Route::middleware(['checkJobseekerAuth'])->group(function(){
  Route::get('jobseekeruser/dashboard', [jsuserdashboard::class,'index'])->name('jobseekeruserdashboard');
 
});

Route::middleware(['checkauth'])->prefix('admin')->group(function(){
  Route::get('dashboard', [dashboard::class,'index'])->name('dashboard');
});

// JobseekerUser
Route::get('jobseekeruser/register', [jsuserauth::class,'signUpForm'])->name('jobseekeruser.register');
Route::post('jobseekeruser/register', [jsuserauth::class,'signUpStore'])->name('jobseekeruser.register.store');
Route::get('jobseekeruser/login', [jsuserauth::class,'signInForm'])->name('jobseekeruser.login');
Route::post('jobseekeruser/login', [jsuserauth::class,'signInCheck'])->name('jobseekeruser.login.check');
Route::get('jobseekeruser/logout', [jsuserauth::class,'singOut'])->name('jobseekeruser.LogOut');

Route::get('jobseeker_profile',[JobseekerprofileController::class,'index'])->name('jobseekerprofile');
Route::get('jobseeker_profile/change',[JobseekerprofileController::class,'change_profile'])->name('jobseekerprofile.change');
Route::post('jobseeker_profile/update',[JobseekerprofileController::class,'update'])->name('jobseekerprofile.update');


// EmployerUser
Route::get('employeruser/register', [empuserauth::class,'signUpForm'])->name('employeruser.register');
Route::post('employeruser/register', [empuserauth::class,'signUpStore'])->name('employeruser.register.store');
Route::get('employeruser/login', [empuserauth::class,'signInForm'])->name('employeruser.login');
Route::post('employeruser/login', [empuserauth::class,'signInCheck'])->name('employeruser.login.check');
Route::get('employeruser/logout', [empuserauth::class,'singOut'])->name('employeruser.LogOut');
Route::get('employeruser/dashboard', [empuserdashboard::class,'index'])->name('empuserdashboard');

Route::resource('job_post',JobPostController::class);
Route::resource('employer_profile',EmployerProfileController::class);




Route::middleware(['checkrole'])->prefix('admin')->group(function(){
  Route::resource('user', user::class);
  Route::resource('role', role::class);
  Route::get('permission/{role}', [permission::class,'index'])->name('permission.list');
  Route::post('permission/{role}', [permission::class,'save'])->name('permission.save');
});

Route::resource('job-natures', JobNatureController::class);
Route::resource('job-category', JobCategoryController::class);
Route::resource('job-level', JobLevelController::class);
Route::resource('org-type', OrgTypeController::class);
Route::resource('gender', GenderController::class);
Route::resource('education', EducationController::class);
Route::resource('location', LocationController::class);
Route::resource('subscription', SubscriptionController::class);
Route::resource('job', JobController::class);
Route::resource('religion', ReligionController::class);
Route::resource('jobseeker_user', JobseekerUserController::class);
Route::resource('employer_user', EmployerUserController::class);
Route::get('/blogs', [BlogsController::class, 'index'])->name('blog.index');
Route::get('/blogs/create', [BlogsController::class, 'create'])->name('blog.create');
Route::post('/blogs', [BlogsController::class, 'store'])->name('blog.store');
Route::get('/blogs/{blog}/edit', [BlogsController::class, 'edit'])->name('blog.edit');
Route::delete('/blogs/{blog}', [BlogsController::class, 'destroy'])->name('blog.destroy');
Route::put('/blogs/{blog}', [BlogsController::class, 'update'])->name('blog.update');
Route::put('/blogs/{blog}', [BlogsController::class, 'update'])->name('blog.update');
// Route::resource('blogs', BlogsController::class);





// frontend Route
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[AboutController::class,'index']);
Route::get('/blog',[BlogController::class,'index']);
Route::get('/blogdetails',[BlogDetailsController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);
Route::get('/elements',[ElementsController::class,'index']);
Route::get('/jobdetails',[JobDetailsController::class,'index']);
Route::get('/joblisting',[JobListingController::class,'index']);
Route::get('/service',[ServiceController::class,'index']);
   







