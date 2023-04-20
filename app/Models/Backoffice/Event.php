<?php

namespace App\Models\Backoffice;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;

    protected $table = 'events';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'title',
        'date',
        'content',
        'path',
        'directory',
        'filename'
    ];

    
    public function getThumbnail(){
        return $this->directory.'/'.$this->filename;
    }
}
