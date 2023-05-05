@extends('layout/paan',[
'InfoPage' => [
'Navbar' => '/data_keahlian'
]])
@section('title', 'Keahlian')

@section('container')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>TABEL DATA KEAHLIAN WARGA</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="/">Dashboard</a></li>
                            <li><a href="#">Tampilkan Data</a></li>
                            <li class="active">Tampil Keahlian</li>
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
                        <strong class="card-title">Filter Data Keahlian</strong>
                    </div>
                    <div class="card-body">
                        <div id="cFilter" class='container-fluid flex-row flex-nowrap'>
                            <div class="row">
                                <div class="col-sm-3" hidden>
                                    <div class="form-group">
                                        <label class="control-label">No. Kartu Keluarga</label>
                                        <select class="select form-control"></select>
                                    </div>
                                </div>
                                <div class="col-sm-3" hidden>
                                    <div class="form-group">
                                        <label class="control-label">NIK</label>
                                        <select class="select form-control"></select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group row">
                                        <label class="col-sm-4 ">No. RT</label>
                                        <select class="select form-control col-sm-4"></select>
                                    </div>
                                </div>
                                <div class="col-sm-3" hidden>
                                    <div class="form-group">
                                        <label class="control-label">RT</label>
                                        <select class="select form-control"></select>
                                    </div>
                                </div>
                                <div class="col-sm-3" hidden>
                                    <div class="form-group">
                                        <label class="control-label">Nama</label>
                                        <select class="select form-control"></select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right">Keahlian</label>
                                        <select class="select form-control col-sm-7"></select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group row">
                                        <label class="col-sm-6 text-right">Level Sertifikat</label>
                                        <select class="select form-control col-sm-5"></select>
                                    </div>
                                </div>
                                <div class="col-sm-3" hidden>
                                    <div class="form-group">
                                        <label class="control-label">Jenis Kelamin</label>
                                        <select class="select form-control"></select>
                                    </div>
                                </div>   
                                <div class="col-sm-2 text-center">
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
                        <strong class="card-title">Tabel Data Keahlian Warga</strong>
                    </div>                   
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered" style="text-align: center">
                            <thead>
                                <tr>
                                    <th>Kode KK</th>
                                    <th>Kode Warga</th>
                                    {{-- <th>RW</th> --}}
                                    <th>RT</th>
                                    <th>Nama</th>
                                    <th>Panggilan</th>
                                    <th>Keahlian</th>
                                    <th>Level Sertifikat</th>
                                    <th>Deskripsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($keahlian as $k)
                                <tr>
                                    <td>{{$k->kode_kk}}</td>
                                    <td>{{$k->kd_induk}}</td>
                                    {{-- <td>{{$r->no_rw}}</td> --}}
                                    <td>{{$k->kd_rt}}</td>
                                    <td>{{$k->nama}}</td>
                                    <td>{{$k->nm_panggilan}}</td>
                                    <td>{{$k->nama_keahlian}}</td>
                                    <td>{{$k->level_sertifikat}}</td>
                                    <td>{{$k->deskripsi_sertifikat}}</td>
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