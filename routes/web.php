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

Route::group(['middleware' => ['auth.user']], function (){ //Si el guard usuario se ha logueado de forma exitosa mostramos el contenido
    Route::get('/', 'UserController@index')->name('home');
    Route::get('/test-view/{id}', 'UserController@viewTest')->name('view-test-user');
});

//Rutas de API
Route::get('/test/{id}', 'HomeController@apiTest');
Route::get('/user/{id}', 'HomeController@apiUser');

//Rutas de Auth
Auth::routes();

Route::prefix('admin')->group(function (){ // Rutas para links de administrador /admin/*
    Route::get('/login', 'Auth\LoginController@adminLoginForm')->name('login-adm');
    Route::post('/login', 'Auth\LoginController@adminLogin')->name('login-adm-send');
    Route::get('/register', 'Auth\RegisterController@adminRegisterForm')->name('register-adm');
    Route::post('/register', 'Auth\RegisterController@createAdmin')->name('register-adm-send');
    Route::group(['middleware' => ['auth.admin']], function (){ // Una vez identificado como usuario verifica su guard para redirigirlo a las secciones de admin
        Route::get('/', 'AdminController@index')->name('admin');
        Route::get('/users', 'AdminController@viewUsers')->name('users-adm');
        Route::get('/tests', 'AdminController@viewTests')->name('tests-adm');
        Route::get('/add-test', 'AdminController@addTestForm')->name('add-test-adm');
        Route::post('/add-test', 'AdminController@addTest')->name('add-test-send-adm');
        Route::prefix('test')->group(function (){ // Rutas para links de un test en admin /admim/test/*
            Route::get('/assign/{id}', 'AdminController@assignTest')->name('view-assigns-adm');
            Route::get('/questions/{id}', 'AdminController@questionTest')->name('view-questions-adm');
            Route::get('/questions/{id}/answers', 'AdminController@questionAns')->name('view-questions-ans-adm');
        });
    });
});
