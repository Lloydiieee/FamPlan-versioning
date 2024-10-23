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
        Schema::create('t_vaw', function (Blueprint $table) {
            $table->id();
            $table->string('vaw_unpleasant_relationship')->nullable(); // Yes/No
            $table->string('vaw_partner_disapproves_fp_visit')->nullable(); // Yes/No
            $table->string('vaw_history_of_domestic_violence')->nullable(); // Yes/No

            // Referral options
            $table->string('vaw_referred_to_dswd')->nullable(); // Yes/No
            $table->string('vaw_referred_to_wcps')->nullable(); // Yes/No
            $table->string('vaw_referred_to_ngos')->nullable(); // Yes/No
            $table->string('vaw_referred_to_others')->nullable(); // Text input for other options

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_vaw');
    }
};
