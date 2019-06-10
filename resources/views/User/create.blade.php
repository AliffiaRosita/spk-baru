@extends('template.admin-master')
@section('content')

<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card border-dark">
            <div class="card-header bg-dark text-white ">
                <strong>Tambah User</strong>
                <a href="{{route('user.index')}}" style="float:right;" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Cancel "><i class="fa fa-ban"></i> </a>
            </div>

            <div class="card-body border-dark card-block">
                <form action="{{route('user.store')}}" method="post" class="form-horizontal"  enctype="multipart/form-data">
                    @csrf
                    <div class="row form-group">
                        <div class="col">
                            <div class="text-danger" style="font-size: 10px">* Wajib diisi</div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="nama_user" class=" form-control-label">Nama Lengkap <div class="text-danger d-inline">*</div></label>
                        </div>
                        <div class="col-12 col-md-9"><input type="text" id="nama_user" name="name" placeholder="Nama Lengkap..." class="form-control  {{$errors->first('name') ? "is-invalid": ""}}" required="required">
                            <div class="invalid-feedback">
                                {{$errors->first('name')}}
                            </div>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="email" class=" form-control-label">Email <div class="text-danger d-inline">*</div></label></div>
                        <div class="col-12 col-md-9"><input type="email" id="email" name="email" placeholder="Email..." class="form-control {{$errors->first('email') ? "is-invalid": ""}}" required="required">
                            <div class="invalid-feedback">
                                {{$errors->first('email')}}
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="pass" class=" form-control-label">Password <div class="text-danger d-inline">*</div></label></div>
                        <div class="col-12 col-md-9"><input type="password" id="pass" name="password" placeholder="Password..." class="form-control {{$errors->first('password') ? "is-invalid": ""}}" required="required">
                            <div class="invalid-feedback">
                                {{$errors->first('password')}}
                            </div>
                        </div>
                    </div>
                    <div class="row form-group ">
                        <div class="col col-md-3"><label for="nama_user" class=" form-control-label">Jenis Kelamin <div class="text-danger d-inline">*</div></label></div>
                        <div class="col-12 col-md-9">
                            <div class="custom-control custom-radio custom-control-inline ">
                                <input type="radio" id="customRadioInline1" name="gender" value="Pria" class="custom-control-input {{$errors->first('gender') ? "is-invalid": ""}}">
                                <label class="custom-control-label" for="customRadioInline1">Pria</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" name="gender" value="Wanita" class="custom-control-input {{$errors->first('gender') ? "is-invalid": ""}}">
                                <label class="custom-control-label" for="customRadioInline2">Wanita</label>
                            </div>

                            <div class="invalid-feedback">
                                {{$errors->first('gender')}}
                            </div>
                        </div>
                    </div>

                    <div class="row form-group ">
                        <div class="col col-md-3"><label for="inputGroupFile01" class=" form-control-label">Avatar</label></div>
                        <div class="col-12 col-md-9 ">
                            <div class="custom-file">
                              <input type="file" name="avatar" class="custom-file-input {{$errors->first('avatar') ? "is-invalid": ""}}" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                              <label class="custom-file-label" for="inputGroupFile01" >Choose file</label>
                              <div class="invalid-feedback">
                                {{$errors->first('avatar')}}
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
