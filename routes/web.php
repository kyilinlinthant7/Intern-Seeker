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


Route::get('/','Frontend_Controller@index')->name('Frontend.home');

Route::get('applicant_list','Frontend_Controller@applicant_list')->name('Frontend.applicant_list');

Route::get('template','Frontend_Controller@template')->name('Frontend.template');;

Route::get('notice_board','Frontend_Controller@notice_board')->name('Frontend.notice_board');

Route::get('intern_field','Frontend_Controller@intern_field')->name('Frontend.intern_field');

Route::get('intern_field_edit','Frontend_Controller@intern_field_edit')->name('Frontend.intern_field_edit');

Route::get('about','Frontend_Controller@about')->name('Frontend.about');

Route::get('contact','Frontend_Controller@contact')->name('Frontend.contact');

Route::get('apply','Frontend_Controller@apply')->name('Frontend.apply');

Route::get('student_register','Frontend_Controller@student_register')->name('Frontend.student_register');

Route::get('company_register','Frontend_Controller@company_register')->name('Frontend.company_register');

Route::get('post','Frontend_Controller@post')->name('Frontend.post');

Route::get('post_detail','Frontend_Controller@post_detail')->name('Frontend.post_detail');



//Frontend

Route::resource('company','Company_Controller');

Route::resource('student','Student_Controller');

Route::resource('Intern_Post','Post_Controller');

Route::resource('apply','Apply_Controller');

Route::resource('category','Category_Controller');

// Route::resource('/','Index_Controller')->name('Frontend.home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
