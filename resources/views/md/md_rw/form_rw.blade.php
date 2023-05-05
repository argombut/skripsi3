@extends('layout/paan',[
'InfoPage' => [
'Navbar' => '/form_rw'
]])
@section('title', 'Form Data RW')

@section('container')
<div class="content">
    <div class="animated fadeIn">
        <div @if(Session::has('post_add')) <span>{{Session::get('post_add')}}</span>
            @endif
            <div class="col-md-12">
                <form method="post" action="{{route('rw.save')}}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                     Input Data RW
                                </div>
                                <div class="card-body card-block">
                                    <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Nomor RW</strong></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="no_rw" placeholder="Nomor RW" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Nama Pejabat</strong></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="nm_pejabat" placeholder="Nama Pejabat" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Nama Ibu Pejabat</strong></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="nm_bu_pejabat" placeholder="Nama Ibu Pejabat" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Keterangan</strong></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="keterangan" placeholder="Keterangan" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Nama Dusun</strong></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="nm_dusun" placeholder="Nama Dusun" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Nama Desa</strong></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="nm_desa" placeholder="Nama Desa" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Nama Kecamatan</strong></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="nm_kecamatan" placeholder="Nama Kecamatan" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Nama Kabupaten</strong></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="nm_kabupaten" placeholder="Nama Kabupaten" class="form-control"></div>
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