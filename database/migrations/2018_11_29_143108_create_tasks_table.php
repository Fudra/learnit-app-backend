<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('quiz_id')->unsigned()->index();
            $table->integer('task_type_id')->unsigned()->index();
            $table->string('text');
            $table->integer('order')->unsigned();
            $table->text('description')->nullable();
            $table->timestamps();

            $table->foreign('quiz_id')
                ->references('id')->on('quizzes')
                ->onDelete('cascade');

            $table->foreign('task_type_id')
                ->references('id')->on('task_types')
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
        Schema::dropIfExists('tasks');
    }
}
