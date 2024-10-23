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
        Schema::create('t_obstetrical', function (Blueprint $table) {
            $table->id();
            $table->string('obs_gravidity'); // Gravidity (total number of pregnancies)
            $table->string('obs_parity'); // Parity (number of pregnancies carried to viable gestational age)
            $table->string('obs_num_full_term'); // Full-term pregnancies
            $table->string('obs_num_premature'); // Premature births
            $table->string('obs_num_abortion'); // Abortions
            $table->string('obs_num_living_children'); // Living children
            $table->string('obs_last_delivery_date'); // Date of last delivery (as string)
            $table->string('obs_last_delivery_type'); // Type of delivery: Vaginal/Cesarean
            $table->string('obs_last_menstrual_period'); // Last menstrual period (as string)
            $table->string('obs_menstrual_flow'); // Menstrual flow: Scanty/Moderate/Heavy
            $table->string('obs_dysmenorrhea'); // Dysmenorrhea (Yes/No as string)
            $table->string('obs_hydatidiform_mole'); // Hydatidiform mole (Yes/No as string)
            $table->string('obs_ectopic_pregnancy'); // History of ectopic pregnancy (Yes/No as string)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_obstetrical');
    }
};
