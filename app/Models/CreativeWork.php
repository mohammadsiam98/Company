<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreativeWork extends Model
{
    use HasFactory;
    protected $fillable = [
        'creative_work_name','creative_work_sector_name','creative_work_image'
    ];
}
