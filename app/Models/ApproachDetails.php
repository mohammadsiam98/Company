<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OurApproaches;

class ApproachDetails extends Model
{
    use HasFactory;
    protected $fillable=['approach_category_id','approach_title','approach_details'];

    public function get_approaches_category_name()
    {
        return $this->belongsTo('App\Models\OurApproaches', 'approach_category_id');
        
    } 
}
