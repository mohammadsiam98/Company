<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricingBasic extends Model
{
    use HasFactory;
    protected $fillable=['category_id','planName','small_description','basic_plan_price'];
}
