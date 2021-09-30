<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricingBasicDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('pricing_basic_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('basicPlan_id');
            $table->string('services_name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pricing_basic_details');
    }
}
