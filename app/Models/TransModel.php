<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransModel extends Model
{
    use HasFactory;
    protected $table = 't_transmitted';
    protected $fillable=[
        'trans_abnormal_discharge',
        'trans_discharge_from',
        'trans_sores_or_ulcers',
        'trans_genital_pain',
        'trans_treatment_for_stis',
        'trans_hiv_aids_pelvic_disease',
    ];
}
