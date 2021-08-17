<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectorServicesTable extends Migration
{

    public function up()
    {
        Schema::create('sector_services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->string('service_name');
            $table->text('service_details');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sector_services');
    }
}
