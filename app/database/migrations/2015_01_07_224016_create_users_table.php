<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table) {
			$table->increments('id');
			$table->string('username');
			$table->string('password');
			$table->string('email');
			$table->integer('vendor_id')->default(0);
			$table->boolean('is_admin')->default(0);
			$table->boolean('delivery_type')->default(0);
			$table->text('description')->nullable();
			$table->text('build')->nullable();
			$table->text('brand')->nullable();
			$table->integer('max_x')->nullable();
			$table->integer('max_y')->nullable();
			$table->integer('max_z')->nullable();
			$table->boolean('1.75mmabs')->nullable();
			$table->boolean('3mmabs')->nullable();
			$table->boolean('1.75mmabs')->nullable();
			$table->boolean('3mmabs')->nullable();
			$table->string('city')->nullable();
			$table->string('state')->nullable();
			$table->string('country')->nullable();
			$table->string('postal')->nullable();
			$table->rememberToken();
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
		Schema::drop('users');
	}

}
