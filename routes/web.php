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

Route::get('/', function () {
    return view('welcome');
});

Route::get('KhoaHoc', function(){
    return "xin chao cac ban";
});

Route::get('KhoaPham/Laravel', function(){
    echo "<h1>Khoa Hoc - Laravel<h1>";
});

Route::get('Ngay/{ngay}', function ($ngay) {
    echo $ngay;
})->where(['ngay' => '[0-9]+']);

Route::get('Test',['as' => 'MyRoute', function(){
    echo "xin chao cac ban 'd' ";
}]);

Route::get('GoiTen', function(){
    return redirect()->route('MyRoute');
});

Route::group(['prefix' => 'MyGroup'], function(){
    Route::get('User1', function(){
        echo "User 1";
    });
    Route::get('User2', function(){
        echo "User 1";
    });
    Route::get('User3', function(){
        echo "User 1";
    });
});

Route::get('user/{id}', 'UserController@show');

Route::get('ThamSo/{id}', 'MyFirstController@XinChao');

Route::get('MyRequest', 'MyFirstController@GetURL');

Route::get('getForm', function(){
    return view('postForm');
});

Route::post('postForm',['as' => 'postForm', 'uses' => 'MyFirstController@postForm']);