<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SslCommerzPaymentController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','App\Http\Controllers\frontend\PagesController@index')->name('home');

Route::get('/student-login','App\Http\Controllers\frontend\PagesController@stdLogin')->name('stdLogin');
Route::get('/student-register','App\Http\Controllers\frontend\PagesController@stdRegister')->name('stdRegister');
Route::get('/student-dashboard','App\Http\Controllers\frontend\PagesController@stdDashboard')->middleware(['auth','verified'])->name('stdDashboard');
Route::post('/student-dashboard/update/{id}','App\Http\Controllers\Frontend\UsersController@StudentUpdate')->name('student.update');

Route::get('/batch/{slug}','App\Http\Controllers\frontend\PagesController@coursedetails')->name('course.details');
Route::get('/batch/{slug}/admission','App\Http\Controllers\Frontend\PagesController@admission')->name('getadmission');


// SSLCOMMERZ Start

// Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);


Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END



/*
|--------------------------------------------------------------------------
| Backend Admin Panel Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::group(['prefix' => 'admin'], function(){
    Route::get('/dashboard', 'App\Http\Controllers\Backend\DashboardController@dashboard')->middleware(['auth','verified'])->name('dashboard');
     //this routes are for branch management
     Route::group(['prefix' => '/branch'], function(){
        Route::get('/manage','App\Http\Controllers\Backend\BranchController@index')->name('branch.manage');
        Route::get('/create','App\Http\Controllers\Backend\BranchController@create')->name('branch.create');
        Route::post('/store','App\Http\Controllers\Backend\BranchController@store')->name('branch.store');
        Route::get('/edit/{id}','App\Http\Controllers\Backend\BranchController@edit')->name('branch.edit');
        Route::post('/update/{id}','App\Http\Controllers\Backend\BranchController@update')->name('branch.update');
        Route::post('/destroy/{id}','App\Http\Controllers\Backend\BranchController@destroy')->name('branch.destroy');
    });

    //this routes are for batch management
    Route::group(['prefix' => '/batch'], function(){
        Route::get('/manage','App\Http\Controllers\Backend\BatchController@index')->name('batch.manage');
        Route::get('/create','App\Http\Controllers\Backend\BatchController@create')->name('batch.create');
        Route::post('/store','App\Http\Controllers\Backend\BatchController@store')->name('batch.store');
        Route::get('/edit/{id}','App\Http\Controllers\Backend\BatchController@edit')->name('batch.edit');
        Route::post('/update/{id}','App\Http\Controllers\Backend\BatchController@update')->name('batch.update');
        Route::post('/destroy/{id}','App\Http\Controllers\Backend\BatchController@destroy')->name('batch.destroy');
    });

    //this routes are for mentors profile management
    Route::group(['prefix' => '/mentor'], function(){
        Route::get('/manage','App\Http\Controllers\Backend\MentrorController@index')->name('mentor.manage');
        Route::get('/create','App\Http\Controllers\Backend\MentrorController@create')->name('mentor.create');
        Route::post('/store','App\Http\Controllers\Backend\MentrorController@store')->name('mentor.store');
        Route::get('/edit/{id}','App\Http\Controllers\Backend\MentrorController@edit')->name('mentor.edit');
        Route::post('/update/{id}','App\Http\Controllers\Backend\MentrorController@update')->name('mentor.update');
        Route::post('/destroy/{id}','App\Http\Controllers\Backend\MentrorController@destroy')->name('mentor.destroy');
    });

    //this routes are for course management
    Route::group(['prefix' => '/course'], function(){
        Route::get('/manage','App\Http\Controllers\Backend\CourseController@index')->name('course.manage');
        Route::get('/create','App\Http\Controllers\Backend\CourseController@create')->name('course.create');
        Route::post('/store','App\Http\Controllers\Backend\CourseController@store')->name('course.store');
        Route::get('/edit/{id}','App\Http\Controllers\Backend\CourseController@edit')->name('course.edit');
        Route::post('/update/{id}','App\Http\Controllers\Backend\CourseController@update')->name('course.update');
        Route::post('/destroy/{id}','App\Http\Controllers\Backend\CourseController@destroy')->name('course.destroy');
    });
    //this routes are for curriculum management
    Route::group(['prefix' => '/curriculum'], function(){
        Route::get('/manage','App\Http\Controllers\Backend\CourseCurriculumController@index')->name('curriculum.manage');
        Route::get('/create','App\Http\Controllers\Backend\CourseCurriculumController@create')->name('curriculum.create');
        Route::post('/store','App\Http\Controllers\Backend\CourseCurriculumController@store')->name('curriculum.store');
        Route::get('/edit/{id}','App\Http\Controllers\Backend\CourseCurriculumController@edit')->name('curriculum.edit');
        Route::post('/update/{id}','App\Http\Controllers\Backend\CourseCurriculumController@update')->name('curriculum.update');
        Route::post('/destroy/{id}','App\Http\Controllers\Backend\CourseCurriculumController@destroy')->name('curriculum.destroy');
    });
    //this routes are for coupon management
    Route::group(['prefix' => '/coupon'], function(){
        Route::get('/manage','App\Http\Controllers\Backend\CouponController@index')->name('coupon.manage');
        Route::get('/create','App\Http\Controllers\Backend\CouponController@create')->name('coupon.create');
        Route::post('/store','App\Http\Controllers\Backend\CouponController@store')->name('coupon.store');
        Route::get('/edit/{id}','App\Http\Controllers\Backend\CouponController@edit')->name('coupon.edit');
        Route::post('/update/{id}','App\Http\Controllers\Backend\CouponController@update')->name('coupon.update');
        Route::post('/destroy/{id}','App\Http\Controllers\Backend\CouponController@destroy')->name('coupon.destroy');
    });

});

require __DIR__.'/auth.php';
