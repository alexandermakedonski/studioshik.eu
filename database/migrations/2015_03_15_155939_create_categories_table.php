<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		Schema::create('servicecategories', function (Blueprint $table)
		{
		    $table->increments('id');
			$table->string('name');
			$table->timestamps();
		    $table->unsignedInteger('_lft');
			$table->unsignedInteger('_rgt');
			$table->unsignedInteger('parent_id')->nullable();

			$table->index([ '_lft', '_rgt', 'parent_id' ]);
					});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('servicecategories');
	}

}
