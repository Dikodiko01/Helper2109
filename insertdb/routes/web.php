<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
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

Route::get('/', [HomeController::class, 'notion']);

Route::get('/home', [HomeController::class, 'index']);

Route::post('/upload', [HomeController::class, 'upload']);

Route::get('/view', [HomeController::class, 'view']);

Route::get('/diko', [HomeController::class, 'diko']);

Route::get('/notion', [HomeController::class, 'notion']);

Route::get('/download', [HomeController::class, 'download']);

Route::get('/priceses', [HomeController::class, 'priceses']);

Route::get('/tools', [HomeController::class, 'tools']);

Route::get('/community', [HomeController::class, 'community']);

/*Route::group([], function () {
   Route::get('/', 'PostsController@index')->name('posts');
});
*/

Route::resource('/posts', PostsController::class);
// офигеть она сработала  Надо было просто добавить ::class ехууууу

/*Route::resource('posts', PostsController::class)->only([
    'index', 'show'
]);*/
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
