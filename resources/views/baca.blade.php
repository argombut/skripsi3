@extends('layout/paan',[
'InfoPage' => [
'Navbar' => '/baca'
]])
@section('title', 'Kemampuan Baca')

@section('container')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>TABEL KEMAMPUAN BACA WARGA</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="/">Dashboard</a></li>
                            <li><a href="#">Tampilkan Data</a></li>
                            <li class="active">Data Kemampuan Baca Warga</li>
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
                        <strong class="card-title">Filter Data Kemampuan Baca</strong>
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
                                        <label class="col-sm-4">No. RW</label>
                                            <select class="select form-control col-sm-7"></select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group row">
                                        <label class="col-sm-4 text-right">No. RT</label>
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
                                        <label class="col-sm-4 text-right">Latin</label>
                                        <select class="select form-control col-sm-7"></select>
                                    </div>
                                </div>
                                <div class="col-sm-2 text-center">
                                    <button class='btn btn-primary' style="font-size: 12px" onclick="cFilter()">Filter</button>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group row">
                                        <label class="col-sm-4 text-right">Hijaiyah</label>
                                        <select class="select form-control col-sm-7"></select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group row">
                                        <label class="col-sm-4 text-right">Iqra</label>
                                        <select class="select form-control col-sm-7"></select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group row">
                                        <label class="col-sm-4 text-right">Quran</label>
                                        <select class="select form-control col-sm-7"></select>
                                    </div>
                                </div>
                                
                                
                                {{-- <div class="col-sm-3 text-right">
                                    <button class='btn btn-primary' style="font-size: 12px" onclick="cFilter()">Filter</button>
                                </div> --}}
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Tabel Kemampuan Baca Warga</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered" style="text-align: center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode KK</th>
                                    <th>Kode Warga</th>
                                    <th>RW</th>
                                    <th>RT</th>
                                    <th>Nama</th>
                                    <th>Panggilan</th>
                                    <th>Baca Latin</th>
                                    <th>Baca Hijaiyah</th>
                                    <th>Baca Iqra</th>
                                    <th>Baca Quran</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $pd as $result => $pda )
                                <tr>
                                    <td>{{ $result + $pd->firstitem() }}</td>
                                    <td>{{$pda->kode_kk}}</td>
                                    <td>{{$pda->kd_induk}}</td>
                                    <td>{{$pda->no_rw}}</td>
                                    <td>{{$pda->no_rt}}</td>
                                    <td>{{$pda->nama}}</td>
                                    <td>{{$pda->nm_panggilan}}</td>
                                    <td>{{$pda->is_latin}}</td>
                                    <td>{{$pda->is_hijaiyah}}</td>
                                    <td>{{$pda->is_iqra}}</td>
                                    <td>{{$pda->is_quran}}</td>
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