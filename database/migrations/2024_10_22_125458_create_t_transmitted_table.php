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
        Schema::create('t_transmitted', function (Blueprint $table) {
            $table->id();
            $table->string('trans_abnormal_discharge'); // Abnormal discharge
            $table->string('trans_discharge_from'); // Discharge from: Vagina/Penis
            $table->string('trans_sores_or_ulcers'); // Sores or ulcers in the genital area
            $table->string('trans_genital_pain'); // Pain or burning in the genital area
            $table->string('trans_treatment_for_stis'); // History of treatment for STIs
            $table->string('trans_hiv_aids_pelvic_disease'); // HIV/AIDS or pelvic inflammatory disease
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_transmitted');
    }
};
