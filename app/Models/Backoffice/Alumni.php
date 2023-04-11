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
        'related',
        'path',
        'directory',
        'filename',
    ];

    public function getAvatar(){
        return $this->directory.'/'.$this->filename;
    }

    public function survey(){
        return $this->hasOne('App\Models\Backoffice\Survey', 'alumni_id','id');
    }

    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id','id');
    }
}
