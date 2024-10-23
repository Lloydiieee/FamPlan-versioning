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
        Schema::create('t_examination', function (Blueprint $table) {
            $table->id();
            
            // General information
            $table->string('exm_weight');
            $table->string('exm_height');
            $table->string('exm_blood_pressure');
            $table->string('exm_pulse_rate');
            
            // Skin
            $table->string('exm_skin'); // Options: normal, pale, yellowish, hematoma
            
            // Conjunctiva
            $table->string('exm_conjunctiva'); // Options: normal, pale, yellowish
            
            // Neck
            $table->string('exm_neck'); // Options: normal, neck mass, enlarged lymph nodes
            
            // Breast
            $table->string('exm_breast'); // Options: normal, mass, nipple discharge
            
            // Abdomen
            $table->string('exm_abdomen'); // Options: normal, abdominal mass, varicosities
            
            // Extremities
            $table->string('exm_extremities'); // Options: normal, edema, varicosities
            
            // Pelvic examination (for IUD acceptors)
            $table->string('exm_pelvic_mass'); // Mass: Yes/No
            $table->string('exm_pelvic_abnormal_discharge'); // Abnormal discharge: Yes/No
            $table->string('exm_pelvic_cervical_abnormalities'); // Cervical abnormalities: Yes/No
            $table->string('exm_pelvic_warts'); // Warts: Yes/No
            $table->string('exm_pelvic_polyp_or_cyst'); // Polyp/Cyst: Yes/No
            $table->string('exm_pelvic_inflammation_or_erosion'); // Inflammation/Erosion: Yes/No
            $table->string('exm_pelvic_bloody_discharge'); // Bloody discharge: Yes/No
            $table->string('exm_pelvic_cervical_consistency'); // Cervical consistency: firm/soft
            $table->string('exm_pelvic_cervical_tenderness'); // Cervical tenderness: Yes/No
            $table->string('exm_pelvic_adnexal_mass_tenderness'); // Adnexal mass/tenderness: Yes/No
            
            // Uterine information
            $table->string('exm_uterine_position'); // Position: mid, anteflexed, retroflexed
            $table->string('exm_uterine_depth'); // Uterine depth: in cm
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_examination');
    }
};
