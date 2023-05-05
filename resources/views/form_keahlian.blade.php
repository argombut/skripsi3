@extends('layout/paan',[
'InfoPage' => [
'Navbar' => '/form_keahlian'
]])
@section('title', 'Form Data Keahlian')

@section('container')
<div class="content">
    <div class="animated fadeIn">
        <div @if(Session::has('post_add')) <span>{{Session::get('post_add')}}</span>
            @endif
            <div class="col-md-12">
                <form method="post" action="{{route('keahlian.save')}}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                     Input Data Keahlian Warga
                                </div>
                                <div class="card-body card-block">
                                    <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Nama</strong></label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="kd_induk" id="select" class="form-control select" >
                                                    @foreach ($join as $j)
                                                    <option value='{{$j->kd_induk}}'>{{$j->nama}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Kode Keahlian</strong></label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="kd_keahlian" id="select" class="form-control">
                                                    @foreach ($k as $i)
                                                    <option value='{{$i->kd_keahlian}}'>{{$i->nama_keahlian}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Sertifikat</strong></label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="sertifikat" id="select" class="form-control">
                                                    <option value="Ya">Ya</option>
                                                    <option value="Tidak">Tidak</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Deskripsi Sertifikat</strong></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="deskripsi" placeholder="Deskripsi Sertifikat" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Level Sertifikat</strong></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="level" placeholder="Level Sertifikat" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Keterangan</strong></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="keterangan" placeholder="Keterangan" class="form-control"></div>
                                        </div>
                                       
                                        
                                        <input type="submit" name="submit" id="">
                                    </form>
                                </div>

                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div><!-- .animated -->
    </div>
</div><!-- .content -->
@endsection