<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaseStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_studies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->string('thumbnail_case_study_image');
            $table->string('thumbnail_case_study_title');
            
            $table->string('About_the_project_title');
            $table->text('About_the_project_details');
            $table->string('About_the_project_image');

            $table->string('app_features');

            $table->string('challenges');

            $table->string('solution_title');
            $table->text('solution_details');

            $table->string('stack_steps');


            $table->string('client_name');
            $table->string('client_testimonials');
            $table->string('client_designation');
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
        Schema::dropIfExists('case_studies');
    }
}
