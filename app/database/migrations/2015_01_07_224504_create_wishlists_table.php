<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWishlistsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wishlists', function($table) {
			$table->increments('id');
			$table->string('title');
			$table->integer('product_id')->unsigned();
			$table->foreign('product_id')
				->references('id')
				->on('products')
				->onDelete('cascade');
			$table->integer('vendor_id');
			$table->foreign('vendor_id')
				->references('id')
				->on('users')
				->onDelete('cascade');
			$table->text('description');
			$table->integer('category_id')->unsigned();
			$table->foreign('category_id')
				->references('id')
				->on('categories')
				->onDelete('cascade');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')
				->references('id')
				->on('users')
				->onDelete('cascade');
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
		Schema::table('wishlists', function($table) {
			$table->dropForeign('wishlists_product_id_foreign');
			$table->dropForeign('wishlists_vendor_id_foreign');
			$table->dropForeign('wishlists_category_id_foreign');
			$table->dropForeign('wishlists_user_id_foreign');
		});

		Schema::drop('wishlists');
	}

}
