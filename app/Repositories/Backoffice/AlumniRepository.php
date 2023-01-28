<?php

namespace App\Repositories\Backoffice;
use App\Domain\Interfaces\Repositories\Backoffice\IAlumniRepository;

use App\Models\Backoffice\Alumni;
use App\Models\User as Model;
use DB, Str;

class AlumniRepository extends Model implements IAlumniRepository
{

    public function fetch(){
        return Alumni::all();
    }

    public function saveData($request){
        DB::beginTransaction();
        try {
            $user = $this->find($request->id);
            $alumni = $user? Alumni::where('user_id', $user->id)->first() :new Alumni;
            $password = Str::random(8);
            if(!$user){
                $user = new self;
                $user->password = bcrypt($password);
            }
            $user->name = $request->fname.' '.$request->lname;
            $user->username = $request->email;
            $user->type = 'alumni';
            $user->email = $request->email;
            $user->contact_number = $request->contact_number;
            
            //set and save password if theres no user fetch

            $user->save();

            $alumni->user_id = $user->id;
            $alumni->fname = $request->fname;
            $alumni->mname = $request->mname;
            $alumni->lname = $request->lname;
            $alumni->email = $request->email;
            $alumni->contact_number = $request->contact_number;
            $alumni->gender = $request->gender;
            $alumni->batch = $request->batch;
            $alumni->course = $request->course;
            $alumni->status = $request->status;

            if($request->hasFile('file')){
                $upload = UploadLogic::upload($request->file,'storage/alumni');
                $alumni->path = $upload["path"];
                $alumni->directory = $upload["directory"];
                $alumni->filename = $upload["filename"];
            }

            $alumni->save();

            DB::commit();
            $user->password = $password;
            return $user;
        } catch (\Exception $e) {
            DB::rollback();
            return false;
        }
    }

    public function findOrFail($id){
        $data = Alumni::find($id);
        if(!$data){
            return false;
        }
        return $data;
    }

    public function deleteData($id){
        DB::beginTransaction();
        try {
            Alumni::destroy($id);
            DB::commit();
            return true;
        } catch (\Exception $e) {
            DB::rollback();
            return false;
        }
    }
}
