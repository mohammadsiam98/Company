<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectorTechnologiesWeWillUse extends Model
{
    use HasFactory;
    protected $fillable=['category_id','technology_main_title','technology_main_title_short_details','technology_name','technology_short_details','image'];
    
    public function get_category()
    {
        return $this->belongsTo('App\Models\ServicesCategory', 'category_id');
        
    } 
}
