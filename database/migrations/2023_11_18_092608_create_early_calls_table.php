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
        Schema::create('early_calls', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('class_id');
            $table->date('entry_date');
            $table->time('entry_time');
            $table->string('reason');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('early_calls');
    }
};
