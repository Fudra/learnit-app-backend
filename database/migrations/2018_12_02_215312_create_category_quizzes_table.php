<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_quizzes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->index()->unsigned();
            $table->integer('quiz_id')->index()->unsigned();
            $table->timestamps();

            $table->foreign('category_id')
                ->references('id')->on('category')
                ->onDelete('cascade');

            $table->foreign('quiz_id')
                ->references('id')->on('quizzes')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_quizzes');
    }
}
