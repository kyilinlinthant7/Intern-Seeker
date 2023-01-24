<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    protected $fillable = ['user_id','post_id','subject','description','cv_form'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }


    public function post($value='')
    {
        return $this->belongsTo('App\Post');
    }
}
