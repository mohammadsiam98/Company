<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceOverviewDetails;
use App\Models\SectorServices;
use App\Models\SectorClients; 
use App\Models\SectorTechnologiesWeWillUse;
use App\Models\SectorTechnologiesDetails;
use App\Models\Pricing;
use App\Models\ServicesCategory;
use App\Models\SectorCreativeWorks;
use DB;
class SectorsController extends Controller
{
    //This Function is dynamic
    public function sectors($id)
    {
        $categoryName = $id;
        $category = ServicesCategory::where('category_name',$categoryName)->first();
        $categoryId = $category->id;
        $serviceOverview = ServiceOverviewDetails::where('category_id',$categoryId)->first();
        $SectorServices  = SectorServices::where('category_id',$categoryId)->get();
        $SectorClients   = SectorClients::where('category_id',$categoryId)->first();
        $SectorClientsImage   = SectorClients::where('category_id',$categoryId)->get();
        $SectorTechnologiesWeWillUse  = SectorTechnologiesWeWillUse::where('category_id',$categoryId)->first();
        $SectorTechnologyDetails = DB::table('sector_technologies_details')->join('sector_technologies_we_will_uses','sector_technologies_details.stack_id','sector_technologies_we_will_uses.id')->where('sector_technologies_we_will_uses.category_id', $categoryId)->get();
        $pricingDetails               = Pricing::where('category_id',$categoryId)->get();
        $creativeWorkDetails          = SectorCreativeWorks::where('category_id',$categoryId)->get();
        // $OurApproachesDetails         = OurApproaches::where('category_id',$categoryId)->get();
       
        return view('pages.marketingSectors.serviceMarketing',compact('serviceOverview','SectorServices',
        'SectorClients','SectorClientsImage','SectorTechnologiesWeWillUse','SectorTechnologyDetails',
         'pricingDetails','creativeWorkDetails','categoryId'));
    }
    
}
