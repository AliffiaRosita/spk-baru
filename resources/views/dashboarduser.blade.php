@extends('template.master')
@section('contentheaderuser')
<!-- <div class="row" style="min-height: 0px">
</div>
-->
<div class="row">
    <!-- KONTEN HEADER -->

    <div class="col-lg-3">
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


        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-flat-color-6">
                <div class="card-body">
                    <div class="card-left pt-1 float-left">

                        <p class="text-light mt-1 m-0">Kost</p>
                        <h3 class="mb-0 fw-r">
                            <!-- <span class="currency float-left mr-1">$</span> -->
                            <span class="count">{{$kost}}</span>
                        </h3>
                    </div><!-- /.card-left -->

                    <div class="card-right float-right text-right">
                        <i class="icon fade-5 icon-lg pe-7s-cart"></i>
                    </div><!-- /.card-right -->
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-flat-color-1">
                <div class="card-body">
                    <div class="card-left pt-1 float-left">
                       <p class="text-light mt-1 m-0">Kriteria</p>
                       <h3 class="mb-0 fw-r">
                        <!-- <span class="currency float-left mr-1">$</span> -->
                        <span class="count">{{$kriteria}}</span>
                    </h3>

                </div><!-- /.card-left -->

                <div class="card-right float-right text-right">
                    <i class="icon fade-5 icon-lg pe-7s-cart"></i>
                </div><!-- /.card-right -->
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-3">
            <a href="{{route('user.form.kriteria')}}">
                <div class="card-body">
                    <div class="card-left pt-1 float-left">
                        <p class="text-light mt-1 m-0">Perhitungan</p>
                    </div><!-- /.card-left -->

                    <div class="card-right float-right text-right">
                        <i class="icon fade-5 icon-lg pe-7s-users"></i>
                    </div><!-- /.card-right -->
                </div></a>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card text-white bg-flat-color-4">
                <div class="card-body">
                    <div class="card-left pt-1 float-left">
                        <h6 class="mb-0 fw-r">
                            <!-- <span class="currency float-left mr-1">$</span> -->
                            <span>Read This</span>
                        </h6>
                    </div><!-- /.card-left -->

                    <div class="card-right float-right text-right">
                        <i class="fa fa-bookmark"></i>
                    </div><!-- /.card-right -->
                </div>
            </div>
        </div>

     <!--    <div class="col-lg-3">

     </div> -->

     <div class="col-lg-2" style="margin-top: -195px">
        <div class="card">
            <div class="card-header bg-white"   style="padding-bottom: 20px">
                <strong class="card-title">Kriteria</strong>
                {{-- <a href="{{route('criteria.create')}}" style="float:right;" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Tambah Kriteria"><i class="fa fa-plus"></i> </a> --}}
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

    <div class="col-lg-7" style="margin-top: -195px">
        <div class="card">
            <div class="card-header bg-white">
                <strong class="card-title">Kost</strong>
                </div>
            <div class="table-stats order-table ov-h">
                <table class="table ">
                    <thead>
                        <tr>
                            <th class="serial">#</th>
                            <th class="avatar">Foto</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Harga</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kosts as $kost)
                        <tr>

                                <td class="serial">{{$loop->iteration}}</td>
                                <td class="avatar">
                                    <div class="round-img">
                                        <img class="rounded-circle" src="{{asset('storage/'.$kost->kost_pict)}}" width="29px">
                                    </div>
                                </td>
                                <td><span class="name">{{$kost->nama_kost}} </span></td>
                                <td>{{$kost->alamat}}</td>
                                <td><span class="count"> {{$kost->harga}} </span></td>
                                <td>
                                    <a href="{{Route('user.kost.show',['name'=>$kost->nama_kost,'id'=>$kost->id])}}" class="btn btn-info btn-sm">
                                    <i class="fa fa-eye"></i></a>

                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>




    </div><!-- DIV AKHIR -->

    <!-- TUTUP KONTEN ATAS -->
    <!-- KONTEN TABLE -->
    @endsection

    @push('js')
    <script type="text/javascript">
        $(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });

    </script>

    @endpush


