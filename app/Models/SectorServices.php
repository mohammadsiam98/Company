<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectorServices extends Model
{
    use HasFactory;
    protected $fillable=['category_id','service_name','service_details','image'];

    public function get_category()
    {
        return $this->belongsTo('App\Models\ServicesCategory', 'category_id');
        
    } 
}
