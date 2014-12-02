<?php
/*
 * DMP 12-01-2014: Created
 */

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlantsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {

        Schema::create('plants', function($table)
        {
           $table->increments('id');
           $table->timestamps();
            $table->integer('family_id')->unsigned();
            $table->string('botanical_name');
            $table->string('common_name');
            $table->foreign('family_id')->references('id')->on('families');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('families');
    }
}
