@extends('template.master')
@section('contentheaderuser')

<div class="container ">

    <div class="card border border-success mt-5">
<div class="card-body ">
    <div class="row justify-content-center mt-5">
        <div class="col-10">
            <img src="{{asset('storage/'.$kost->kost_pict)}}" class="img-thumbnail" height="800px" width="1000px" alt="">
        </div>
    </div>
    <br>
    <h1 class="ml-5 mt-2">{{$kost->nama_kost}}</h1>
            <hr>
            <p class="ml-5">
                Alamat : {{$kost->alamat}}
                <br>
                Jenis Kost : {{$kost->jenis_kost}}
                <br>
                Harga Perbulan : Rp.{{$kost->harga}},00
                <br>
            </p>
                <h4 class="ml-5 text-right">Kontak Yang dapat dihubungi</h4>
                <p class="ml-5  text-right">
                 {{$kost->no_tlp ?:'belum ditambahkan'}}



</div>
</div>
<div class="row justify-content-center">
<a href="{{Route('dashboarduser')}}" class="btn btn-lg btn-outline-danger"><i class="fa fa-arrow-left"></i> Kembali</a>
</div>
</div>
</div>

@endsection

@push('css')
<style>


</style>
@endpush
