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
        Schema::create('students_bios', function (Blueprint $table) {
            $table->id();
            $table->integer('batch');
            $table->date('date_of_admission');
            $table->integer('admission_number');
            $table->string('name');
            $table->enum('gender', ['Male', 'Female', 'Others']);
            $table->date('dob');
            $table->integer('age');
            $table->enum('religion', ['Hindu', 'Muslim', 'Christian', 'Others']);
            $table->string('community');
            $table->string('caste');
            $table->enum('nationality', ['Indian', 'Others']);
            $table->enum('mother_tongue', ['Tamil', 'Telugu', 'Kannada', 'Others']);
            $table->enum('blood_group', ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-', 'Others']);
            $table->integer('enrollment_number');
            $table->string('contact_number');
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
            $table->integer('class_id');
            $table->integer('fees');
            $table->integer('paid_fees');
            $table->integer('extra_fees');
            $table->integer('extra_paid_fees');
            $table->enum('fee_status', ['Paid', 'Unpaid']);
            $table->integer('present_days');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students_bios');
    }
};
