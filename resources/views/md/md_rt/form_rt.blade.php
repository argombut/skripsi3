@extends('layout/paan',[
'InfoPage' => [
'Navbar' => '/form_rt'
]])
@section('title', 'Form Data RT')

@section('container')
<div class="content">
    <div class="animated fadeIn">
        <div @if(Session::has('post_add')) <span>{{Session::get('post_add')}}</span>
            @endif
            <div class="col-md-12">
                <form method="post" action="{{route('rt.save')}}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                     Input Data RT
                                </div>
                                <div class="card-body card-block">
                                    <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Kode RT</strong></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="kd_rt" placeholder="Kode RT" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Nomor RT</strong></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="no_rt" placeholder="Nomor RT" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Nomor RW</strong></label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="no_rw" id="select" class="form-control">
                                                    <option value="1">1</option>
                                                </select>
                                            </div>
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