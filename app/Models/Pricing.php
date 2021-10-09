<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ServicesCategory;
class Pricing extends Model
{
    use HasFactory;

    protected $fillable=['category_id','planName','small_description','basic_plan_price','services_name'];

    public function get_category_name($id)
    {
        $categoryName = ServicesCategory::where('id', $id)->first();
        return $categoryName->category_name;
    }


}
