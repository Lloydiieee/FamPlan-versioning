<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalModel extends Model
{
    use HasFactory;
    protected $table = 't_medical';

    protected $fillable = [
        'med_severe_headaches_migraine',
        'med_history_of_stroke_heart_attack_hypertension',
        'med_non_traumatic_hematoma_frequent_bruising',
        'med_history_of_breast_cancer_mass',
        'med_severe_chest_pain',
        'med_cough_more_than_14_days',
        'med_jaundice',
        'med_unexplained_vaginal_bleeding',
        'med_abnormal_vaginal_discharge',
        'med_anti_seizure_or_rifampicin',
        'med_smoker',
        'med_disability',
        'med_disability_details',
    ];
}
