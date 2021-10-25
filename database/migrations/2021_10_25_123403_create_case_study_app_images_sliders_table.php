<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaseStudyAppImagesSlidersTable extends Migration
{

    public function up()
    {
        Schema::create('case_study_app_images_sliders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('caseStudy_id');
            $table->string('image');
            $table->timestamps();
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('case_study_app_images_sliders');
    }
}
