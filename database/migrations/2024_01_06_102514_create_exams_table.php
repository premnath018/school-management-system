<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterExamsTable extends Migration
{
    public function up()
    {
        Schema::create('master_exams', function (Blueprint $table) {
            $table->id();
            $table->string('exam_code', 10);
            $table->unsignedBigInteger('class_id');
            $table->string('subject_code', 5);
            $table->enum('type', ['cycle', 'term', 'final']);
            $table->unsignedInteger('maximum_mark');
            $table->Time('start_time');
            $table->Time('end_time');
            $table->date('exam_date');
            $table->string('question_paper_url')->nullable(); // New column for the PDF URL
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('master_exams');
    }
}
