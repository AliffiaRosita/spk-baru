@extends('template.admin-master')
@section('content')

<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card">
            <div class="card-header bg-dark text-white">
                    <strong>Edit Kriteria</strong>
                    <!--- jangan lupa di if -->
                <a href="{{route('criteria.index')}}" style="float:right;" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Cancel "><i class="fa fa-ban"></i> </a>
            </div>
            <div class="card-body card-block">
            <form action="{{ route('criteria.update', $kriteria->id) }}" method="post" class="form-horizontal">
                    @csrf
                    <div class="row form-group">
                        <div class="col">
                            <div class="text-danger" style="font-size: 10px">* Wajib diisi</div>
                        </div>
                    </div>
                    @method('PUT')
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="hf-email" class=" form-control-label">Kriteria</label><div class="text-danger d-inline">*</div></div>
                    <div class="col-12 col-md-9"><input type="text" id="hf-email" name="nama_kriteria" value="{{old('nama_kriteria')?: $kriteria->nama_kriteria}}" placeholder="Nama Kriteria..." class="form-control" required="required"></div>
                    </div>
                    <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Deskripsi</label><div class="text-danger d-inline">*</div></div>
                    <div class="col-12 col-md-9"><textarea name="Deskripsi" id="textarea-input" rows="7"  placeholder="Deskripsi..." class="form-control" style="resize: none;" required="required">{{ old('Deskripsi')?: $kriteria->Deskripsi}}</textarea></div>
                    </div>

            </div>

                <div class="row justify-content-center">
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-success ">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                    </div>

                    <div class="col-md-2">
                        <button type="reset" class="btn btn-danger">
                            <i class="fa fa-ban"></i> Reset
                        </button>
                        <br><br>
                    </div>
                </div>
        </form>
        </div>
    </div>
    </div>

@endsection
