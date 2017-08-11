<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    const MASTER    = 'master';

    use SoftDeletes;

    protected $dateFormat = 'U';

    protected $dates = ['deleted_at'];


    public function getHostIdAttribute()
    {
        return str_pad($this->attributes['id'],9,0,STR_PAD_LEFT);
    }

}
