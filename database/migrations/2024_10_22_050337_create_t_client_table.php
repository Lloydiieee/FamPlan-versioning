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
        Schema::create('t_client', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'c_date_of_visit'); 
            $table->string(column: 'c_medical_findings'); 
            $table->string(column: 'c_method_accepted'); 
            $table->string(column: 'c_name_of_service_provider'); 
            $table->string(column: 'c_date_of_follow_up_visit'); 
            $table->string(column: 'c_quetsion_1'); 
            $table->string(column: 'c_question_2'); 
            $table->string(column: 'c_question_3'); 
            $table->string(column: 'c_question_4'); 
            $table->string(column: 'c_question_5'); 
            $table->string(column: 'c_question_6'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_client');
    }
};
