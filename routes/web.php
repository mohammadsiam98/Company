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

//project-proposal Route
Route::get('/project_proposal', 'App\Http\Controllers\ProjectProposalController@projectProposal')->name('project-proposal');
//project-proposal Route


//sector Route
Route::get('/sector', 'App\Http\Controllers\SectorsController@sector')->name('sector');
//sector Route


//aim Route
Route::get('/aim', 'App\Http\Controllers\MissionVissionController@aim')->name('aim');
//aim Route


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

       // These are Services Overview routes (Dynamic Services)
       Route::get('/ServiceOverviewDetails/create', 'App\Http\Controllers\ServiceOverViewController@create')->name('ServiceOverviewDetails.create');
       Route::put('/ServiceOverviewDetails/create', 'App\Http\Controllers\ServiceOverViewController@store')->name('ServiceOverviewDetails.store');
       Route::get('/ServiceOverviewDetails/list', 'App\Http\Controllers\ServiceOverViewController@list')->name('ServiceOverviewDetails.list');
       Route::get('/ServiceOverviewDetails/edit/{id}', 'App\Http\Controllers\ServiceOverViewController@edit')->name('ServiceOverviewDetails.edit');
       Route::post('/ServiceOverviewDetails/update/{id}', 'App\Http\Controllers\ServiceOverViewController@update')->name('ServiceOverviewDetails.update');
       Route::delete('/ServiceOverviewDetails/destroy/{id}', 'App\Http\Controllers\ServiceOverViewController@destroy')->name('ServiceOverviewDetails.destroy');
       
       // These are Sector Service routes (Dynamic Services)
       Route::get('/SectorService/create', 'App\Http\Controllers\SectorServicesController@create')->name('SectorServices.create');
       Route::put('/SectorService/create', 'App\Http\Controllers\SectorServicesController@store')->name('SectorServices.store');
       Route::get('/SectorService/list', 'App\Http\Controllers\SectorServicesController@list')->name('SectorServices.list');
       Route::get('/SectorService/edit/{id}', 'App\Http\Controllers\SectorServicesController@edit')->name('SectorServices.edit');
       Route::post('/SectorService/update/{id}', 'App\Http\Controllers\SectorServicesController@update')->name('SectorServices.update');
       Route::delete('/SectorService/destroy/{id}', 'App\Http\Controllers\SectorServicesController@destroy')->name('SectorServices.destroy');

       
       // These are Sector Service Technologies What We Will Use routes (Dynamic Services)
       Route::get('/SectorTechnologiesWeWillUse/create', 'App\Http\Controllers\SectorTechnologiesController@create')->name('SectorTechnologiesWeWillUse.create');
       Route::put('/SectorTechnologiesWeWillUse/create', 'App\Http\Controllers\SectorTechnologiesController@store')->name('SectorTechnologiesWeWillUse.store');
       Route::get('/SectorTechnologiesWeWillUse/list', 'App\Http\Controllers\SectorTechnologiesController@list')->name('SectorTechnologiesWeWillUse.list');
       Route::get('/SectorTechnologiesWeWillUse/edit/{id}', 'App\Http\Controllers\SectorTechnologiesController@edit')->name('SectorTechnologiesWeWillUse.edit');
       Route::post('/SectorTechnologiesWeWillUse/update/{id}', 'App\Http\Controllers\SectorTechnologiesController@update')->name('SectorTechnologiesWeWillUse.update');
       Route::delete('/SectorTechnologiesWeWillUse/destroy/{id}', 'App\Http\Controllers\SectorTechnologiesController@destroy')->name('SectorTechnologiesWeWillUse.destroy');


        // These are Sector Stack Technologies What We Will Use routes (Dynamic Services)
        Route::get('/StackDetails/create', 'App\Http\Controllers\SectorStackTechnologiesController@create')->name('sector_technologies_details.create');
        Route::put('/StackDetails/create', 'App\Http\Controllers\SectorStackTechnologiesController@store')->name('sector_technologies_details.store');
        Route::get('/StackDetails/list', 'App\Http\Controllers\SectorStackTechnologiesController@list')->name('sector_technologies_details.list');
        Route::get('/StackDetails/edit/{id}', 'App\Http\Controllers\SectorStackTechnologiesController@edit')->name('sector_technologies_details.edit');
        Route::post('/StackDetails/update/{id}', 'App\Http\Controllers\SectorStackTechnologiesController@update')->name('sector_technologies_details.update');
        Route::delete('/StackDetails/destroy/{id}', 'App\Http\Controllers\SectorStackTechnologiesController@destroy')->name('sector_technologies_details.destroy');


       // These are Sector Creative Works routes (Dynamic Services)
       Route::get('/SectorCreativeWorks/create', 'App\Http\Controllers\SectorCreativeWorksController@create')->name('SectorCreativeWorks.create');
       Route::put('/SectorCreativeWorks/create', 'App\Http\Controllers\SectorCreativeWorksController@store')->name('SectorCreativeWorks.store');
       Route::get('/SectorCreativeWorks/list', 'App\Http\Controllers\SectorCreativeWorksController@list')->name('SectorCreativeWorks.list');
       Route::get('/SectorCreativeWorks/edit/{id}', 'App\Http\Controllers\SectorCreativeWorksController@edit')->name('SectorCreativeWorks.edit');
       Route::post('/SectorCreativeWorks/update/{id}', 'App\Http\Controllers\SectorCreativeWorksController@update')->name('SectorCreativeWorks.update');
       Route::delete('/SectorCreativeWorks/destroy/{id}', 'App\Http\Controllers\SectorCreativeWorksController@destroy')->name('SectorCreativeWorks.destroy');


        // These are Sector Wise Clients Routes (Dynamic)
        Route::get('/Sector-wise-Clients/create', 'App\Http\Controllers\SectorOurClientsController@create')->name('sectorClients.create');
        Route::put('/Sector-wise-Clients/create', 'App\Http\Controllers\SectorOurClientsController@store')->name('sectorClients.store');
        Route::get('/Sector-wise-Clients/list', 'App\Http\Controllers\SectorOurClientsController@list')->name('sectorClients.list');
        Route::get('/Sector-wise-Clients/edit/{id}', 'App\Http\Controllers\SectorOurClientsController@edit')->name('sectorClients.edit');
        Route::post('/Sector-wise-Clients/update/{id}', 'App\Http\Controllers\SectorOurClientsController@update')->name('sectorClients.update');
        Route::get('/Sector-wise-Clients/destroy/{id}', 'App\Http\Controllers\SectorOurClientsController@destroy')->name('sectorClients.destroy');


         // These are Sector Pricing Plan Routes (Basic Plan)
         Route::get('/PricingPlan/create', 'App\Http\Controllers\PricingController@create')->name('PricingPlan.create');
         Route::put('/PricingPlan/create', 'App\Http\Controllers\PricingController@store')->name('PricingPlan.store');
         Route::get('/PricingPlan/list', 'App\Http\Controllers\PricingController@list')->name('PricingPlan.list');
         Route::get('/PricingPlan/edit/{id}', 'App\Http\Controllers\PricingController@edit')->name('PricingPlan.edit');
         Route::post('/PricingPlan/update/{id}', 'App\Http\Controllers\PricingController@update')->name('PricingPlan.update');
         Route::get('/PricingPlan/destroy/{id}', 'App\Http\Controllers\PricingController@destroy')->name('PricingPlan.destroy');
 

        //case Study Route
        Route::get('/CaseStudy/create', 'App\Http\Controllers\CaseStudyController@create')->name('CaseStudy.create');
        Route::put('/CaseStudy/create', 'App\Http\Controllers\CaseStudyController@store')->name('CaseStudy.store');
        Route::get('/CaseStudy/list', 'App\Http\Controllers\CaseStudyController@list')->name('CaseStudy.list');
        Route::get('/CaseStudy/edit/{id}', 'App\Http\Controllers\CaseStudyController@edit')->name('CaseStudy.edit');
        Route::post('/CaseStudy/update/{id}', 'App\Http\Controllers\CaseStudyController@update')->name('CaseStudy.update');
        Route::DELETE('/CaseStudy/destroy/{id}', 'App\Http\Controllers\CaseStudyController@destroy')->name('CaseStudy.destroy');
        //case Study Route

        
        //Case Study About Project Stack Images
        Route::get('/About_project_images/create', 'App\Http\Controllers\CaseStudyAboutTheProjectStackImagesController@create')->name('caseStudyAboutProjectStackImages.create');
        Route::put('/About_project_images/create', 'App\Http\Controllers\CaseStudyAboutTheProjectStackImagesController@store')->name('caseStudyAboutProjectStackImages.store');
        Route::get('/About_project_images/list', 'App\Http\Controllers\CaseStudyAboutTheProjectStackImagesController@list')->name('caseStudyAboutProjectStackImages.list');
        Route::get('/About_project_images/edit/{id}', 'App\Http\Controllers\CaseStudyAboutTheProjectStackImagesController@edit')->name('caseStudyAboutProjectStackImages.edit');
        Route::post('/About_project_images/update/{id}', 'App\Http\Controllers\CaseStudyAboutTheProjectStackImagesController@update')->name('caseStudyAboutProjectStackImages.update');
        Route::DELETE('/About_project_images/destroy/{id}', 'App\Http\Controllers\CaseStudyAboutTheProjectStackImagesController@destroy')->name('caseStudyAboutProjectStackImages.destroy');
        //Case Study About Project Stack Images


         //Case Study Single project Image Slider
         Route::get('/caseStudyslider/create', 'App\Http\Controllers\CaseStudyImageSliderController@create')->name('caseStudyslider.create');
         Route::put('/caseStudyslider/create', 'App\Http\Controllers\CaseStudyImageSliderController@store')->name('caseStudyslider.store');
         Route::get('/caseStudyslider/list', 'App\Http\Controllers\CaseStudyImageSliderController@list')->name('caseStudyslider.list');
         Route::get('/caseStudyslider/edit/{id}', 'App\Http\Controllers\CaseStudyImageSliderController@edit')->name('caseStudyslider.edit');
         Route::post('/caseStudyslider/update/{id}', 'App\Http\Controllers\CaseStudyImageSliderController@update')->name('caseStudyslider.update');
         Route::DELETE('/caseStudyslider/destroy/{id}', 'App\Http\Controllers\CaseStudyImageSliderController@destroy')->name('caseStudyslider.destroy');
        //Case Study Single project Image Slider
        
        //contact Route
        Route::get('/contact', 'App\Http\Controllers\ContactUsController@store')->name('contact.store');
        //contact Route

         //contact Route
         Route::get('/projectProposal', 'App\Http\Controllers\ProjectProposalController@store')->name('ProjectProposalDetails.store');
         //contact Route


        

       
     
});

