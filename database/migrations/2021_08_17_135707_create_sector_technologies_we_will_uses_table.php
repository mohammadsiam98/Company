<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectorTechnologiesWeWillUsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sector_technologies_we_will_uses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->string('technology_main_title');
            $table->text('technology_main_title_short_details');
            $table->string('technology_name');
            $table->text('technology_short_details');
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
        Schema::dropIfExists('sector_technologies_we_will_uses');
    }
}
