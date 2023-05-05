@extends('layout/paan',[
'InfoPage' => [
'Navbar' => '/edit_keahlian'
]])
@section('title', 'Form Edit Data')

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
                            <li><a href="#">Data Keahlian</a></li>
                            <li><a href="#">Edit Keahlian</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="animated fadeIn">
        @if(Session::has('post_updatedk'))
        <span>{{Session::get('post_updatedk')}}</span>
        @endif
        <form method="post" action="{{route('updatekeahlian.post')}}">
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
                                <h2><strong>Edit Data Keahlian</strong></h2>
                                <hr> <br>
                                <div class="row justify-content-md-center">
                                    <div class="col-lg-6">
                                        <div class="form-group" hidden>
                                            <div class="col col-md-12"><label for="text-input" class=" form-control-label"><strong>Nama</strong></label></div>
                                            <div class="col-12 col-md-6"><input type="text" id="text-input" name="kd_induk" placeholder="Nama" class="form-control" value="{{$edit->kd_induk}}"></div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Nama Keahlian</strong></label></div>
                                            <div class="col-12 col-md-6">
                                                <select name="kd_keahlian" id="select" class="form-control">
                                                 @foreach($k as $k)
                                                    <option value='{{$k->kd_keahlian}}'{{ $k->kd_keahlian    == $edit->kd_keahlian ? 'selected' : ''}}>{{$k->nama_keahlian}}</option>
                                                    {{-- <option value="2"{{ '2'    == $edit->kd_keahlian ? 'selected' : ''}}></option>
                                                    <option value="3"{{ '3'    == $edit->kd_keahlian ? 'selected' : ''}}></option>
                                                    <option value="4"{{ '4'    == $edit->kd_keahlian ? 'selected' : ''}}></option>
                                                    <option value="5"{{ '5'    == $edit->kd_keahlian ? 'selected' : ''}}></option> --}}
                                                 @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Sertifikat</strong></label></div>
                                            <div class="col-12 col-md-6">
                                                <select name="sertifikat" id="select" class="form-control">
                                                    <option value="Ya"{{ 'Ya'    == $edit->is_sertifikat ? 'selected' : ''}}>Ya</option>
                                                    <option value="Tidak"{{ 'Tidak'    == $edit->is_sertifikat ? 'selected' : ''}}>Tidak</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group" >
                                            <div class="col col-md-5"><label for="text-input" class=" form-control-label"><strong>Deskripsi Sertifikat</strong></label></div>
                                            <div class="col-12 col-md-6"><input type="text" id="text-input" name="deskripsi" placeholder="Sertifikat" class="form-control"  value="{{$edit->deskripsi_sertifikat}}"></div>
                                        </div>

                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Level Sertifikat</strong></label></div>
                                            <div class="col-12 col-md-6"><input type="text" id="text-input" name="level" placeholder="Level Sertifikat" class="form-control"  value="{{$edit->level_sertifikat}}"></div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Keterangan</strong></label></div>
                                            <div class="col-12 col-md-6"><input type="text" id="text-input" name="keterangan" placeholder="Keterangan" class="form-control"  value="{{$edit->keterangan}}" ></div>
                                        </div>

                                       

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