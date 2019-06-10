@extends('template.admin-master')
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card">

            <div class="card-header bg-dark text-white">
                <strong>Edit User</strong>
                <!--- jangan lupa di if -->
                <a href="{{route('user.index')}}" style="float:right;" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Cancel "><i class="fa fa-ban"></i> </a>
            </div>

            <div class="card-body card-block">
                <form action="{{route('user.update', $users->id)}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row form-group">
                        <div class="col">
                            <div class="text-danger" style="font-size: 10px">* Wajib diisi</div>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="nama_user" class=" form-control-label">Nama Lengkap <div class="text-danger d-inline">*</div></label></div>
                        <div class="col-12 col-md-9"><input type="text" id="nama_user" name="name" value="{{old('name') ?: $users->name}}" required="required" placeholder="Nama Lengkap..." class="form-control {{$errors->first('name') ? "is-invalid": ""}}">
                            <div class="invalid-feedback">
                                {{$errors->first('name')}}
                            </div>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="email" class=" form-control-label">Email <div class="text-danger d-inline">*</div></label></div>
                        <div class="col-12 col-md-9"><input type="email" id="email" name="email" placeholder="Email..."value="{{old('email') ?: $users->email}}" required="required" class="form-control {{$errors->first('email') ? "is-invalid": ""}}">
                            <div class="invalid-feedback">
                                {{$errors->first('email')}}
                            </div></div>
                    </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="pass" class=" form-control-label">Password <div class="text-danger d-inline">*</div></label></div>
                            <div class="col-12 col-md-9"><input type="password" id="pass" required="required" name="password" placeholder="Password..." value="" class="form-control {{$errors->first('password') ? "is-invalid": ""}}">
                                <div class="invalid-feedback">
                                    {{$errors->first('password')}}
                                </div>
                            </div>
                        </div>

                        <div class="row form-group ">
                            <div class="col col-md-3"><label for="gender" class=" form-control-label">Jenis Kelamin <div class="text-danger d-inline">*</div></label></div>
                            <div class="col-12 col-md-9">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline1" name="gender" value="Pria" {{$users->gender=="Pria" ?"checked":"" }} class="custom-control-input {{$errors->first('gender') ? "is-invalid": ""}}">
                                    <label class="custom-control-label" for="customRadioInline1">Pria</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline2" name="gender" value="Wanita" {{$users->gender=="Wanita" ?"checked":"" }} class="custom-control-input {{$errors->first('gender') ? "is-invalid": ""}}">
                                    <label class="custom-control-label" for="customRadioInline2">Wanita</label>
                                </div>
                                <div class="invalid-feedback">
                                    {{$errors->first('gender')}}
                                </div>
                            </div>
                        </div>

                        <div class="row form-group ">
                            <div class="col col-md-3"><label for="inputGroupFile01" class=" form-control-label">Avatar</label></div>
                            <div class="col-md-5">
                                    <img src="{{asset('storage/'.$users->avatar) }}" class="img-thumbnail" id="img" width="200px" alt="">
                                </div>
                            <div class="col-md-8 offset-3">

                                    <input type="file" class="form-control {{$errors->first('avatar') ? "is-invalid": ""}}" value="{{old('avatar') ?: $users->avatar}}" onchange="readURL(this);" >
                                    <div class="invalid-feedback">
                                        {{$errors->first('gender')}}
                                    </div>


                            </div>
                        </div>
            </div>


                    <div class="row justify-content-center">
                <div class="col-md-2 mb-3">
                    <button type="submit" class="btn btn-success ">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
@push('js')
<script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#img')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        </script>
@endpush
