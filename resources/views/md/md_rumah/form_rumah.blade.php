@extends('layout/paan',[
'InfoPage' => [
'Navbar' => '/form_rumah'
]])
@section('title', 'Form Data Rumah')

@section('container')
<div class="content">
    <div class="animated fadeIn">
        <div @if(Session::has('post_add')) <span>{{Session::get('post_add')}}</span>
            @endif
            <div class="col-md-12">
                <form method="post" action="{{route('rumah.save')}}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                     Input Data Rumah
                                </div>
                                <div class="card-body card-block">
                                    <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Kode Rumah</strong></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="kd_rumah" placeholder="Kode Rumah" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Nomor Rumah</strong></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="no_rumah" placeholder="Nomor Rumah" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>No. KK Berdasarkan Nama</strong></label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="no_kk" id="select" class="form-control select" >
                                                    @foreach ($join as $r)
                                                    <option value=''>Default</option>
                                                    <option value='{{$r->no_kk}}'>{{$r->nm_kk}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Nama KK</strong></label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="nm_kk" id="select" class="form-control select1">
                                                    @foreach ($join as $r)
                                                    <option value=''>Default</option>
                                                    <option value='{{$r->nm_kk}}'>{{$r->nm_kk}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Kode RT</strong></label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="kd_rt" id="select" class="form-control select2">
                                                    @foreach ($j as $i)
                                                    <option value='{{$i->kd_rt}}'>{{$i->kd_rt}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Keterangan</strong></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="keterangan" placeholder="Keterangan" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Status Kontrakan</strong></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="is_kontrakan" placeholder="Status Kontrakan" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Status</strong></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="status" placeholder="Status" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Latitude</strong></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="latitude" placeholder="Latitude" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Longitude</strong></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="longitude" placeholder="Longitude" class="form-control"></div>
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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