<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'PagesController@root')->name('root');

Auth::routes(['verify' => true]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('users', 'UsersController', ['only'=>['show', 'update', 'edit']]);

Route::resource('topics', 'TopicsController', ['only' => ['index', 'create', 'store', 'update', 'edit', 'destroy']]);

Route::get('topics/{topic}/{slug?}', 'TopicsController@show')->name('topics.show');

Route::resource('categories', 'CategoriesController', ['only' => ['show']]);

// 上传图片路由
Route::post('upload_image', 'TopicsController@uploadImage')->name('topics.upload_image');
// 话题回复操作资源路由
Route::resource('replies', 'RepliesController', ['only' => ['store', 'destroy']]);

// 通知路由
Route::resource('notifications', 'NotificationsController', ['only' => ['index']]);

// 后台访问权限路由
Route::get('permission-denied', 'PagesController@permissionDenied')->name('permission-denied');
