<?php

namespace App\Repositories\Backoffice;
use App\Domain\Interfaces\Repositories\Backoffice\ISurveyRepository;

use App\Services\ImageUploader as UploadLogic;
use App\Models\Backoffice\Survey as Model;
use DB, Str;

class SurveyRepository extends Model implements ISurveyRepository
{

    public function fetch(){
        return $this->all();
    }

    public function saveData($request){
        DB::beginTransaction();
        try {
            $data = $this->where('alumni_id', auth()->user()->alumni->id)->first();
            if(!$data){
                $data = new self;
                $data->alumni_id = auth()->user()->alumni->id;
            }
            $alumni = auth()->user()->alumni;
            $alumni->gender = $request->gender;
            $alumni->year_graduated = $request->year_graduated;
            $alumni->course = $request->course;
            $alumni->company = $request->company;
            $alumni->work_position = $request->work_position;

            $alumni->save();

            $data->question_1_a = $request->question_1_a;
            $data->question_1_b = $request->question_1_b;
            $data->question_1_yes = $request->question_1_yes;
            $data->question_2 = $request->question_2;
            $data->question_3 = $request->question_3;
            $data->question_4 = $request->question_4;
            $data->question_5 = $request->question_5;
            $data->question_6 = $request->question_6;
            $data->question_7_a = $request->question_7_a;
            $data->question_7_b = $request->question_7_b;
            $data->question_7_c = $request->question_7_c;
            $data->question_7_d = $request->question_7_d;
            $data->question_7_e = $request->question_7_e;
            $data->question_7_f = $request->question_7_f;
            $data->question_8 = $request->question_8;
            $data->question_9 = $request->question_9;
            $data->question_10 = $request->question_10;       

            $data->save();

            DB::commit();

            return $data;
        } catch (\Exception $e) {
             DB::rollback();
             return false;
        }
    }

    public function findOrFail($id){
        $data = $this->find($id);
        if(!$data){
            return false;
        }
        return $data;
    }

    public function deleteData($id){
        DB::beginTransaction();
        try {
            $this->destroy($id);
            DB::commit();
            return true;
        } catch (\Exception $e) {
            DB::rollback();
            return false;
        }
    }
}
