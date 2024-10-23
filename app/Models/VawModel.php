<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VawModel extends Model
{
    use HasFactory;
    protected $table = 't_vaw';
    protected $fillable = [
        'vaw_unpleasant_relationship',
        'vaw_partner_disapproves_fp_visit',
        'vaw_history_of_domestic_violence',
        'vaw_referred_to_dswd',
        'vaw_referred_to_wcps',
        'vaw_referred_to_ngos',
        'vaw_referred_to_others',
    ];
}
