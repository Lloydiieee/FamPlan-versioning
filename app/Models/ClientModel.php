<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientModel extends Model
{
    use HasFactory;
    protected $table = 't_client';

    protected $fillable = [
        'c_date_of_visit',
        'c_medical_findings',
        'c_method_accepted',
        'c_name_of_service_provider',
        'c_date_of_follow_up_visit',
        'c_quetsion_1',
        'c_question_2',
        'c_question_3',
        'c_question_4',
        'c_question_5',
        'c_question_6',
    ];
}
