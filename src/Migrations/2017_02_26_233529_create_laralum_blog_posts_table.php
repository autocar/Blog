<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLaralumBlogPostsTable extends Migration {

	public function up()
	{
		Schema::create('laralum_blog_posts', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('category_id');
			$table->string('title');
			$table->text('content');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('laralum_blog_posts');
	}
}