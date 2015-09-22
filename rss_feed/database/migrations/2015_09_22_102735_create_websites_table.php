<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebsitesTable extends Migration {

	public function up()
	{
		Schema::create('websites', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name',50);
			$table->string('url',125);
			$table->string('rss_url',125);
			$table->integer('id_category');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('websites');
	}

}
