@extends('layout/paan',[
'InfoPage' => [
'Navbar' => '/edit_rumah'
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
                            <li><a href="#">Data Master</a></li>
                            <li><a href="#">Edit Rumah</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="animated fadeIn">
        @if(Session::has('post_updaterumah'))
        <span>{{Session::get('post_updaterumah')}}</span>
        @endif
        <form method="post" action="{{route('updaterumah.post')}}">
            @csrf
            <input type="hidden" name="id" value="{{$edit->kd_rumah}}">
            <div class="row">


                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body card-block">
                            <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <h2><strong>Edit Data Rumah</strong></h2>
                                <hr> <br>
                                <div class="row justify-content-md-center">
                                    <div class="col-lg-6">
                                        <div class="form-group" >
                                            <div class="col col-md-12"><label for="text-input" class=" form-control-label"><strong>Nomor KK</strong></label></div>
                                            <div class="col-12 col-md-6"><input type="text" id="text-input" name="no_kk" placeholder="Nomor KK" class="form-control" value="{{$edit->no_kk}}"></div>
                                        </div>
                                        <div class="form-group" >
                                            <div class="col col-md-12"><label for="text-input" class=" form-control-label"><strong>Nama KK</strong></label></div>
                                            <div class="col-12 col-md-6"><input type="text" id="text-input" name="nm_kk" placeholder="Nama KK" class="form-control" value="{{$edit->nm_kk}}"></div>
                                        </div>
                                        <div class="form-group" >
                                            <div class="col col-md-12"><label for="text-input" class=" form-control-label"><strong>Kode Rumah</strong></label></div>
                                            <div class="col-12 col-md-6"><input type="text" id="text-input" name="kd_rumah" placeholder="Kode Rumah" class="form-control" value="{{$edit->kd_rumah}}"></div>
                                        </div>
                                        <div class="form-group" >
                                            <div class="col col-md-12"><label for="text-input" class=" form-control-label"><strong>No Rumah</strong></label></div>
                                            <div class="col-12 col-md-6"><input type="text" id="text-input" name="no_rumah" placeholder="Nomor Rumah" class="form-control" value="{{$edit->no_rumah}}"></div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Kode RT</strong></label></div>
                                            <div class="col-12 col-md-6">
                                                <select name="kd_rt" id="select" class="form-control" >
                                                    <option value="0"{{ '0'    == $edit->kd_rt ? 'selected' : ''}}>0</option>
                                                    <option value="001"{{ '001'    == $edit->kd_rt ? 'selected' : ''}}>001</option>
                                                    <option value="002"{{ '002'    == $edit->kd_rt ? 'selected' : ''}}>002</option>
                                                    <option value="013"{{ '013'    == $edit->kd_rt ? 'selected' : ''}}>013</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group" >
                                            <div class="col col-md-12"><label for="text-input" class=" form-control-label"><strong>Jumlah KK</strong></label></div>
                                            <div class="col-12 col-md-6"><input type="text" id="text-input" name="jml_kk" placeholder="Jumlah KK" class="form-control" value="{{$edit->jml_kk}}"></div>
                                        </div>
                                        
                                        
                                        
                                    </div>
                                    
                                    
                                    
                                    <div class="col-lg-6">
                                        <div class="form-group" >
                                            <div class="col col-md-12"><label for="text-input" class=" form-control-label"><strong>Jumlah Penghuni</strong></label></div>
                                            <div class="col-12 col-md-6"><input type="text" id="text-input" name="jml_penghuni" placeholder="Jumlah Penghuni" class="form-control" value="{{$edit->jml_penghuni}}"></div>
                                        </div>
                                        <div class="form-group" >
                                            <div class="col col-md-12"><label for="text-input" class=" form-control-label"><strong>Keterangan</strong></label></div>
                                            <div class="col-12 col-md-6"><input type="text" id="text-input" name="keterangan" placeholder="Keterangan" class="form-control" value="{{$edit->keterangan}}"></div>
                                        </div>
                                        <div class="form-group" >
                                            <div class="col col-md-12"><label for="text-input" class=" form-control-label"><strong>Status Kontrakan</strong></label></div>
                                            <div class="col-12 col-md-6"><input type="text" id="text-input" name="is_kontrakan" placeholder="Status Kontrakan" class="form-control" value="{{$edit->is_kontrakan}}"></div>
                                        </div>
                                        <div class="form-group" >
                                            <div class="col col-md-12"><label for="text-input" class=" form-control-label"><strong>Status</strong></label></div>
                                            <div class="col-12 col-md-6"><input type="text" id="text-input" name="status" placeholder="Status" class="form-control" value="{{$edit->status}}"></div>
                                        </div>
                                        <div class="form-group" >
                                            <div class="col col-md-12"><label for="text-input" class=" form-control-label"><strong>Latitude</strong></label></div>
                                            <div class="col-12 col-md-6"><input type="text" id="text-input" name="latitude" placeholder="Latitude" class="form-control" value="{{$edit->latitude}}"></div>
                                        </div>
                                        <div class="form-group" >
                                            <div class="col col-md-12"><label for="text-input" class=" form-control-label"><strong>Longitude</strong></label></div>
                                            <div class="col-12 col-md-6"><input type="text" id="text-input" name="longitude" placeholder="Longitude" class="form-control" value="{{$edit->longitude}}"></div>
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