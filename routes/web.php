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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();




Route::get("/login", function(){
    return view("login");
});

Route::get("rutaprueba","PruebaController@prueba2");
Route::get("home","HomeController@Home");
Route::get("catalog/show/id","CatalogController@CatalogShow");
Route::get("catalog/create","CatalogController@CatalogCreate");
Route::get("catalog/edit/id","CatalogController@CatalogEdit");
Route::resource("/cucharon","CucharonController");
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('delete/{id}','CucharonController@destroy');


Route::resource("/reparacion","ReparacionController");

Route::resource("/mantenimiento","MantenimientoController");


Route::get('delete1/{id}','ReparacionController@destroy');
//Route::get('delete/{id}','MantenimientoController@destroy');
// descargas
Route::get('descargar-cucharones', 'CucharonController@pdf')->name('listado.pdf');
Route::get("/pdf","CucharonController@pdf")->name("descargarpdf");

Route::resource('/search', 'Api\SearchController');
Route::get('/searchh',['uses' => 'Api\SearchController@search','as' => 'search']);

