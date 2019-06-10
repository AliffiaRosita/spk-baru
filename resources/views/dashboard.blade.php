@extends('template.admin-master')
@section('content')
<!-- <div class="row" style="min-height: 0px">
</div>
-->
<div class="row" >
        <div class="col">

            <div class="card text-white bg-flat-color-6">
                <div class="card-body">
                         <a href="{{route('kost.index')}}" style="color: white">
                    <div class="card-left pt-1 float-left ">
                        <p class="text-light mt-1 m-0">Kost</p>
                        <h3 class="mb-0 fw-r">
                            <!-- <span class="currency float-left mr-1">$</span> -->
                            <span class="count">{{$kost}}</span>
                        </h3>
                    </div><!-- /.card-left -->

                    <div class="card-right float-right text-right ">
                        <i class="icon fade-5 icon-lg pe-7s-home "></i>
                    </div><!-- /.card-right -->
                </div> </a>
            </div>
        </div>
        <div class="col">
            <div class="card text-white bg-flat-color-1">
                <div class="card-body">
                     <a href="{{route('criteria.index')}}" style="color: white">
                    <div class="card-left pt-1 float-left">
                     <p class="text-light mt-1 m-0">Kriteria</p>
                     <h3 class="mb-0 fw-r">
                        <!-- <span class="currency float-left mr-1">$</span> -->
                        <span class="count">{{$kriteria}}</span>
                    </h3>

                </div><!-- /.card-left -->

                <div class="card-right float-right text-right">
                    <i class="icon fade-5 icon-lg pe-7s-note2"></i>
                </div><!-- /.card-right -->
            </div></a>
        </div>
    </div>

    <div class="col">
        <div class="card text-white bg-flat-color-5">
            <div class="card-body">
                <a href="{{route('user.index')}}" style="color: white">
                <div class="card-left pt-1 float-left">
                 <p class="text-light mt-1 m-0">User</p>
                 <h3 class="mb-0 fw-r">
                    <!-- <span class="currency float-left mr-1">$</span> -->
                    <span class="count">{{$user}}</span>
                </h3>

            </div><!-- /.card-left -->

            <div class="card-right float-right text-right">
                <i class="icon fade-5 icon-lg pe-7s-id"></i>
            </div><!-- /.card-right -->
        </div></a>
    </div>
</div>
</div>

     <!--    <div class="col-lg-3">

     </div> -->


<div class="row justify-content-center">
     <div class="col-lg-9">
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
                            <th>Kontak</th>
                            <th>Harga</th>
                            <th>Jenis</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kosts as $kost)
                        <tr>
                            {{-- @for ($i = 1; $i <= count($kost); $i++)
                                <td>{{$i}}</td>
                                @endfor --}}
                                <td class="serial">{{$loop->iteration}}</td>
                                <td class="avatar">
                                    <div class="round-img">
                                        <img class="rounded-circle" src="{{asset('storage/'.$kost->kost_pict)}}" width="29px">
                                    </div>
                                </td>
                                <td><span class="name">{{$kost->nama_kost}} </span></td>
                                <td>{{$kost->alamat}}</td>
                                <td>{{$kost->no_tlp}}</td>
                                <td><span class="count"> {{$kost->harga}} </span></td>
                                <td>{{$kost->jenis_kost}}</td>

                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
           <div class="col-lg-5">
        <div class="card">
            <div class="card-header bg-white">
                <strong class="card-title">Kriteria</strong>
            </div>
            <div class="table-stats order-table ov-h text-left">
                <table class="table">
                    <thead >
                        <tr>
                            <th class="serial" >#</th>
                            <th>Kriteria</th>
                            <th>Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($isi_kriteria as $kriteria)
                        <tr>
                            <td class="serial">{{$loop->iteration}}</td>
                            <td> <span class="name">{{$kriteria->nama_kriteria}} </span></td>
                            <td style="text-align: left;"> {{$kriteria->Deskripsi}}</td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

        <div class="col-lg-7" >
        <div class="card">
            <div class="card-header bg-white">
                <strong class="card-title">User</strong>

            </div>
            <div class="table-stats order-table ov-h">
                <table class="table ">
                    <thead>
                        <tr>
                            <th class="serial">#</th>
                            <th class="avatar">Foto</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Role</th>
                        </tr>
                    </thead>
                    <tbody>

                            @foreach ($userss as $user)

                        <tr>
                                <td class="serial">{{$loop->iteration}}</td>
                                <td class="avatar">
                                    <div class="round-img">
                                        <img class="rounded-circle" src="{{asset('storage/'.$user->avatar)}}" width="29px">
                                    </div>
                                </td>
                                <td><span class="name">{{$user->name}} </span></td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->gender}}</td>
                                <td>{{$user->role}}</td>
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
        } );
    </script>

@endpush



