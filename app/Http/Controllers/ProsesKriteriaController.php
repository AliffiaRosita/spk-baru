<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Criteria;
use App\CriteriaProcess;
use App\PriorityVectorCriteria;
use App\RandomIndex;

class ProsesKriteriaController extends Controller
{
    public function formKriteria()
    {
        $kriterias = Criteria::all();
        $count_kriteria = Criteria::count();
        $index = 0;
        $old_value = CriteriaProcess::where('id_user','1')->get();
        return view('perbandingan.form-perbandingan', ['kriterias'=>$kriterias,'count_kriteria'=>$count_kriteria,'index'=>$index,'old_value'=>$old_value]);
    }

    public function proses(Request $request)
    {
        $kriteria = Criteria::all();
        $count_kriteria = Criteria::count();
        $matriks =[];
        $index = 0;

        //membuat matriks
        for ($i=0; $i <= $count_kriteria-2 ; $i++) {
            for ($j=$i+1; $j <= $count_kriteria-1 ; $j++) {
                $index++;
                $selected = $request->selected[$index];
                $nilai = $request->nilai[$index];
                if ($selected == 'kriteria1') {
                    $matriks[$i][$j] = $nilai;
                    $matriks[$j][$i] = 1/$nilai;
                }else{
                    $matriks[$j][$i] = $nilai;
                    $matriks[$i][$j] = 1/$nilai;
                }
                //jika ada id kriteria 1, 2 dan id usernya sesuai maka akan dilakukan update pada hasil
                // jika tidak ada maka akan menginsert
                CriteriaProcess::updateOrCreate(
                    [
                    'id_criteria1'=> $kriteria[$i]->id,
                    'id_criteria2'=> $kriteria[$j]->id,
                    'id_user'=> 1,
                    ],
                    [
                        'hasil'=> $matriks[$i][$j],
                    ]
            );
            }
        }

        for ($i=0; $i <= $count_kriteria-1 ; $i++) {
            $matriks[$i][$i] = 1;
        }

        //memasukkan nilai dari matriks yg ada
        $jml_baris =[];
        $jml_kolom =[];
        for ($i=0; $i <=$count_kriteria-1 ; $i++) {
            $jml_baris[$i] = 0;
            $jml_kolom[$i] = 0;
        }
        for ($i=0; $i <=$count_kriteria-1; $i++) {
            for ($j=0; $j <=$count_kriteria-1 ; $j++) {
                $nilai = $matriks[$i][$j];
                $jml_baris[$j]+=$nilai;
            }
        }
        // menghitung jumlah baris yg sudah berisi nilai
        $priority_vector=[];
        for ($i=0; $i <=$count_kriteria-1; $i++) {
            for ($j=0; $j <=$count_kriteria-1 ; $j++) {
               $matriks_hasilBagi[$i][$j]= $matriks[$i][$j]/$jml_baris[$j];
               $nilai = $matriks_hasilBagi[$i][$j];
               $jml_kolom[$i]+=$nilai;
            }
            $priority_vector[$i]= $jml_kolom[$i]/$count_kriteria;
            PriorityVectorCriteria::updateOrCreate([
                'user_id'=> 1,
                'kriteria_id'=> $kriteria[$i]->id,

            ],[
                'nilai'=>$priority_vector[$i],
            ]);
        }

        //menghitung lamdamax (eigen value max)

        $eigenvalue = 0;
        for ($i=0; $i <= $count_kriteria-1; $i++) {
            $eigenvalue+= $jml_baris[$i]*$priority_vector[$i];
        }

        $consistency_index = ($eigenvalue-$count_kriteria) / ($count_kriteria-1);
        $nilai_ri = RandomIndex::where('banyak_kriteria',$count_kriteria)->get();
        $consistency_ratio= $consistency_index/$nilai_ri[0]->nilai;
        return view('perbandingan.hasil_perhitungan_kriteria',[
            'kriteria'=>$kriteria,
            'count_kriteria'=>$count_kriteria,
            'matriks'=>$matriks,
            'priority_vector'=>$priority_vector,
            'eigenvalue'=>$eigenvalue,
            'consistency_index'=>$consistency_index,
            'consistency_ratio'=>$consistency_ratio,
            'jml_baris'=>$jml_baris,
        ]);
    }


}
