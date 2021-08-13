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

//Homepage Route
Route::get('/', 'App\Http\Controllers\HomepageController@homepage')->name('homepage');
//Homepage Route


//about-us Route
Route::get('/about-us', 'App\Http\Controllers\AboutUsController@aboutUs')->name('aboutUs');
//about-us Route


//Our Approaches Route
Route::get('/our-approaches', 'App\Http\Controllers\OurApproachesController@ourApproaches')->name('ourApproaches');
//Our Approaches Route


//blog Route
Route::get('/blog', 'App\Http\Controllers\BlogPagesController@blog')->name('blog');
//blog Route


//case Study Route
Route::get('/case-study', 'App\Http\Controllers\CaseStudyController@caseStudy')->name('caseStudy');
//case Study Route


//contact Route
Route::get('/contact', 'App\Http\Controllers\ContactUsController@contact')->name('contact');
//contact Route


//sector Route
Route::get('/sector', 'App\Http\Controllers\SectorsController@sector')->name('sector');
//sector Route


//aim Route
Route::get('/aim', 'App\Http\Controllers\MissionVissionController@aim')->name('aim');
//aim Route


//office Route
Route::get('/office', 'App\Http\Controllers\OfficeController@office')->name('office');
//office Route


//Client Review Route
Route::get('/reviews', 'App\Http\Controllers\ClientReviewsController@reviews')->name('reviews');
//Client Review Route

//Team Route
Route::get('/team', 'App\Http\Controllers\TeamController@team')->name('team');
//Team Route




Route::prefix('admin')->group(function(){
    
    Route::get('/dashboard', 'App\Http\Controllers\AdminController@dashboard')->name('admin.dashboard');
      // These are aboutUs routes
      Route::get('/aboutUs/create', 'App\Http\Controllers\AboutUsController@create')->name('about.create');
      Route::put('/aboutUs/create', 'App\Http\Controllers\AboutUsController@store')->name('about.store');
      Route::get('/aboutUs/list', 'App\Http\Controllers\AboutUsController@list')->name('about.list');
      Route::get('/aboutUs/edit/{id}', 'App\Http\Controllers\AboutUsController@edit')->name('about.edit');
      Route::post('/aboutUs/update/{id}', 'App\Http\Controllers\AboutUsController@update')->name('about.update');
      Route::delete('/aboutUs/destroy/{id}', 'App\Http\Controllers\AboutUsController@destroy')->name('about.destroy');
     

});

