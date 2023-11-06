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
        Schema::create('StudentsBio', function (Blueprint $table) {
            $table->id();
            $table->integer('batch');
            $table->dateTime('date_of_admission');
            $table->integer('admission_number');
            $table->string('name');
            $table->enum('gender', ['M', 'F', 'O']);
            $table->dateTime('dob');
            $table->integer('age');
            $table->enum('religion', ['H', 'M', 'C']);
            $table->string('community');
            $table->string('caste');
            $table->enum('nationality', ['I', 'O']);           
            $table->enum('mother_tongue', ['Tamil', 'Telungu', 'Kannada', 'Others']);
            $table->integer('enrollment_number');
            $table->integer('contact_number');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('email');
            $table->string('permanent_address');
            $table->string('present_address');
            $table->string('father_occupation');
            $table->string('mother_occupation');
            $table->string('place_of_work');
            $table->string('father_income');
            $table->string('mother_income');
            $table->string('emis_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('StudentBio');
    }
};
