<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\ClientDashboardController;
use App\Http\Controllers\HomeController;
use App\Models\Avi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;


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






Route::get("/dashboard", [ClientDashboardController::class, "index"])->name("client.dashboard")->middleware('auth');
Route::get("/my_categories", [ClientDashboardController::class, "my_categories"])->name('client.my_categories');
Route::get("/mes_services/{id}", [ClientDashboardController::class, "my_services"])->name('client.my_services');
Route::get("/mes_services_detail/{id}", [ClientDashboardController::class, "my_servicesdetails"]);
Route::get("/panier", [ClientDashboardController::class, "my_bookings"])->name('client.my_bookings');
Route::get("/update_identity", [ClientDashboardController::class, "update_identity"])->name('client.update_identity');
Route::get("/profile", [ClientDashboardController::class, "profile"])->name('client.profile');


Route::get("/", [HomeController::class, "index"])->name("guest.home");
Route::get("/About-us", [HomeController::class, "aboutUs"])->name("guest.aboutus");

Route::get("/all-services", [HomeController::class, "category"])->name("guest.allcategory");
Route::get("/search", [HomeController::class, "search"])->name("guest.search");
Route::get("/contact-us", [HomeController::class, "contactus"])->name("guest.contactus");
Auth::routes();

Route::get('/service/{id}',[HomeController::class,"sub_category"]);
Route::get("/service-detail/{id}", [HomeController::class, "category_detail"]);
Route::post('reservation',[\App\Http\Controllers\ReservationController::class,"store"]);
Route::post('comment/{id}',[ClientDashboardController::class,"comment"]);
Route::get('/test',function (){
    return view('layouts.app');
});

//verify email
Auth::routes(['verify' => true]);

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
//reset password
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
