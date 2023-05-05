@extends('layout/paan',[
'InfoPage' => [
'Navbar' => '/pendidikan'
]])
@section('title', 'Pendidikan')

@section('container')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>TABEL PENDIDIKAN WARGA</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="/">Dashboard</a></li>
                            <li><a href="#">Tampilkan Data</a></li>
                            <li class="active">Data Pendidikan Warga</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Filter Data Pendidikan</strong>
                    </div>
                    <div class="card-body">
                        <div id="cFilter" class='container-fluid flex-row flex-nowrap'>
                            <div class="row">
                                <div class="col-sm-6" hidden>
                                    <div class="form-group">
                                        <label class="control-label">Nomor KK</label>
                                        <select class="select form-control"></select>
                                    </div>
                                </div>
                                <div class="col-sm-6" hidden>
                                    <div class="form-group">
                                        <label class="control-label">NIK</label>
                                        <select class="select form-control"></select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group row">
                                        <label class="col-sm-5">Nomor RW</label>
                                            <select class="select form-control col-sm-7"></select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group row">
                                        <label class="col-sm-5 text-right">Nomor RT</label>
                                        <select class="select form-control col-sm-7"></select>
                                    </div>
                                </div>
                                <div class="col-sm-3" hidden>
                                    <div class="form-group">
                                        <label class="control-label">Nama</label>
                                        <select class="select form-control"></select>
                                    </div>
                                </div>
                                <div class="col-sm-6" hidden>
                                    <div class="form-group">
                                        <label class="control-label">Nama Panggilan</label>
                                        <select class="select form-control"></select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group row">
                                        <label class="col-sm-5 text-right">Pendidikan</label>
                                        <select class="select form-control col-sm-7"></select>
                                    </div>
                                </div>
                                <div class="col-sm-4" hidden>
                                    <div class="form-group">
                                        <label class="control-label">Level Ekonomi</label>
                                        <select class="select form-control"></select>
                                    </div>
                                </div>
                                <div class="col-sm-3 text-center">
                                    <button class='btn btn-primary' style="font-size: 12px" onclick="cFilter()">Filter</button>
                                </div>
                            </div>
                            
                        </div>

                        
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Tabel Pendidikan Warga</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered" style="text-align: center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Kartu Keluarga</th>
                                    <th>Kode Warga</th>
                                    <th>RW</th>
                                    <th>RT</th>
                                    <th>Nama</th>
                                    <th>Panggilan</th>
                                    <th>Jenjang Pendidikan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $pd as $result => $w )
                                <tr>
                                    <td>{{ $result + $pd->firstitem() }}</td>
                                    <td>{{$w->kode_kk}}</td>
                                    <td>{{$w->kd_induk}}</td>
                                    <td>{{$w->no_rw}}</td>
                                    <td>{{$w->no_rt}}</td>
                                    <td>{{$w->nama}}</td>
                                    <td>{{$w->nm_panggilan}}</td>
                                    <td>{{$w->nama_jenjang}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->
@endsection