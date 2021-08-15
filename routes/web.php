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


      // These are Strengths routes
      Route::get('/strengths/create', 'App\Http\Controllers\StrengthsController@create')->name('strength.create');
      Route::put('/strengths/create', 'App\Http\Controllers\StrengthsController@store')->name('strength.store');
      Route::get('/strengths/list', 'App\Http\Controllers\StrengthsController@list')->name('strength.list');
      Route::get('/strengths/edit/{id}', 'App\Http\Controllers\StrengthsController@edit')->name('strength.edit');
      Route::post('/strengths/update/{id}', 'App\Http\Controllers\StrengthsController@update')->name('strength.update');
      Route::delete('/strengths/destroy/{id}', 'App\Http\Controllers\StrengthsController@destroy')->name('strength.destroy');
      

      // These are ourApproaches routes
      Route::get('/OurApproaches/create', 'App\Http\Controllers\OurApproachesController@create')->name('OurApproaches.create');
      Route::put('/OurApproaches/create', 'App\Http\Controllers\OurApproachesController@store')->name('OurApproaches.store');
      Route::get('/OurApproaches/list', 'App\Http\Controllers\OurApproachesController@list')->name('OurApproaches.list');
      Route::get('/OurApproaches/edit/{id}', 'App\Http\Controllers\OurApproachesController@edit')->name('OurApproaches.edit');
      Route::post('/OurApproaches/update/{id}', 'App\Http\Controllers\OurApproachesController@update')->name('OurApproaches.update');
      Route::delete('/OurApproaches/destroy/{id}', 'App\Http\Controllers\OurApproachesController@destroy')->name('OurApproaches.destroy');

      // These are Latest Creative Works routes
      Route::get('/creative_work/create', 'App\Http\Controllers\CreativepageController@create')->name('creative_work.create');
      Route::put('/creative_work/create', 'App\Http\Controllers\CreativepageController@store')->name('creative_work.store');
      Route::get('/creative_work/list', 'App\Http\Controllers\CreativepageController@list')->name('creative_work.list');
      Route::get('/creative_work/edit/{id}', 'App\Http\Controllers\CreativepageController@edit')->name('creative_work.edit');
      Route::post('/creative_work/update/{id}', 'App\Http\Controllers\CreativepageController@update')->name('creative_work.update');
      Route::delete('/creative_work/destroy/{id}', 'App\Http\Controllers\CreativepageController@destroy')->name('creative_work.destroy');

      // These are our Clients routes
      Route::get('/ourClients/create', 'App\Http\Controllers\ourClientsController@create')->name('ourClients.create');
      Route::put('/ourClients/create', 'App\Http\Controllers\ourClientsController@store')->name('ourClients.store');
      Route::get('/ourClients/list', 'App\Http\Controllers\ourClientsController@list')->name('ourClients.list');
      Route::get('/ourClients/edit/{id}', 'App\Http\Controllers\ourClientsController@edit')->name('ourClients.edit');
      Route::post('/ourClients/update/{id}', 'App\Http\Controllers\ourClientsController@update')->name('ourClients.update');
      Route::delete('/ourClients/destroy/{id}', 'App\Http\Controllers\ourClientsController@destroy')->name('ourClients.destroy');

       // These are our category routes (Dynamic Category Of Our Services)
       Route::get('/ServicesCategory/create', 'App\Http\Controllers\CategoryController@create')->name('ServicesCategory.create');
       Route::put('/ServicesCategory/create', 'App\Http\Controllers\CategoryController@store')->name('ServicesCategory.store');
       Route::get('/ServicesCategory/list', 'App\Http\Controllers\CategoryController@list')->name('ServicesCategory.list');
       Route::get('/ServicesCategory/edit/{id}', 'App\Http\Controllers\CategoryController@edit')->name('ServicesCategory.edit');
       Route::post('/ServicesCategory/update/{id}', 'App\Http\Controllers\CategoryController@update')->name('ServicesCategory.update');
       Route::delete('/ServicesCategory/destroy/{id}', 'App\Http\Controllers\CategoryController@destroy')->name('ServicesCategory.destroy');
     
});

