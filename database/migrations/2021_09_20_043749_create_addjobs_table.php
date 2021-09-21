<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddjobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addjobs', function (Blueprint $table) {
            $table->id();
            $table->string('jobTitle')->nullable();
            $table->string('department')->nullable();
            $table->string('job_location')->nullable();
            $table->string('no_of_vacancies')->nullable();
            $table->string('salaryFrom')->nullable();
            $table->string('salaryTo')->nullable();
            $table->string('jobType')->nullable();
            $table->string('status')->nullable();
            $table->string('start_date')->nullable();
            $table->string('expired')->nullable();
            $table->string('description')->nullable();
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
        Schema::dropIfExists('addjobs');
    }
}
