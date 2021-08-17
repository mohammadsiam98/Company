<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectorCreativeWorks extends Model
{
    use HasFactory;
    protected $fillable=['category_id','creative_work_name','creative_work_sector','image'];

    public function get_category()
    {
        return $this->belongsTo('App\Models\ServicesCategory', 'category_id');
        
    } 
}
