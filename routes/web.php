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
    'as' => 'home',
    'uses'=> 'UserController@showHomePage'
]);

Route::get('/bang-gia', [
    'as' => 'webbanggia',
    'uses'=> 'UserController@showBanggia'
]);

Route::get('/chinh-sach', [
    'as' => 'webchinhsach',
    'uses' => 'UserController@chinhsach'
]);

Route::get('/gioi-thieu', [
    'as' => 'webgioithieu',
    'uses' => 'UserController@gioithieu'
]);

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

    Route::get('/chinhsua-mvd/{id}', [
        'middleware' => ['isLogin'],
        'uses'=> 'AdminController@showEditMVD'
    ]);

    Route::post('/chinhsua-mvd', [
        'middleware' => ['isLogin'],
        'uses'=> 'AdminController@actionEditMVD'
    ]);

    Route::get('/thong-bao', [
        'as' => 'thongbao',
        'middleware' => ['isLogin'],
        'uses'=> 'AdminController@showSetUpNoti'
    ]);

    Route::post('/thong-bao', [
        'middleware' => ['isLogin'],
        'uses'=> 'AdminController@actionSetUpNoti'
    ]);

    Route::get('/bang-gia', [
        'as' => 'banggia',
        'middleware' => ['isLogin'],
        'uses'=> 'AdminController@showSetupBanggia'
    ]);

    Route::post('/bang-gia', [
        'middleware' => ['isLogin'],
        'uses'=> 'AdminController@actionSetupBanggia'
    ]);

    Route::get('/chinh-sach', [
        'as' => 'chinhsach',
        'middleware' => ['isLogin'],
        'uses'=> 'AdminController@showSetupChinhSach'
    ]);

    Route::post('/chinh-sach', [
        'as' => 'chinhsach',
        'middleware' => ['isLogin'],
        'uses'=> 'AdminController@actionSetupChinhSach'
    ]);

    Route::get('/gioi-thieu', [
        'as' => 'gioithieu',
        'middleware' => ['isLogin'],
        'uses'=> 'AdminController@showSetupGioithieu'
    ]);

    Route::post('/gioi-thieu', [
        'as' => 'gioithieu',
        'middleware' => ['isLogin'],
        'uses'=> 'AdminController@actionSetupGioithieu'
    ]);

    Route::get('/thong-tin-chung', [
        'as' => 'thongtinchung',
        'middleware' => ['isLogin'],
        'uses'=> 'AdminController@showSetupGeneral'
    ]);

    Route::post('/thong-tin-chung', [
        'as' => 'thongtinchung',
        'middleware' => ['isLogin'],
        'uses'=> 'AdminController@actionSetupGeneral'
    ]);

    Route::get('/thong-tin-chung', [
        'as' => 'thongtinchung',
        'middleware' => ['isLogin'],
        'uses'=> 'AdminController@showSetupGeneral'
    ]);

    Route::get('/thong-tin-kho', [
        'as' => 'thongtinkho',
        'middleware' => ['isLogin'],
        'uses'=> 'AdminController@showListThongTinKho'
    ]);

    Route::get('/them-thong-tin-kho', [
        'as' => 'themthongtinkho',
        'middleware' => ['isLogin'],
        'uses'=> 'AdminController@showAddThongTinKho'
    ]);

    Route::post('/them-thong-tin-kho', [
        'middleware' => ['isLogin'],
        'uses'=> 'AdminController@actionAddThongTinKho'
    ]);

    Route::get('/xoa-thong-tin-kho/{id}', [
        'middleware' => ['isLogin'],
        'uses'=> 'AdminController@removeThongTinKho'
    ]);

    Route::get('/chinhsua-thong-tin-kho/{id}', [
        'middleware' => ['isLogin'],
        'uses'=> 'AdminController@showEditThongTinKho'
    ]);

    Route::post('/chinhsua-thong-tin-kho', [
        'middleware' => ['isLogin'],
        'uses'=> 'AdminController@actionEditThongTinKho'
    ]);
});
