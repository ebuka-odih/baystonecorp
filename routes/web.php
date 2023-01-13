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

Route::view('/', 'pages.index')->name('homepage');
Route::view('industries/chemicals/basic-chemicals', 'pages.basic-chemicals')->name('basic_chemicals');
Route::view('industries', 'pages.industries.industries')->name('industries');
Route::view('industries/chemicals', 'pages.industries.chemicals')->name('chemicals');
Route::view('industries/energy', 'pages.industries.energy')->name('energy');
Route::view('industries/infrastructure', 'pages.industries.infrastructure')->name('infrastructure');
Route::view('industries/manufacturing', 'pages.industries.manufacturing')->name('manufacturing');
Route::view('industries/marine', 'pages.industries.marine')->name('marine');
Route::view('industries/mining', 'pages.industries.mining')->name('mining');
Route::view('industries/power-utilities', 'pages.industries.power-utilities')->name('power_utilities');
Route::view('about', 'pages.about')->name('about');
Route::view('about/about-premaxcorp', 'pages.about-premax')->name('about_premaxcorp');
Route::view('about/our-vision-and-mission', 'pages.our-vision-and-mission')->name('mission');
Route::view('about/diversity-equity-inclusion', 'pages.diversity-equity-inclusion')->name('diversity');
Route::view('about/board-of-directors', 'pages.board-of-directors')->name('board_of_directors');
//Route::view('contact-us', 'pages.contact')->name('contact');
Route::get('contact-us', "ContactUsController@contact")->name('contact');
Route::post('contact-us', "ContactUsController@store")->name('contact_store');

//Route::view('demo', 'pages.construction')->name('constructions');
Route::view('constructions', 'pages.constructions')->name('constructions');
Route::view('solutions', 'pages.solutions')->name('solutions');
Route::view('solutions/engineering', 'pages.engineering')->name('engineering');
Route::view('solutions/operations', 'pages.operations')->name('operations');
Route::view('solutions/performance', 'pages.performance')->name('performance');
Route::view('solutions/digital-transformation', 'pages.digital-transformation')->name('digital_transformation');



Route::get('project', "UserController@project")->name('project');
Route::post('track-contract/', "UserController@track_contract")->name('track_contract');
Route::get('process-contract/{id}', "UserController@process")->name('process_contract');
Route::get('contract/{id}/details', "UserController@contract_details")->name('contract_details');
//Route::view('demo', 'pages.demo');

Auth::routes();
//PREXX238453SCORP

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'admin', 'as' => 'admin.'], function(){

    Route::get('dashboard', "AdminController@dashboard")->name('dashboard');

//    Project routes
    Route::get('add-project', "ProjectController@add")->name('add');
    Route::get('project-details/{id}', "ProjectController@view")->name('project.view');
    Route::post('add-project/store', "ProjectController@store")->name('project.store');
    Route::get('project-list', "ProjectController@list")->name('projects.list');
    Route::get('edit-project/{id}', "ProjectController@edit")->name('edit');
    Route::put('update-project/{id}', "ProjectController@update")->name('update');
    Route::delete('delete-project/{id}', "ProjectController@destroy")->name('project.destroy');

    Route::get('change-password', 'AdminController@password')->name('password');
    Route::post('change-password', 'AdminController@store')->name('change.password');

});

include "admin.php";
