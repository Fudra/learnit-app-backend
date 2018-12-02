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
            $table->increments('id');
            $table->integer('quiz_id')->index();
            $table->string('text');
            $table->integer('order')->unsigned();
            $table->text('description')->nullable();
            $table->smallInteger('task_type_id')->unsigned();
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
