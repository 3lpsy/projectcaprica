<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function($table) {
			$table->increments('id');
			$table->string('title');
			$table->integer('category_id')->unsigned();
			$table->foreign('category_id')
				->references('id')
				->on('categories')
				->onDelete('cascade');
			$table->integer('vendor_id')->unsigned();
			$table->foreign('vendor_id')
				->references('id')
				->on('users')
				->onDelete('cascade');
			$table->text('description');
			$table->decimal('price', 6, 2);
			$table->boolean('stock')->default(1);
			$table->string('image');
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
		Schema::table('products', function($table) {
			$table->dropForeign('products_category_id_foreign');
		});
		Schema::drop('products');

	}

}
