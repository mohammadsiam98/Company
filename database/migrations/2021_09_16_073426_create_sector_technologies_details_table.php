<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectorTechnologiesDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('sector_technologies_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stack_id');
            $table->string('technology_name');
            $table->string('technology_short_details');
            $table->string('image');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sector_technologies_details');
    }
}
