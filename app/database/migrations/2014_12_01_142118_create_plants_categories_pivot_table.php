<?php
/**
 * DMP 12-10-2014
 */
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlantsCategoriesPivotTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
        Schema::create('plant_category', function($table)
        {
            $table->integer('plant_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->foreign('plant_id')->references('id')->on('plants');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('plant_category');
    }
}
