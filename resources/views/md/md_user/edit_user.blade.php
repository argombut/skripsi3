@extends('layout/paan',[
'InfoPage' => [
'Navbar' => '/edit_user'
]])
@section('title', 'Form Edit User')

@section('container')
<style>
    ::placeholder {
        font-size: 0.8rem;
    }

    .font-08 {
        font-size: 0.8rem !important;
    }

    select,
    input {
        font-size: 0.8rem !important;
    }
</style>

<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-8s">
                <div class="page-header float-left">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="home">Dashboard</a></li>
                            <li><a href="#">Data Master</a></li>
                            <li><a href="#">Edit User</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="animated fadeIn">
        @if(Session::has('post_updateuser'))
        <span>{{Session::get('post_updateuser')}}</span>
        @endif
        <form method="post" action="{{route('updateuser.post')}}">
            @csrf
            <input type="hidden" name="id" value="{{$edit->id}}">
            <div class="row">


                <div class="col-lg-12">
                    <div class="card">
                        {{-- <div class="card-header">
                                    Input <strong>Data Kartu Keluarga</strong>
                                </div> --}}
                        <div class="card-body card-block">
                            <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <h2><strong>Edit Data User</strong></h2>
                                <hr> <br>
                                <div class="row justify-content-md-center">
                                    <div class="col-lg-6">
                                        <div class="form-group" >
                                            <div class="col col-md-12"><label for="text-input" class=" form-control-label"><strong>Nama</strong></label></div>
                                            <div class="col-12 col-md-6"><input type="text" id="text-input" name="name" placeholder="Nama" class="form-control" value="{{$edit->name}}"></div>
                                        </div>
                                        <div class="form-group" >
                                            <div class="col col-md-12"><label for="text-input" class=" form-control-label"><strong>Email</strong></label></div>
                                            <div class="col-12 col-md-6"><input type="email" id="text-input" name="email" placeholder="Nama" class="form-control" value="{{$edit->email}}"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        {{--  <div class="form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Role</strong></label></div>
                                            <div class="col-12 col-md-6"><input type="text" id="text-input" name="role" placeholder="Level Sertifikat" class="form-control" value="{{$edit->role}}"></div>
                                        </div>  --}}
                                        <div class="form-group">
                                            <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Role</strong></label></div>
                                            <div class="col-12 col-md-6">
                                                <select name="role" id="select" class="form-control">
                                                    <option value="2"{{ '2'    == $edit->role ? 'selected' : ''}}>Admin</option>
                                                    <option value="3"{{ '3'    == $edit->role ? 'selected' : ''}}>RW</option>
                                                    <option value="4"{{ '4'    == $edit->role ? 'selected' : ''}}>KRT</option>
                                                    <option value="5"{{ '5'    == $edit->role ? 'selected' : ''}}>PKK</option>
                                                    <option value="6"{{ '6'    == $edit->role ? 'selected' : ''}}>Takmir</option>
                                                    <option value="7"{{ '7'    == $edit->role ? 'selected' : ''}}>Tidak Diberi Hak Akses</option>
                                                </select>
                                            </div>
                                        </div>
                                        {{--  <div class="form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Nama Ibu Pejabat</strong></label></div>
                                            <div class="col-12 col-md-6"><input type="text" id="text-input" name="nm_bu_pejabat" placeholder="Level Sertifikat" class="form-control" value="{{$edit->nm_bu_pejabat}}"></div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Keterangan</strong></label></div>
                                            <div class="col-12 col-md-6"><input type="text" id="text-input" name="keterangan" placeholder="Keterangan" class="form-control" value="{{$edit->keterangan}}"></div>
                                        </div>  --}}
                                    </div>
                                    <div class="col-lg-2 col-sm-12">
                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
    </div>
</div><!-- .content -->
@endsection