<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\NewsController;
use \App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'index']);

/** Админка новостей */
Route::group([
    'prefix' => '/admin/news',
    'as' => 'admin::news::',
], function (){
    Route::get('/',  [ AdminNewsController::class, 'index' ])
        ->name('index' );
    Route::get('/create', [ AdminNewsController::class, 'create'])
        ->name('create');
    Route::post('/save', [ AdminNewsController::class, 'save'])
        ->name('save');
    Route::post('/update', [ AdminNewsController::class, 'update'])
        ->name('update');
    Route::post('/delete', [ AdminNewsController::class, 'delete'])
        ->name('delete');
    Route::get('/categoryAdd', [ AdminNewsController::class, 'categoryAdd'])
        ->name('categoryAdd');
    Route::post('/category', [ AdminNewsController::class, 'addCategory'])
        ->name('category');
});
/**Категории*/

Route::group([
    'prefix' => '/news/category',
    'as' => 'news::category',

], function (){
    Route::get('/', [NewsController::class, 'categories'])
        ->name('');

    Route::get('/{idCategory}', [NewsController::class,'news'])
        ->name('::idCategory');

    Route::get('/{idCategory}/{id}', [NewsController::class,'article'])
        ->name('::idCategory::id');
});

//Route::get('/db', [\App\Http\Controllers\DbController::class, 'index']);
