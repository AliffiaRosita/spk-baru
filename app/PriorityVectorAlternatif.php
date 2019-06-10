<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PriorityVectorAlternatif extends Model
{
    protected $table= 'priorityvector_alternatif';
    protected $fillable =['user_id','kriteria_id','kost_id','nilai'];

}
