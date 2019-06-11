@extends('template.master')
@section('contentheaderuser')
<!-- <div class="row" style="min-height: 0px">
</div>
-->

<div class="row">
    <!-- KONTEN HEADER -->
<div class="col-3">
    <div class="row">
    <div class="col">
        <div class="card">
            <img class="card-img-top" src="https://i.imgur.com/ue0AB6J.png" alt="Card image cap">
            <div class="card-body">
                <div class="media">
                    <div class="media-body" align="center">
                    <a href="{{Route('edit.user.user',['id'=> $user->id])}}" style="float:right; margin-top: -160px ; margin-right: -10px" class="btn btn-primary btn-sm " data-toggle="tooltip" title="Edit Profile" ><i class="fa fa-pencil"></i></a>
                    </div>
                </div>
                <div class="media">
                    <div class="media-body" align="center" style="margin-top: -75px; margin-right: -25px">
                        <a href="#">
                            <img class="align-self-center rounded-circle mr-3" style="width:100px; height:100px;" alt="" src="{{asset('storage/'.$user->avatar)}}">
                        </a>
                    </div>
                </div>
            <h5 class="card-title mb-3" align="center" style="margin-top: 25px; font-weight: bold">{{$user->name}}</h5>
            <p class="card-text" align="center" style=" font-size: 13px;margin-top: -5px">{{$user->email}}</p>
            <p class="card-text" align="center" style=" font-size: 13px;margin-top: -20px;margin-bottom: 0px">{{$user->role}}</p>
                </div>
            </div>
        </div>
    </div>
            <div class="row justify-content-center">
                    <div class="col" >
                            <div class="card">
                                <div class="card-header ">
                                    <strong class="card-title">Kriteria</strong>
                               </div>
                                <div class="table-stats order-table ov-h">
                                    <table class="table">
                                        <thead >
                                            <tr>
                                                <th class="serial" >#</th>
                                                <th>Kriteria</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($isi_kriteria as $kriteria)
                                            <tr>
                                                <td class="serial">{{$kriteria->id}}</td>
                                                <td height="50px"> <span class="name">{{$kriteria->nama_kriteria}} </span></td>
                                                <td></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
            </div>
    <div class="row">
        <div class="col">
            <div class="card text-white bg-flat-color-3">
                <a href="{{route('user.form.kriteria')}}">
                    <div class="card-body">
                        <div class="card-left pt-1 float-left">
                            <p class="text-light mt-1 m-0">Perhitungan</p>
                        </div>

                        <div class="card-right float-right text-right">
                            <i class="icon fade-5 icon-lg pe-7s-users"></i>
                        </div>
                    </div></a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-7 offset-1">
        <div class="row">
            <div class="col p-5 ftco-wrap ftco-animate" >
            <form action="{{route('dashboarduser')}}" class="domain-form d-flex mb-3">
                    <div class="form-group domain-name">
                        <input type="text" class="form-control name px-4" name="nama_kost" placeholder="Masukkan Nama Kost ...">
                    </div>
                    <input type="submit" class="search-domain btn btn-primary text-center" value="Cari">
	            </div>
            </form>
        </div>
        <div style="min-height:150px"></div>
        @foreach ($kosts as $kost)
        <div class="row border-bottom border-top pt-4 pb-4 mb-5  bg-light">
            <div class="col-12">
                <div class="row">
                <div class="col-4">
                <img src="{{asset('storage/'.$kost->kost_pict)}}" class="img-thumbnail" height="100px" width="200px" alt="">
            </div>
            <div class="col-5">
                <h3 class="text-dark">{{$kost->nama_kost}}</h3>
                <p>Alamat : {{$kost->alamat}}</p>
                <a href="{{route('user.kost.show',['name'=>$kost->nama_kost,'id'=>$kost->id])}}" class="btn btn-success btn-sm"> Lihat Detail Kost</a>
                </div>
            </div>
            </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

    @endsection

    @push('css')
        <style>

.ftco-wrap {
  background: #6927ff;
  border-radius: 50px 0 50px 0; }
  .domain-form {
  width: 100%;
  display: block; }
  .domain-form .domain-name {
    width: 500px; }
    @media (max-width: 767.98px) {
      .domain-form .domain-name {
        width: 100%; } }
        .domain-form .form-group {
    position: relative;
    margin-bottom: 0; }
    .domain-form .form-group .form-control {
      height: 60px !important; }
    .domain-form .form-group input, .domain-form .form-group select {
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      font-size: 14px;
      padding-right: 20px !important;
      color: #000;
      border: 1px solid #e6e6e6;
      border-right: none; }
      .domain-form .form-group input.name, .domain-form .form-group select.name {
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px; }
        .domain-form .search-domain {
    width: 200px; }
    @media (max-width: 991.98px) {
      .domain-form .search-domain {
        width: calc(100% - 80px); } }

       body{
        background-image:url('assets/img/da-01.png');
        background-position:center;
        background-size:cover;
        background-repeat:no-repeat;
        background-color:rgb(255,255,255);
       }
        </style>
    @endpush

    @push('js')
    <script type="text/javascript">
        $(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });

    </script>

    @endpush


