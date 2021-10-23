<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ServicesCategory;
class CaseStudy extends Model
{
    use HasFactory;
    protected $fillable=['category_id','thumbnail_case_study_image','thumbnail_case_study_title','About_the_project_title',
    'About_the_project_details','About_the_project_image','app_features',
    'challenges','solution_title','solution_details','client_name','client_testimonials',
    'client_designation'];

    public function get_category_name($id)
    {
        $categoryName = ServicesCategory::where('id', $id)->first();
        return $categoryName->category_name;
    }
}
