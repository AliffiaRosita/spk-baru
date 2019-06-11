@extends('template.admin-master')
@section('content')


<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div class="progress mb">
                    <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-2">
            <button data-toggle="modal" data-target="#exampleModal" class="btn btn-primary">Cara Pengisian Kost</button>
            </div>
            <div class="col-1">

                    <!---- pakai if buat nampilin tombol kembali kalau admin ke dashadmin , kalau userke dash user -->
                    <a href="{{route('dashboarduser')}}" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Exit"><i class="fa fa-ban"></i> </a>

            </div>

<form action="{{route('form.prosesAlternatif',['id'=>$jenis])}}" method="post" class="form-horizontal" enctype="multipart/form-data">
    @csrf
    <div class="row justify-content-center">
        @for ($i = 0; $i <= $count_kost-2; $i++)
        @for ($j = $i+1; $j <= $count_kost-1; $j++)
        @php
        $index++;
        $value= null;
        $first = true;
        if ($old_value->count()) {
        $value= $old_value->where('id_kost1',$kost[$i]->id)->where('id_kost2',$kost[$j]->id)->first()->hasil;
        $first = false;
    }

    @endphp
    <div class="col-lg-5">
        <div class="card">

            <div class="card-header bg-dark text-white">
                <strong>Perbandindan alternatif berdasarkan {{$kriterias->nama_kriteria}}</strong>
            </div>

            <div class="card-body card-block">
                <div class="row form-group ">
                    <div class="col col-md-3"><label for="kriteria" class=" form-control-label">Kost <div class="text-danger d-inline">*</div></label>
                </div>

                <div class="col-12 col-md-9">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="{{$kost[$i]->nama_kost.$index}}" name="selected[{{$index}}]" required value="kost1" class="custom-control-input" {{!$first?$value>=1?'checked':'':''}}>
                        <label class="custom-control-label" for="{{$kost[$i]->nama_kost.$index}}">{{$kost[$i]->nama_kost}} &nbsp;
                        </label> <i class="fa fa-info-circle text-info" id="{{$kost[$i]->nama_kost.$index}}" data-toggle="tooltip" data-placement="top" title=" {{'Alamat:'.$kost[$i]->alamat.'. Harga: '.$kost[$i]->harga}}" style="cursor:help;"></i>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="{{$kost[$j]->nama_kost.$index}}" name="selected[{{$index}}]" required value="kost2" class="custom-control-input" {{!$first?$value<1?'checked':'':''}}>
                        <label class="custom-control-label" for="{{$kost[$j]->nama_kost.$index}}" >{{$kost[$j]->nama_kost}} &nbsp;
                        </label>
                        <i class="fa fa-info-circle text-info" id="{{$kost[$j]->nama_kost.$index}}" data-toggle="tooltip" data-placement="top" title="{{'Alamat:'.$kost[$i]->alamat.'. Harga: '.$kost[$i]->harga}}" style="cursor:help;"></i>
                    </div>

                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3"><label for="nilai" class=" form-control-label">Nilai <div class="text-danger d-inline">*</div></label></div>
                <div class="col-12 col-md-9"><input type="number" id="nilai" name="nilai[{{$index}}]" value="{{!$first ? $value>=1?$value:round(1/$value):''}}" placeholder="1 - 9" class="form-control" required max=9>
                </div>
            </div>

        </div>
    </div>
</div>
@endfor
@endfor
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalLabel">Tata cara pengisian</h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    pilihlah Kost yang menurut anda lebih penting berdasarkan kriterianya. Kemudian isi nilai 1 sampai 9.
                    <ul>
                        <li>nilai 1  = kedua Kost yang anda pilih sama pentingnya</li>
                        <li>nilai 3 = Kost yang anda pilih sedikit lebih penting daripada Kost B</li>
                        <li>nilai 5 =  Kost yang anda pilih lebih penting dari Kost B</li>
                        <li>nilai 7 = Kost yang anda pilih jelas lebih penting dari Kost B </li>
                        <li>nilai 9 = Kost yang anda pilih mutlak lebih penting dari Kost B.</li>
                        <li>nilai 2,4,6,8 = nilai-nilai antara dua perimbangan yang berdekatan</li>
                </ul>
            </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

<div class="row">
    <div class="col">
        <section class="card">
            <button type="submit" class="btn btn-success">Hitung</button>
        </section>
    </div>
    {{-- <div class="col-md-2 ">
        <section class="card">
            <button type="reset" class="btn btn-danger">Reset</button>
        </section>
    </div> --}}
</div>

</form>
@endsection

@push('js')


<script type="text/javascript">
    $(function() {
        $('[data-toggle="tooltip"]').tooltip();
    } );
</script>

@endpush

