@extends('template.admin-master')
@section('content')

<div class="row justify-content-left">
    <div class="col-lg-9 offset-md-1">
        <div class="card">
            <div class="card-body">
                <div class="progress mb">
                    <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 15%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-1">
        <div class="card">
            <div class="card-body" style="height: 55px">

                <!---- pakai if buat nampilin tombol kembali kalau admin ke dashadmin , kalau userke dash user -->
                <a href="{{route('dashboarduser')}}" style="float:center;margin-top: -10px ;margin-left: 5px" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Exit"><i class="fa fa-ban"></i> </a>

            </div>
        </div>
    </div>
</div>

<div class="row justify-content-center">
 <div class="col-11">
    <div class="card border border-secondary">
        <div class="card-header bg-dark text-white">
            <strong>Hasil Perhitungan</strong>
        </div>

        <div class="card-body card-block">
         <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Kriteria</th>
                    @foreach ($kriteria as $item)
                    <th scope="col">{{$item->nama_kriteria}}</th>
                    @endforeach
                    <th scope="col">Priority Vektor</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i <= $count_kriteria-1; $i++)
                <tr>
                    <th scope="row">
                        {{$kriteria[$i]->nama_kriteria}}
                    </th>
                    @for ($j = 0; $j <= $count_kriteria-1; $j++)
                    <td>
                        {{round($matriks[$i][$j],3)}}
                    </td>
                    @endfor
                    <td>{{round($priority_vector[$i],3)}}</td>
                </tr>
                @endfor
                <tr>
                    <th scope="row">Jumlah</th>
                    @for ($i = 0; $i <= $count_kriteria-1; $i++)
                    <td>{{round($jml_baris[$i],3)}}</td>
                    @endfor
                    <td>1</td>
                </tr>
            </tbody>
        </table>

        <div class="row justify-content-center">
            <div class="col-6">
             <div class="card border border-success" style=";margin-top: 5px; margin-bottom: 20px" >
                <div class="card-body text-info">

                    <div class="row ">
                        <div class="col">
                            Pricipal Eigen Value (&lambda;max)
                        </div>
                        <div class="col text-center">
                            {{round($eigenvalue,3)}}
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col" id="ci">
                            Consistency Index (CI) &nbsp;&nbsp;<i class="fa fa-info-circle text-info" id="ci" data-toggle="tooltip" data-placement="right" title="CI = (&lambda;max-n)/(n-1)" style="cursor:help;"></i>
                        </div>
                        <div class="col text-center">
                            {{round($consistency_index,3)}}
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col" id="cr">
                            Consistency Ratio (CR) &nbsp; <i class="fa fa-info-circle text-info" id="cr" data-toggle="tooltip" data-placement="right" title="CR = CI/RI" style="cursor:help;"></i>
                        </div>
                        <div class="col text-center">
                            {{round($consistency_ratio,4)*100}}
                        </div>
                    </div>
                </div>
            </div>

            @if ($consistency_ratio >0.1)
            <div class="col" align="center">
                <div class="alert alert-danger" role="alert">
                    <h6>Nilai Consistency Ratio (CR) Melebihi 0.1</h6>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
</div>
</div>

<div class="row justify-content-center">
    <div class="col-md-2">
        <a href="{{route('form.kriteria')}}" class="btn btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kembali&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
    </div>
</div>
</div>


<!-- ///////////////////////////// ELSE ///////////////////////////// -->

@else
</div>
</div>

</div>
</div>
</div>
</div>


<div class="row justify-content-center">

    <div class="col-md-2">
        <a href="{{route('form.alternatif',['id'=>0])}}" class="btn btn-success"> Lanjutkan Perhitungan <i class="fa fa-arrow-right"></i></a>
    </div>

    <!-- ///////////////////////////// ELSE ///////////////////////////// -->
    @endif
</div>

@endsection

@push('js')

<script type="text/javascript">
    $(function() {
        $('[data-toggle="tooltip"]').tooltip();
    } );

</script>
@endpush

