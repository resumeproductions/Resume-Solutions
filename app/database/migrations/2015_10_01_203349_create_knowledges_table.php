<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKnowledgesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('knowledges', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('knowledge_item')->nullable();
			$table->string('sub_title')->nullable();
			$table->string('sub_percent')->nullable();
			$table->string('sub_head')->nullable();
			$table->string('sub_foot')->nullable();
			$table->integer('template_id')->unsigned();
			$table->foreign('template_id')->references('id')->on('templates');
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
		Schema::drop('knowledges');
	}

}
