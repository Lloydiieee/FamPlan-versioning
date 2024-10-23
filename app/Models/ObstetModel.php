<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObstetModel extends Model
{
    use HasFactory;

    protected $table = 't_obstetrical';

    protected $fillable=[
        'obs_gravidity',
        'obs_parity',
        'obs_num_full_term',
        'obs_num_premature',
        'obs_num_abortion',
        'obs_num_living_children',
        'obs_last_delivery_date',
        'obs_last_delivery_type',
        'obs_last_menstrual_period',
        'obs_menstrual_flow',
        'obs_dysmenorrhea',
        'obs_hydatidiform_mole',
        'obs_ectopic_pregnancy',
    ];
}
