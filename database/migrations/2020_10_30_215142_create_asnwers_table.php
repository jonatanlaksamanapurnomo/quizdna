<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsnwersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asnwers', function (Blueprint $table) {
            $table->increments("id");
            $table->text("answer");
            $table->string("score");
            $table->string("typingdna_score");
            $table->integer('exam_id')->unsigned();
            $table->foreign('exam_id')->references('id')->on('exams')->onDelete('cascade');
            $table->integer('student_id')->unsigned();
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
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
        Schema::dropIfExists('asnwers');
    }
}
