<?php

namespace App\Repositories\Backoffice;
use App\Domain\Interfaces\Repositories\Backoffice\IAccountRepository;

use App\Logic\ImageUploader as UploadLogic;
use App\Models\User as Model;
use App\Models\Backoffice\Alumni;
use DB, Str;

class AccountRepository extends Model implements IAccountRepository
{

    public function fetch($id){
        return $this->find($id);
    }

    public function saveData($request){
        // DB::beginTransaction();
        // try {
            $user = $this->find(auth()->user()->id);
            $user->name = $request->fname.' '.$request->lname;
            $user->username = $request->email;
            $user->email = $request->email;
            $user->contact_number = $request->contact_number;

            $user->save();

            $data = Alumni::find(auth()->user()->alumni->id);

            $data->fname = $request->fname;
            $data->mname = $request->mname;
            $data->lname = $request->lname;
            $data->email = $request->email;
            $data->contact_number = $request->contact_number;
            $data->gender = $request->gender;
            $data->year_graduated = $request->year_graduated;
            $data->course = $request->course;
            $data->company = $request->company;
            $data->work_position = $request->work_position;

            if($request->hasFile('file')){
                $upload = UploadLogic::upload($request->file,'storage/alumni');
                $data->path = $upload["path"];
                $data->directory = $upload["directory"];
                $data->filename = $upload["filename"];
            }

            $data->save();

            DB::commit();

            return $data;
        // } catch (\Exception $e) {
        //      DB::rollback();
        //      return false;
        // }
    }

    public function findOrFail($id){
        $data = $this->find($id);
        if(!$data){
            return false;
        }
        return $data;
    }
}
