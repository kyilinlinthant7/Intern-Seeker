<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['type_id','user_id','company_name','phone','address','ceo_name','hr_manager','description','website','profile'];

}
