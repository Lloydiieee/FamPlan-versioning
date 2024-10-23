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
        Schema::create('t_medical', function (Blueprint $table) {
            $table->id();
            $table->string('med_severe_headaches_migraine');
            $table->string('med_history_of_stroke_heart_attack_hypertension');
            $table->string('med_non_traumatic_hematoma_frequent_bruising');
            $table->string('med_history_of_breast_cancer_mass');
            $table->string('med_severe_chest_pain');
            $table->string('med_cough_more_than_14_days');
            $table->string('med_jaundice');
            $table->string('med_unexplained_vaginal_bleeding');
            $table->string('med_abnormal_vaginal_discharge');
            $table->string('med_anti_seizure_or_rifampicin');
            $table->string('med_smoker');
            $table->string('med_disability');  
            $table->string('med_disability_details');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_medical');
    }
};
