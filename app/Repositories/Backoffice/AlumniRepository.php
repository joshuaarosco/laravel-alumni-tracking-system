<?php

namespace App\Repositories\Backoffice;
use App\Domain\Interfaces\Repositories\Backoffice\IAlumniRepository;

use App\Logic\ImageUploader as UploadLogic;
use App\Models\Backoffice\Alumni;
use App\Models\User as Model;
use Input;
use DB, Str;

class AlumniRepository extends Model implements IAlumniRepository
{
    
    public function fetch(){
        if(Input::has('search') AND Input::get('search') != null){
            $exploded = explode(" ",str_replace(' & ',' ',Input::get('search')));
            $query = Alumni::query();
            foreach ($exploded as $key => $value) {
                $query->where('fname', 'like', "%{$value}%")
                ->orWhere('lname', 'like', "%{$value}%")
                ->orWhere('email', 'like', "%{$value}%")
                ->orWhere('course', 'like', "%{$value}%");
            }
            return $query->get();
        }
        return Alumni::all();
    }
    
    public function saveData($request){
        DB::beginTransaction();
        try {
            $user = $this->find($request->user_id);
            $alumni = $user? Alumni::where('user_id', $user->id)->first() : null;
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
            if(!$alumni){
                $alumni = new Alumni;
                $alumni->user_id = $user->id;
            }
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
    
    public function checkAlumni($request){
        DB::beginTransaction();
        try {
            $alumni = Alumni::where('fname', $request->fname)->where('lname', $request->lname)->where('email', $request->email)->first();
            
            if(!$alumni){
                session()->flash('notification-status', "danger");
                session()->flash('notification-msg', 'The Alumni details you provided does not exist on our list. Please complete your clearance.');
                return false;
            }
            $user = self::where('username', $request->email)->first();
            $password = Str::random(8);
            if(!$user){
                session()->flash('notification-status', "danger");
                session()->flash('notification-msg', 'The Alumni details you provided does not exist on our list. Please complete your clearance.');
                return false;
            }
            
            $user->password = bcrypt($password);
            $user->save();
            
            DB::commit();

            $user->password = $password;
            return $user;
        } catch (\Exception $e) {
            DB::rollback();
            return false;
        }
    }
}
