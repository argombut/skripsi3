@extends('layout/paan',[
'InfoPage' => [
'Navbar' => '/edit_agama'
]])
@section('title', 'Form Edit Agama')

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
                            <li><a href="#">Edit Agama</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="animated fadeIn">
        @if(Session::has('post_updateagama'))
        <span>{{Session::get('post_updateagama')}}</span>
        @endif
        <form method="post" action="{{route('updateagama.post')}}">
            @csrf
            <input type="hidden" name="id" value="{{$edit->kd_agama}}">
            <div class="row">


                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body card-block">
                            <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <h2><strong>Edit Data Agama</strong></h2>
                                <hr> <br>
                                <div class="row justify-content-md-center">
                                    <div class="col-lg-12">
                                        <div class="form-group" >
                                            <div class="col col-md-12"><label for="text-input" class=" form-control-label"><strong>Kode Agama</strong></label></div>
                                            <div class="col-12 col-md-6"><input type="text" id="text-input" name="kd_agama" placeholder="Nomor RW" class="form-control" value="{{$edit->kd_agama}}"></div>
                                        </div>
                                        <div class="form-group" >
                                            <div class="col col-md-12"><label for="text-input" class=" form-control-label"><strong>Nama Agama</strong></label></div>
                                            <div class="col-12 col-md-6"><input type="text" id="text-input" name="nama_agama" placeholder="Nama Agama" class="form-control" value="{{$edit->nama_agama}}"></div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Keterangan</strong></label></div>
                                            <div class="col-12 col-md-6"><input type="text" id="text-input" name="keterangan" placeholder="Keterangan" class="form-control" value="{{$edit->keterangan}}"></div>
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