<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlternatifProcess extends Model
{
    protected $table='alternatif_procces';
    protected $fillable = ['id_kost1','id_kost2','id_user','hasil','id_criteria'];
}
