<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SectorTechnologiesWeWillUse;

class SectorTechnologiesDetails extends Model
{
    use HasFactory;
    protected $fillable=['stack_id','technology_name','technology_short_details','image'];


    public function get_technology_name()
    {
        return $this->belongsTo('App\Models\SectorTechnologiesWeWillUse', 'stack_id');
        
    } 

}
