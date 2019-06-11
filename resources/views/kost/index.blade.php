@extends('template.admin-master')


@section('content')

@if (session('status'))
<div class="row justify-content-left" id="alert">
        <div class="col">
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Sukses !</h4>
            <p>{{session('status')}}</p>
            </div>
        </div>
    </div>
@endif

<div class="row justify-content-center">

        <div class="col-lg-10">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <strong class="card-title"> Kost</strong>
                <a href="{{route('kost.create')}}" style="float:right" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Tambah Kost"><i class="fa fa-plus"></i></a>
                </div>
                <div class="card-body" style="font-size: 14px">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kost</th>
                                <th>Alamat</th>
                                <th>Kontak</th>
                                <th>Harga (Perbulan)</th>
                                <th>Jenis Kost</th>
                                <th>Foto Kost</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($kosts as $kost)
                            <tr>
                                {{-- @for ($i = 1; $i <= count($kost); $i++)
                                <td></td>>{{$i}}</td>
                                @endfor --}}
                                <td>{{$kost->id}}</td>
                                <td>{{$kost->nama_kost}}</td>
                                <td>{{$kost->alamat}}</td>
                                <td>{{$kost->no_tlp}}</td>
                                <td>{{$kost->harga}}</td>
                                <td>{{$kost->jenis_kost}}</td>
                            <td><img src="{{asset('storage/'.$kost->kost_pict)}}" width="75px" alt=""></td>
                                <td class="text-center" ><a href="{{route('kost.edit',['id'=>$kost->id])}}" class="btn btn-secondary btn-sm"><i class="fa fa-edit"></i></a>

                                <form method="POST" action="{{route('kost.destroy',['id'=>$kost->id])}}" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button  class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                                </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')

<link rel="stylesheet" href="{{asset('template/assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">
@endpush

@push('js')

<script src="{{asset('template/assets/js/lib/data-table/datatables.min.js')}}"></script>
<script src="{{asset('template/assets/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('template/assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('template/assets/js/lib/data-table/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('template/assets/js/lib/data-table/jszip.min.js')}}"></script>
<script src="{{asset('template/assets/js/lib/data-table/vfs_fonts.js')}}"></script>
<script src="{{asset('template/assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
<script src="{{asset('template/assets/js/lib/data-table/buttons.print.min.js')}}"></script>
<script src="{{asset('template/assets/js/lib/data-table/buttons.colVis.min.js')}}"></script>
<script src="{{asset('template/assets/js/init/datatables-init.js')}}"></script>


<script type="text/javascript">
    $(document).ready(function() {
      $('#bootstrap-data-table-export').DataTable();

    $('#alert').fadeOut(3000);
  } );

     $(function() {
            $('[data-toggle="tooltip"]').tooltip();
        } );

</script>

@endpush

