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

Route::get('/',function(){
    return view('home');
});

//LIBRO

Route::post('eliminararticulo/{id}', 'ArticuloController@eliminar')->name('eliminar.articulo');

Route::post('articuloguardar/{id}', 'ArticuloController@guardar')->name('guardar.articulo');

Route::get('formarticulos/{id}', 'ArticuloController@editar')->name('editar.articulo');

Route::get('articulosotros', 'ArticuloController@otros')->name('articulosotros');

Route::get('articulos', 'ArticuloController@index')->name('articulos');

Route::post('articulos', 'ArticuloController@store')->name('articulo.guardar');

Route::get('showarticulos', 'ArticuloController@show');


//LIBROS

Route::post('deletebook/{id}', 'BookController@delete')->name('delete.book');

Route::post('savebook/{id}', 'BookController@save')->name('save.book');

Route::get('editbook/{id}', 'BookController@edit')->name('edit.book');

Route::get('otherbook', 'BookController@others')->name('otherbook');

Route::get('books', 'BookController@index')->name('books');

Route::post('books', 'BookController@store')->name('store.book');

Route::get('showbook', 'BookController@show');


//USERS

Route::post('deletestudent/{id}', 'StudentController@delete')->name('delete.student');

Route::post('savestudent/{id}', 'StudentController@save')->name('save.student');

Route::get('editstudent/{id}', 'StudentController@edit')->name('edit.student');

Route::get('otherstudent', 'StudentController@others')->name('otherstudent');

Route::get('students', 'StudentController@index')->name('student');

Route::post('students', 'StudentController@store')->name('store.student');

Route::get('showstudent', 'StudentController@show');

