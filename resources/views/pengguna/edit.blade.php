@extends('template.master')
@section('contentheaderuser')

<div class="container">
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
    <div class="row">
        <div class="col-4">
                <div class="card" style="position:fixed">
                        <img class="card-img-top" src="https://i.imgur.com/ue0AB6J.png" alt="Card image cap">
                        <div class="card-body">
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
        <div class="col-7 offset-1" >
                <div class="card">

                        <div class="card-header bg-dark text-white">
                            <strong>Edit User</strong>
                            <!--- jangan lupa di if -->
                            <a href="{{route('user.index')}}" style="float:right;" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Cancel "><i class="fa fa-ban"></i> </a>
                        </div>

                        <div class="card-body card-block">
                            <form action="{{route('update.user.user', ['id'=>$user->id])}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row form-group">
                                    <div class="col">
                                        <div class="text-danger" style="font-size: 10px">* Wajib diisi</div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="nama_user" class=" form-control-label">Nama Lengkap <div class="text-danger d-inline">*</div></label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="nama_user" name="name" value="{{old('name') ?: $user->name}}"  placeholder="Nama Lengkap..." class="form-control {{$errors->first('name') ? "is-invalid": ""}}">
                                        <div class="invalid-feedback">
                                            {{$errors->first('name')}}
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="email" class=" form-control-label">Email <div class="text-danger d-inline">*</div></label></div>
                                    <div class="col-12 col-md-9"><input type="email" id="email" name="email" placeholder="Email..."value="{{old('email') ?: $user->email}}" class="form-control {{$errors->first('email') ? "is-invalid": ""}}">
                                        <div class="invalid-feedback">
                                            {{$errors->first('email')}}
                                        </div></div>
                                </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="pass" class=" form-control-label">Password <div class="text-danger d-inline">*</div></label></div>
                                        <div class="col-12 col-md-9"><input type="password" id="pass"  name="password" placeholder="Password..." value="" class="form-control {{$errors->first('password') ? "is-invalid": ""}}">
                                            <div class="invalid-feedback">
                                                {{$errors->first('password')}}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row form-group ">
                                        <div class="col col-md-3"><label for="gender" class=" form-control-label">Jenis Kelamin <div class="text-danger d-inline">*</div></label></div>
                                        <div class="col-12 col-md-9">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline1" name="gender" value="Pria" {{$user->gender=="Pria" ?"checked":"" }} class="custom-control-input {{$errors->first('gender') ? "is-invalid": ""}}">
                                                <label class="custom-control-label" for="customRadioInline1">Pria</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline2" name="gender" value="Wanita" {{$user->gender=="Wanita" ?"checked":"" }} class="custom-control-input {{$errors->first('gender') ? "is-invalid": ""}}">
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
                                                <img src="{{asset('storage/'.$user->avatar) }}" class="img-thumbnail" id="img" width="200px" alt="">
                                            </div>
                                        <div class="col-md-8 offset-3">

                                                <input type="file" class="form-control {{$errors->first('avatar') ? "is-invalid": ""}}" value="{{old('avatar') ?: $user->avatar}}" onchange="readURL(this);" >
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
        $(function () {
            $('#alert').fadeOut(3000);
        })
        </script>
@endpush

