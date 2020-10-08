<?php

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

Route::get('/', [
    'uses'=> 'UserController@showHomePage'
]);

Route::get('/bang-gia', function () {
    return view('index');
});

Route::get('/chinh-sach', function () {
    return view('chinhsach');
});

Route::get('/theo-doi-mvd', function () {
    return view('index');
});

Route::prefix('admin')->group(function () {
    Route::get('/', [
        'as' => 'admin',
        'middleware' => ['isLogin'],
        'uses'=> 'AdminController@showListMVD'
    ]);

    Route::get('/logout', [
        'uses'=> 'AdminController@logout'
    ]);

    Route::get('/login', [
        'uses'=> 'AdminController@showLogin'
    ]);

    Route::post('/login', [
        'uses'=> 'AdminController@actionLogin'
    ]);

    Route::get('/them-mvd', [
        'as' => 'themmvd',
        'middleware' => ['isLogin'],
        'uses'=> 'AdminController@showAddMVD'
    ]);

    Route::post('/them-mvd', [
        'middleware' => ['isLogin'],
        'uses'=> 'AdminController@actionAddMVD'
    ]);

    Route::get('/xoa-mvd/{id}', [
        'middleware' => ['isLogin'],
        'uses'=> 'AdminController@removeMVD'
    ]);

    Route::get('/thong-bao', [
        'as' => 'thongbao',
        'middleware' => ['isLogin'],
        'uses'=> 'AdminController@showSetUpNoti'
    ]);

    Route::get('/bang-gia', [
        'as' => 'banggia',
        'middleware' => ['isLogin'],
        'uses'=> 'AdminController@showSetupBanggia'
    ]);

    Route::get('/chinh-sach', [
        'as' => 'chinhsach',
        'middleware' => ['isLogin'],
        'uses'=> 'AdminController@showSetupChinhSach'
    ]);
});
