<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamModel extends Model
{
    use HasFactory;
    protected $table = 't_examination';

    protected $fillable = [
        'exm_weight',
        'exm_height',
        'exm_blood_pressure',
        'exm_pulse_rate',
        'exm_skin',
        'exm_conjunctiva',
        'exm_neck',
        'exm_breast',
        'exm_abdomen',
        'exm_extremities',
        'exm_pelvic_mass',
        'exm_pelvic_abnormal_discharge',
        'exm_pelvic_cervical_abnormalities',
        'exm_pelvic_warts',
        'exm_pelvic_polyp_or_cyst',
        'exm_pelvic_inflammation_or_erosion',
        'exm_pelvic_bloody_discharge',
        'exm_pelvic_cervical_consistency',
        'exm_pelvic_cervical_tenderness',
        'exm_pelvic_adnexal_mass_tenderness',
        'exm_uterine_position',
        'exm_uterine_depth'
    ];
}
