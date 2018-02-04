<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');

            $table->integer("id_article")->unsigned();;
            $table->foreign('id_article')->references('id')->on('articles');

            $table->integer("id_user")->unsigned();
            $table->foreign('id_user')->references('id')->on('users');

            $table->string("title");
            $table->longText("content");
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
        Schema::dropIfExists('comments');
    }
}
