@extends('template.master')
@section('contentuser')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card">
            <div class="card-header bg-dark text-white">
                    <strong>Tambah Kost</strong>
                    <!--- jangan lupa di if -->
                <a href="{{route('dashboarduser')}}" style="float:right;" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Cancel "><i class="fa fa-ban"></i> </a>
            </div>
            <div class="card-body card-block">
            <form action="{{route('user.kost.store')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="row form-group">
                        <div class="col">
                            <div class="text-danger" style="font-size:10px">* Wajib diisi</div>
                        </div>
                        </div>
                        <div class="row form-group">
                                <div class="col col-md-3"><label for="hf-email" class=" form-control-label">Nama Kost <div class="text-danger d-inline">*</div></label></div>
                                <div class="col-12 col-md-9"><input type="text" id="hf-email" name="nama_kost" placeholder="Nama Kost..." class="form-control {{$errors->first('nama_kost') ? "is-invalid": ""}}">
                                    <div class="invalid-feedback">
                                        {{$errors->first('nama_kost')}}
                                    </div>
                                </div>
                            </div>
                    <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Alamat <div class="text-danger d-inline">*</div></label></div>
                            <div class="col-12 col-md-9"><textarea name="alamat" id="textarea-input" rows="3" style="resize: none;" placeholder="Alamat..." class="form-control {{$errors->first('alamat') ? "is-invalid": ""}}"></textarea>
                                <div class="invalid-feedback">
                                    {{$errors->first('alamat')}}
                                </div>
                            </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="number" class=" form-control-label">No Hp</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="number" name="no_tlp" placeholder="No Hp..." class="form-control {{$errors->first('no_tlp') ? "is-invalid": ""}}">
                            <div class="invalid-feedback">
                                {{$errors->first('no_tlp')}}
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="cost" class=" form-control-label">Harga <div class="text-danger d-inline">*</div></label></div>
                        <div class="col-12 col-md-9"><input type="number" id="cost" name="harga" placeholder="Harga.." class="form-control {{$errors->first('harga') ? "is-invalid": ""}}">
                            <div class="invalid-feedback">
                                {{$errors->first('harga')}}
                            </div>
                        </div>
                    </div>

                    <div class="row form-group ">
                        <div class="col col-md-3"><label for="nama_user" class=" form-control-label">Jenis Kost <div class="text-danger d-inline">*</div></label></div>
                        <div class="col-12 col-md-9">
                                <div class="custom-control custom-radio custom-control-inline ">
                                        <input type="radio" id="customRadioInline1" name="jenis_kost" value="Pria" class="custom-control-input {{$errors->first('jenis_kost') ? "is-invalid": ""}}">
                                        <label class="custom-control-label" for="customRadioInline1">Pria</label>
                                      </div>
                                      <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline2" name="jenis_kost" value="Wanita" class="custom-control-input {{$errors->first('jenis_kost') ? "is-invalid": ""}}">
                                        <label class="custom-control-label" for="customRadioInline2">Wanita</label>
                                      </div>

                        </div>
                        <div class="invalid-feedback">
                                {{$errors->first('jenis_kost')}}
                            </div>
                    </div>

                    <div class="row form-group ">
                        <div class="col col-md-3"><label for="inputGroupFile01" class=" form-control-label">Foto Kost</label></div>
                        <div class="col-12 col-md-9 ">
                                        <div class="custom-file">
                                          <input type="file" name="kost_pict" class="custom-file-input {{$errors->first('kost_pict') ? "is-invalid": ""}}" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                          <label class="custom-file-label" for="inputGroupFile01" >Choose file</label>
                                          <div class="invalid-feedback">
                                            {{$errors->first('kost_pict')}}
                                        </div>
                                        </div>

                                      </div>
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
