@extends('layout/paan',[
    "InfoPage" => [
        "Navbar" => '/data_kk'
    ]
])
@section('title', 'Data Kartu Keluarga')


@section('container')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>TABEL DATA KARTU KELUARGA</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="/">Dashboard</a></li>
                            <li><a href="#">Data Jamaah</a></li>
                            <li class="active">Data KK</li>
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
                        <strong class="card-title">Filter Data Kartu Keluarga</strong>
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
                                        <label class="control-label">Nama</label>
                                        <select class="select form-control"></select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group row">
                                        <label class="col-sm-4">No. RW</label>
                                            <select class="select form-control col-sm-5"></select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group row">
                                        <label class="col-sm-4">No. RT</label>
                                        <select class="select form-control col-sm-5"></select>
                                    </div>
                                </div>
                                
                                <div class="col-sm-4" hidden>
                                    <div class="form-group">
                                        <label class="control-label">No. Rumah</label>
                                        <select class="select form-control"></select>
                                    </div>
                                </div>
                                <div class="col-sm-4" hidden>
                                    <div class="form-group">
                                        <label class="control-label">No. Rumah</label>
                                        <select class="select form-control"></select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group row">
                                        <label class="col-sm-4">Ekonomi</label>
                                        <select class="select form-control col-sm-6"></select>
                                    </div>
                                </div>
                                <div class="col-sm-3" hidden>
                                    <div class="form-group">
                                        <label class="control-label">Keterangan</label>
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
                        <strong class="card-title">Tabel Data Kartu Keluarga</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered" style="text-align: center">
                            <thead>
                                <tr>
                                    <th>Kode Kartu Keluarga</th>
                                    <th>Nama Kepala Keluarga</th>
                                    <th>RW</th>
                                    <th>RT</th>
                                    <th>No. Rumah</th>
                                    <th>Jumlah Anggota</th>
                                    <th>Level Ekonomi</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($kk as $dkk)
                                <tr>

                                    <td>{{$dkk->kode_kk}}</td>
                                    <td>{{$dkk->nm_kk}}</td>
                                    <td>{{$dkk->no_rw}}</td>
                                    <td>{{$dkk->no_rt}}</td>
                                    <td>{{$dkk->kd_rumah}}</td>
                                    <td>{{$dkk->jml_anggota}}</td>
                                    <td>{{$dkk->nama_level}}</td>
                                    <td>{{$dkk->keterangan}}</td>
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
