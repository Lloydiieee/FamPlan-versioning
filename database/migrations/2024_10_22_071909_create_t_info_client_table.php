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
        Schema::create('t_info_client', function (Blueprint $table) {
            $table->id();
            
            // Client information
            $table->string('info_client_id');
            $table->string('info_philhealth_no');
            $table->string('info_4ps');
            $table->string('info_nhts');
            $table->string('info_name_last');
            $table->string('info_name_given');
            $table->string('info_name_mi');
            $table->string('info_dob'); 
            $table->string('info_age');
            $table->string('info_educ_attain');
            $table->string('info_occupation');
            $table->string('info_address_no');
            $table->string('info_address_street');
            $table->string('info_address_barangay');
            $table->string('info_address_city');
            $table->string('info_address_province');
            $table->string('info_contact_number');
            $table->string('info_civil_status');
            $table->string('info_religion');
            
            // Spouse information
            $table->string('info_spouse_last');
            $table->string('info_spouse_given');
            $table->string('info_spouse_mi');
            $table->string('info_spouse_dob');
            $table->string('info_spouse_age');
            $table->string('info_spouse_occupation');

            // Family information
            $table->string('info_no_of_living_children');
            $table->string('info_plan_to_have_more_children');
            $table->string('info_average_monthly_income');

            // Client Type and Method
            $table->string('info_type_of_client'); //select box
            $table->string('info_reason_for_fp');   //select box
            $table->string('info_method_currently_used'); //select box
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_info_client');
    }
};
