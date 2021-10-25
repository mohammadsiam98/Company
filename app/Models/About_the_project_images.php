<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CaseStudy;


class About_the_project_images extends Model
{
    use HasFactory;
    protected $fillable=['image','caseStudy_id'];

    public function get_technology_name()
    {
        return $this->belongsTo('App\Models\CaseStudy', 'caseStudy_id');
        
    } 
}
