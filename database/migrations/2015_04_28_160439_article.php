<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Article extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('article', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('created_by');
            $table->string('title');
            $table->text('body');
            $table->timestamps();
            $table->timestamp('published_at');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('article');
	}

}
