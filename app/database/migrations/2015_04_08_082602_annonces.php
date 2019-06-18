<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Annonces extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('annonces', function($table) {
			$table->increments('id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
			$table->string('categorie');
			$table->string('partoupro');
			$table->string('type');
			$table->string('region');
			$table->string('departement');
			//$table->string('ville');
			$table->integer('prix');
			$table->string('telephone', 10)->nullable();
			$table->text('titre');
			$table->text('texte');
			$table->string('image');
			$table->string('imageD')->nullable();
			$table->string('imageT')->nullable();
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
		//
	}

}
