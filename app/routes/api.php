<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/myFirstApi','App\Http\Controllers\BranchesApi@index');
Route::get('/myFirstApi/{id}','App\Http\Controllers\BranchesApi@show');
Route::post('/branchAdd','App\Http\Controllers\BranchesApi@store');
Route::put('/branchUpdate/{id}','App\Http\Controllers\BranchesApi@update');
Route::delete('/branchDelete/{id}','App\Http\Controllers\BranchesApi@destroy');

