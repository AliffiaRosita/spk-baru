<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CriteriaProcess extends Model
{
    protected $table = 'criteria_procces';
    protected $fillable = ['id_criteria1','id_criteria2','id_user','hasil'];
}
