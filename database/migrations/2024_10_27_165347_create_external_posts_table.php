<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExternalPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('external_posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // This should reference the User ID if applicable
            $table->string('title');
            $table->text('body');
            $table->timestamps();

            // You may want to add a foreign key constraint if user_id references users table
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('external_posts');
    }
}
