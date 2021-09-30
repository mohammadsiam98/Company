<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricingStandardDetailsTable extends Migration
{
   
    public function up()
    {
        Schema::create('pricing_standard_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('standardPlan_id');
            $table->string('services_name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pricing_standard_details');
    }
}
