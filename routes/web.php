<?php

use App\Http\Controllers\ControllerCustomer;
use App\Http\Controllers\DataHandleController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {return 'welcome';});

Route::get('/customer/register',[ControllerCustomer::class, 'register']);
Route::post('/customer/register',[ControllerCustomer::class, 'registerSuccess']);





Route::get('/data-handle/{id}/path',[DataHandleController::class,'handlePathVariable'] );
Route::get('/data-handle/query-string',[DataHandleController::class,'handleQueryString'] );
Route::get('/data-handle/form',[DataHandleController::class,'returnForm'] );
Route::post('/data-handle/form',[DataHandleController::class,'ProcessForm'] );
//get la dan vao duong link trong trinh duyet /user



