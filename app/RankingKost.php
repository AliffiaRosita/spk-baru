<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RankingKost extends Model
{
    protected $table ='ranking_kost';
    protected $fillable =['id_user','id_kost','composit_weight'];

    public function kosts()
    {
       return $this->belongsTo(Kost::class,'id_kost','id');
    }

}
