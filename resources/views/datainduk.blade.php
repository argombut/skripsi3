@extends('layout/paan',[
    "InfoPage" => [
        "Navbar" => '/datainduk'
    ]
])
@section('title', 'Data Warga')

@section('container')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>TABEL DATA WARGA</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="/">Dashboard</a></li>
                            <li><a href="#">Tampilkan Data</a></li>
                            <li class="active">Data Warga</li>
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
                        <strong class="card-title">Filter Data Warga</strong>
                    </div>
                    <div class="card-body">
                        <div id="cFilter" class='container-fluid flex-row flex-nowrap'>
                            <div class="row">
                                <div class="col-sm-3" hidden>
                                    <div class="form-group">
                                        <label class="control-label">Kode Kartu Keluarga</label>
                                        <select class="select form-control"></select>
                                    </div>
                                </div>
                                <div class="col-sm-3" hidden>
                                    <div class="form-group">
                                        <label class="control-label">Kode Warga</label>
                                        <select class="select form-control"></select>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group row">
                                        <label class="col-sm-4 text-right">RW</label>
                                        <select class="select form-control col-sm-4 text-left"></select>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group row">
                                        <label class="col-sm-4 text-right" >RT</label>
                                        <select class="select form-control col-sm-4"></select>
                                    </div>
                                </div>
                                <div class="col-sm-3" hidden>
                                    <div class="form-group">
                                        <label class="control-label">Nama</label>
                                        <select class="select form-control"></select>
                                    </div>
                                </div>
                                <div class="col-sm-3" hidden>
                                    <div class="form-group">
                                        <label class="control-label">Nama Panggilan</label>
                                        <select class="select form-control"></select>
                                    </div>
                                </div>
                                <div class="col-sm-3" hidden>
                                    <div class="form-group">
                                        <label class="control-label">TTL</label>
                                        <select class="select form-control"></select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group row">
                                        <label class="col-sm-5 text-right">Jenis Kelamin</label>
                                            <select class="select form-control col-sm-5"></select>
                                    </div>
                                </div>
                                <div class="col-sm-3" hidden>
                                    <div class="form-group">
                                        <label class="control-label">Status Hubungan</label>
                                        <select class="select form-control"></select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group row">
                                        <label class="col-sm-4 text-right">Status Mukim</label>
                                        <select class="select form-control col-sm-5"></select>
                                    </div>
                                </div>
                                <div class="col-sm-3" hidden>
                                    <div class="form-group">
                                        <label class="control-label">Status</label>
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
                        <strong class="card-title">Tabel Data Warga</strong>
                    </div>
                    
                    <div class="card-body">
                       
                            
                                <a href="{{route('export')}}" class="btn btn-success" id="tambah"> <i class="fa fa-download"></i> Excel</a> <hr>
                        
                    
                        <table id="bootstrap-data-table" class="table table-striped table-bordered" style="text-align: center">
                            <thead>
                                <tr>
                                    <th>Kode KK</th>
                                    <th>Kode Warga</th>
                                    <th>RW</th>
                                    <th>RT</th>
                                    <th>Nama</th>
                                    <th>Panggilan</th>
                                    <th>TTL</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Status Hubungan</th>
                                    <th>Status Mukim</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($datainduk as $d)
                                <tr>

                                    <td>{{$d->kode_kk}}</td>
                                    <td>{{$d->kd_induk}}</td>
                                    <td>{{$d->no_rw}}</td>
                                    <td>{{$d->no_rt}}</td>
                                    <td>{{$d->nama}}</td>
                                    <td>{{$d->nm_panggilan}}</td>
                                    <td>{{$d->tmp_lahir}}, {{$d->tgl_lahir}}</td>
                                    <td>{{$d->j_kelamin}}</td>
                                    <td>{{$d->status_hub_kk}}</td>
                                    <td>{{$d->status_mukim}}</td>
                                    <td>{{$d->status}}</td>
                                    
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

<!-- Scripts -->
@section('customscript')
<script>

</script>
@endsection
