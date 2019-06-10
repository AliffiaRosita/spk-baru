<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Kost extends Model
{
    protected $fillable =['nama_kost','alamat','no_tlp','jenis_kost','kost_pict','harga'];

    public function rankingkosts()
    {
        return $this->hasMany(RankingKost::class,'id_kost','id');
    }
}
