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
    return view('index');
});

Route::get('admin/page', 'AdminController@admin')->name('admin.page');


// Route::get('/home', 'HomeController@index')->name('home');
Route::get('single', 'HomeController@single')->name('single.room');
Route::get('double', 'HomeController@double')->name('double.room');
Route::get('tripple', 'HomeController@tripple')->name('tripple.room');
Route::get('familly', 'HomeController@familly')->name('familly.room');


Route::get('registration/page', 'RegistrationController@registration')->name('registration.page');
Route::post('store/registration', 'RegistrationController@store')->name('store.registration');
Route::get('all/single-room-customer', 'RegistrationController@AllCustomer')->name('all.customer');
Route::get('view/single_customer/{id}', 'RegistrationController@ViewSingleCustomer');
Route::get('delete/single-customer/{id}', 'RegistrationController@DeleteSinglecustomer');