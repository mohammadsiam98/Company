<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurApproaches extends Model
{
    use HasFactory;
    protected $fillable = [
        'Approach_title','Approach_details'
    ];
}
