<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('jname');

            $table->string('slug')->unique(); 

            $table->string('jtype'); 
            
            $table->longText('jdescription');
            $table->text('jaddress'); 
            $table->integer('jsalary_min'); 
            $table->integer('jsalary_max'); 
            $table->dateTime('jdeadline');
            $table->string('jexperience'); 
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
        Schema::dropIfExists('jobs');
    }
}
