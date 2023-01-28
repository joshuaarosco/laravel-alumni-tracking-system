<?php

namespace App\Models\Backoffice;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Alumni extends Model
{
    use SoftDeletes;

    protected $table = 'alumni';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'user_id',
        'fname',
        'mname',
        'lname',
        'email',
        'gender',
        'batch',
        'course',
        'status',
        'path',
        'directory',
        'filename',
    ];

    public function getAvatar(){
        return $this->directory.'/'.$this->filename;
    }

}
