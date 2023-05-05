@extends('layout/paan',[
'InfoPage' => [
'Navbar' => '/transaksi'
]])
@section('title', 'Form Data KK')

@section('container')
<div class="content">
    <div class="animated fadeIn">
        <div @if(Session::has('post_add')) <span>{{Session::get('post_add')}}</span>
            @endif
            <div class="col-md-12">
                <form method="post" action="{{route('savedkk.post')}}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    Form Input <strong>Data Kartu Keluarga</strong>
                                </div>
                                <div class="card-body card-block">
                                    <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Nomor Kartu Keluarga</strong></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="nomorkk" placeholder="Nomor Kartu Keluarga" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Nomor RT</strong></label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="nort" id="select" class="form-control">
                                                    @foreach ($rt as $rt)
                                                    <option value='{{$rt->no_rt}}'>{{$rt->no_rt}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Nomor RW</strong></label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="norw" id="select" class="form-control">
                                                    @foreach ($rw as $rw)
                                                    <option value='{{$rw->no_rw}}'>{{$rw->no_rw}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Nama Kepala Keluarga</strong></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="namakk" placeholder="Nama Kepala Keluarga" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Kode Rumah</strong></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="koderumah" placeholder="Kode Rumah" class="form-control"></div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Level Ekonomi</strong></label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="levelekonomi" id="select" class="form-control">
                                                    @foreach($le as $le)
                                                        <option value='{{$le->kd_level_ekonomi}}'>{{$le->nama_level}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
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