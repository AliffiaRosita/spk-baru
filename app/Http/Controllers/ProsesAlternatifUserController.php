<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AlternatifProcess;
use App\Kost;
use App\Criteria;
use App\RandomIndex;
use App\PriorityVectorAlternatif;
use App\PriorityVectorCriteria;
use App\RankingKost;
use Illuminate\Support\Facades\Auth;

class ProsesAlternatifUserController extends Controller
{
    public function formAlternatif($jenis)
    {
        $kriterias = Criteria::all()[$jenis];
        $count_kost = Kost::count();
        $kost = Kost::all();
        $index = 0;
        $old_value = AlternatifProcess::where('id_user',Auth::id())->where('id_criteria',$kriterias->id)->get();

        return view('perbandingan-user.form-perbandinganAlternatif', ['kriterias'=>$kriterias,'count_kost'=>$count_kost,'index'=>$index,'old_value'=>$old_value,'kost'=>$kost,'jenis'=>$jenis]);
    }
    public function proses(Request $request, $jenis)
    {
        $kost = Kost::all();
        $kriterias = Criteria::all()[$jenis];
        $count_kost = Kost::count();
        $count_kriteria = Criteria::count();
        $matriks =[];
        $index = 0;

        //membuat matriks
        for ($i=0; $i <= $count_kost-2 ; $i++) {
            for ($j=$i+1; $j <= $count_kost-1 ; $j++) {
                $index++;
                $selected = $request->selected[$index];
                $nilai = $request->nilai[$index];
                if ($selected == 'kost1') {
                    $matriks[$i][$j] = $nilai;
                    $matriks[$j][$i] = 1/$nilai;
                }else{
                    $matriks[$j][$i] = $nilai;
                    $matriks[$i][$j] = 1/$nilai;
                }
                AlternatifProcess::updateOrCreate(
                    [
                    'id_kost1'=> $kost[$i]->id,
                    'id_kost2'=> $kost[$j]->id,
                    'id_user'=>Auth::id(),
                    'id_criteria'=>$kriterias->id,
                    ],
                    [
                        'hasil'=> $matriks[$i][$j],
                    ]
            );
            }
        }

        for ($i=0; $i <= $count_kost-1 ; $i++) {
            $matriks[$i][$i] = 1;
        }

        //memasukkan nilai dari matriks yg ada
        $jml_baris =[];
        $jml_kolom =[];
        for ($i=0; $i <=$count_kost-1 ; $i++) {
            $jml_baris[$i] = 0;
            $jml_kolom[$i] = 0;
        }
        for ($i=0; $i <=$count_kost-1; $i++) {
            for ($j=0; $j <=$count_kost-1 ; $j++) {
                $nilai = $matriks[$i][$j];
                $jml_baris[$j]+=$nilai;
            }
        }
        // menghitung jumlah baris yg sudah berisi nilai
        $priority_vector=[];
        for ($i=0; $i <=$count_kost-1; $i++) {
            for ($j=0; $j <=$count_kost-1 ; $j++) {
               $matriks_hasilBagi[$i][$j]= $matriks[$i][$j]/$jml_baris[$j];
               $nilai = $matriks_hasilBagi[$i][$j];
               $jml_kolom[$i]+=$nilai;
            }
            $priority_vector[$i]= $jml_kolom[$i]/$count_kost;
            PriorityVectorAlternatif::updateOrCreate([
                'user_id'=> Auth::id(),
                'kost_id'=> $kost[$i]->id,
                'kriteria_id'=>$kriterias->id,

            ],[
                'nilai'=>$priority_vector[$i],
            ]);
        }

        //menghitung lamdamax (eigen value max)

        $eigenvalue = 0;
        for ($i=0; $i <= $count_kost-1; $i++) {
            $eigenvalue+= $jml_baris[$i]*$priority_vector[$i];
        }

        $consistency_index = ($eigenvalue-$count_kost) / ($count_kost-1);
        $nilai_ri = RandomIndex::where('banyak_kriteria',$count_kost)->get();
        $consistency_ratio= $consistency_index/$nilai_ri[0]->nilai;

        return view('perbandingan-user.hasil_perhitungan_kost',[
            'kriterias'=>$kriterias,
            'kost'=>$kost,
            'count_kost'=>$count_kost,
            'matriks'=>$matriks,
            'priority_vector'=>$priority_vector,
            'eigenvalue'=>$eigenvalue,
            'consistency_index'=>$consistency_index,
            'consistency_ratio'=>$consistency_ratio,
            'jml_baris'=>$jml_baris,
            'jenis'=>$jenis,
            'count_kriteria'=>$count_kriteria,
        ]);
    }

    public function hasil()
    {
        $pv_kriteria = PriorityVectorCriteria::where('user_id','3')->get();
        $pv_alternatif = PriorityVectorAlternatif::where('user_id','3')->get();
        $count_kriteria= Criteria::count();
        $count_kost = Kost::count();
        $kriteria = Criteria::all();
        $kost = Kost::all();
        $index = 0;
        $matriks = [];
        $matriks_terbobot =[];
        $composite_weight = [];
        $jumlah =0;
        $rankings = [];
        for ($i=0; $i <$count_kriteria ; $i++) {
            for ($j=0; $j <$count_kost ; $j++) {
                $matriks[$i][$j] = $pv_alternatif[$index]->nilai;
                $index++;
            }
        }

        for ($i=0; $i <$count_kriteria ; $i++) {
            for ($j=0; $j <$count_kost ; $j++) {
                $matriks_terbobot[$i][$j]= $matriks[$i][$j]*$pv_kriteria[$i]->nilai;
            }
        }

        for ($i=0; $i <$count_kost ; $i++) {
            $jumlah = 0;
            for ($j=0; $j <$count_kriteria ; $j++) {
                $jumlah += $matriks_terbobot[$j][$i];
            }
        $composite_weight[$i]= $jumlah;
        RankingKost::updateOrCreate(
            [
                'id_user'=>Auth::id(),
                'id_kost'=>$kost[$i]->id,
            ],
            [
                'composit_weight'=>$composite_weight[$i],
            ]
        );
        }
          $rankings = RankingKost::where('id_user','3')->orderBy('composit_weight','desc')->get();

        return view('perbandingan-user.hasil_perengkingan',[
            'count_kriteria'=>$count_kriteria,
            'count_kost'=> $count_kost,
            'kost'=> $kost,
            'kriteria'=>$kriteria,
            'matriks'=>$matriks,
            'composite_weight'=>$composite_weight,
            'pv_kriteria'=>$pv_kriteria,
            'rankings'=>$rankings,
        ]);

    }
}
