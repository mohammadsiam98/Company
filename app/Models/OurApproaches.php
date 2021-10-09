<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ServicesCategory;
class OurApproaches extends Model
{
    use HasFactory;
    protected $fillable = ['category_id','Approach_title','Approach_details',];

    public function get_category_name($id)
    {
        $categoryName = ServicesCategory::where('id', $id)->first();
        return $categoryName->category_name;
    }
}
