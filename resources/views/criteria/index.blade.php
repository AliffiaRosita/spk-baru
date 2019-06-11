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

        <div class="col-lg-10" >
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <strong class="card-title"> Kriteria</strong>
                <a href="{{route('criteria.create')}}" style="float:right" class="btn btn-primary btn-sm"> <i class="fa fa-plus"></i></a>
                </div>
                <div class="card-body" style="font-size: 14px">
                    <table id="bootstrap-data-table" class="table ">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kriteria</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($isi_kriteria as $kriteria)
                            <tr>
                                <td>{{$kriteria->id}}</td>
                                <td>{{$kriteria->nama_kriteria}}</td>
                                <td>{{$kriteria->Deskripsi}}</td>
                                <td class="text-center" ><a href="{{route('criteria.edit',['id'=>$kriteria->id])}}" class="btn btn-secondary btn-sm"><i class="fa fa-edit"></i></a>
                                <form method="POST" action="{{route('criteria.destroy',['id'=>$kriteria->id])}}" class="d-inline">
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
  });
</script>

    @endpush

