<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PricingBasic;
class PricingBasicDetails extends Model
{
    use HasFactory;
    protected $fillable=['basicPlan_id','services_name'];
    public function get_plan_name($id)
    {
        $plan_name = PricingBasic::where('id', $id)->first();
        return $plan_name->planName;
    }
}
