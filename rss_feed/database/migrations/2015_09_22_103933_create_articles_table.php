<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration {

	public function up()
	{
		Schema::create('articles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title',200);
			$table->string('url',125);
			$table->string('thumnail_url',125);
			$table->text('summary');
			$table->longText('content');
			$table->dateTime('publish_date');
			$table->integer('id_category');
			$table->integer('id_website');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('articles');
	}

}
