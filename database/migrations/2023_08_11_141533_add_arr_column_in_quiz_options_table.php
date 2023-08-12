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
        Schema::table('quiz_options', function (Blueprint $table) {
            $table->string('option1_ar')->nullable();
            $table->string('option2_ar')->nullable();
            $table->string('option3_ar')->nullable();
            $table->string('option4_ar')->nullable();
            $table->string('correct_answer_ar')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('quiz_options', function (Blueprint $table) {
            //
        });
    }
};
