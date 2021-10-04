<?php

use App\Models\Backend\Branch;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Frontend Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','App\Http\Controllers\frontend\PagesController@index')->name('home');


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix' => 'admin'], function(){
    Route::get('/dashboard', 'App\Http\Controllers\Backend\DashboardController@dashboard') ->name('admin.dashboard');

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

