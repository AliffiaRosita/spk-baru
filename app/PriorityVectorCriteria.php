<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PriorityVectorCriteria extends Model
{
    protected $table= 'priorityvector_criteria';
    protected $fillable =['user_id','kriteria_id','nilai'];

}
