<?php

namespace App\Repositories\Backoffice;
use App\Domain\Interfaces\Repositories\Backoffice\IEventsRepository;

use App\Logic\ImageUploader as UploadLogic;
use App\Models\Backoffice\Event as Model;
use DB, Str;

class EventsRepository extends Model implements IEventsRepository
{

    public function fetch(){
        return $this->all();
    }

    public function saveData($request){
        DB::beginTransaction();
        try {
            $data = $this->find($request->id)?:new self;

            $data->title = $request->title;
            $data->date = $request->date;
            $data->content = $request->content;
            
            if($request->hasFile('file')){
                $upload = UploadLogic::upload($request->file,'storage/events');
                $data->path = $upload["path"];
                $data->directory = $upload["directory"];
                $data->filename = $upload["filename"];
            }  

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
