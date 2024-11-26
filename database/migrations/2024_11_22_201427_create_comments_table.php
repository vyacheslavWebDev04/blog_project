<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post_id');
            $table->unsignedBigInteger('user_id');
            $table->text('message');
            $table->timestamps();

            $table->index('post_id', 'comment_post_idx');
            $table->index('user_id', 'comment_user_idx');

            $table->foreign('post_id', 'comment_post_fk')->on('posts')->references('id');
            $table->foreign('user_id', 'comment_user_fk')->on('users')->references('id');


            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
