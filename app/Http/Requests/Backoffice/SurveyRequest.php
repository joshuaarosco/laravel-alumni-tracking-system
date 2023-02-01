<?php

namespace App\Http\Requests\Backoffice;

use Illuminate\Foundation\Http\FormRequest;

class SurveyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'gender' => "required",
            'year_graduated' => "required",
            'course' => "required",
            'company' => "required",
            'work_position' => "required",

            'question_1_a' => "required",
            'question_1_b' => "required",
            'question_2' => "required",
            'question_3' => "required",
            'question_4' => "required",
            'question_5' => "required",
            'question_6' => "required",
            'question_7_a' => "required",
            'question_7_b' => "required",
            'question_7_c' => "required",
            'question_7_d' => "required",
            'question_7_e' => "required",
            'question_7_f' => "required",
            'question_8' => "required",
            'question_9' => "required",
            'question_10' => "required",
        ];
    }
}
