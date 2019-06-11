@extends('template.admin-master')
@section('content')

<div class="row justify-content-left">
  <div class="col-lg-9 offset-md-1">
    <div class="card">
      <div class="card-body">
        <div class="progress mb">
          <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
 <div class="col-lg-10">

  <div class="card border border-secondary">
    <div class="card-header bg-dark text-white">
      <strong>Hasil Perhitungan Total</strong>
    </div>
    <div class="card-body card-block">

     <table class="table table-hover text-center">
      <thead>
        <tr class="text-center">
          <th scope="col">Overall composit weight</th>
          <th scope="col">Weight</th>
          @foreach ($kost as $item)
          <th  scope="col">{{$item->nama_kost}}</th>
          @endforeach
        </tr>
      </thead>
      <tbody>
        @for ($i = 0; $i < $count_kriteria; $i++)
        <tr>
          <th scope="row" class="text-center"> {{$kriteria[$i]->nama_kriteria}} </th>
          <td> {{round($pv_kriteria[$i]->nilai,3)}}</td>
          @for ($j = 0; $j < $count_kost; $j++)
          <td>{{round($matriks[$i][$j],3)}}</td>
          @endfor
        </tr>
        @endfor
        <tr>
          <th scope="row" colspan="2" >Nilai Composit Weight</th>
          @for ($i = 0; $i < $count_kost; $i++)
          <td>{{round($composite_weight[$i],3)*100}}%</td>
          @endfor
        </tr>
      </tbody>
    </table>
    <br>

    <div class="row justify-content-center">
      <div class="col-7 ">

        <table class="table table-bordered ">
          <thead>
            <tr>
              <th scope="col">Nama Kost</th>
              <th scope="col">Nilai</th>
              <th scope="col">Ranking</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($rankings as $key=>$ranking)
            <tr>
              <td>{{$ranking->kosts->nama_kost}}</td>
              <td>{{round($ranking->composit_weight,3)*100}}%</td>
              <td>{{$key+1}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>

      </div>
    </div>

  </div>
</div>

</div>
</div>

<div class="row justify-content-center">
  <div class="col-md-2">
  <a href="{{route('dashboard')}}" class="btn btn-success text-center text-white">Main Menu</a>
  </div>
  {{-- <div class="col-md-2">
    <a href="" class="btn btn-info text-center">Cetak Hasil</a>
  </div> --}}
</div>


@endsection
@push('js')
<script type="text/javascript">
    $(function() {
      $('[data-toggle="tooltip"]').tooltip();
    } );
  </script>
   <script>
        $(function(){
            swal("Kami Merekomendasikan {{$rankings[0]->kosts->nama_kost}} !", "{{$rankings[0]->kosts->nama_kost}} adalah kost terbaik berdasarkan kriteria yang telah anda isi. klik ok untuk melihat detail perhitungan", "success");
        });
    </script>
@endpush

