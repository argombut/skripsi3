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
                <form method="post" action="{{route('mdkeahlian.save')}}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                     Input Data Keahlian
                                </div>
                                <div class="card-body card-block">
                                    <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Kode Keahlian</strong></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="kd_keahlian" placeholder="Kode Keahlian" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Nama Keahlian</strong></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama_keahlian" placeholder="Nama Keahlian" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Deskripsi</strong></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="deskripsi" placeholder="Deskripsi" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Keterangan</strong></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="keterangan" placeholder="Keterangan" class="form-control"></div>
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