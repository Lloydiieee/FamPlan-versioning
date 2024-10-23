<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoModel extends Model
{
    use HasFactory;
    protected $table = 't_info_client';

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        // Client information
        'info_client_id',
        'info_philhealth_no',
        'info_nhts',
        'info_4ps',
        'info_name_last',
        'info_name_given',
        'info_name_mi',
        'info_dob',
        'info_age',
        'info_educ_attain',
        'info_occupation',
        'info_address_no',
        'info_address_street',
        'info_address_barangay',
        'info_address_city',
        'info_address_province',
        'info_contact_number',
        'info_civil_status',
        'info_religion',

        // Spouse information
        'info_spouse_last',
        'info_spouse_given',
        'info_spouse_mi',
        'info_spouse_dob',
        'info_spouse_age',
        'info_spouse_occupation',

        // Family information
        'info_no_of_living_children',
        'info_plan_to_have_more_children',
        'info_average_monthly_income',

        // Client Type and Method
        'info_type_of_client',
        'info_reason_for_fp',
        'info_method_currently_used',
    ];
}
