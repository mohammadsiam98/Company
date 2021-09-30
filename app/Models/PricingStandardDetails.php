<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricingStandardDetails extends Model
{
    use HasFactory;
    protected $fillable=['standardPlan_id','services_name'];
}
