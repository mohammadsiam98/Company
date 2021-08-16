<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceOverviewDetails extends Model
{
    use HasFactory;
    protected $fillable=['page_heading','service_overview_title','service_overview_details','category_id','image'];

    public function get_category()
    {
        return $this->belongsTo('App\Models\ServicesCategory', 'category_id');
        
    } 

}
