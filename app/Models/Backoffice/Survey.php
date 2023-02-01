<?php

namespace App\Models\Backoffice;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Survey extends Model
{
    use SoftDeletes;

    protected $table = 'survey_responses';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'alumni_id',
        'question_1_a',
        'question_1_b',
        'question_1_yes',
        'question_2',
        'question_3',
        'question_4',
        'question_5',
        'question_6',
        'question_7_a',
        'question_7_b',
        'question_7_c',
        'question_7_d',
        'question_7_e',
        'question_7_f',
        'question_8',
        'question_9',
        'question_10',
    ];

    public function alumni(){
        return $this->belongsTo('App\Models\Backoffice\Alumni', 'alumni_id','id');
    }
}
