<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['user_id','title','intern_field','no_of_position','skill_required','deadline','duration','detail'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
