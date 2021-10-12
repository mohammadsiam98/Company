<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectorClients extends Model
{
    protected $fillable=['category_id','clients_header','clients_header_description','image'];

    public function get_category_name($id)
    {
        $categoryName = ServicesCategory::where('id', $id)->first();
        return $categoryName->category_name;
    }
}
