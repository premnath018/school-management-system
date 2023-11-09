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
        Schema::create('teachers_bios', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('teacher_id');
            $table->date('dob');
            $table->string('permanent_address');
            $table->enum('gender', ['Male', 'Female', 'Others']);
            $table->date('date_of_joining');
            $table->integer('age');
            $table->string('contact_number');
            $table->string('email');
            $table->string('emergency_contact_number');
            $table->string('previous_work_experience');
            $table->integer('total_experience');
            $table->enum('subject', ['Tamil', 'English', 'Maths', 'Social Science', 'Physics', 'Chemistry', 'Zoology', 'Biology']);
            $table->integer('salary');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers_bios');
    }
};
