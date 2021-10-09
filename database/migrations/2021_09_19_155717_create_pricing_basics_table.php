<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricingBasicsTable extends Migration
{
    
    public function up()
    {
        Schema::create('pricing', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->string('planName');
            $table->string('small_description');
            $table->string('basic_plan_price');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pricing');
    }
}