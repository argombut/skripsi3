@extends('layout/rolerw',[
"InfoPage" => [
"Navbar" => '/rw/usia'
]
])
@section('title', 'Input Data Kartu Keluarga')

@section('container')
<style>
    ::placeholder {
        font-size: 0.8rem;
    }

    .font-08 {
        font-size: 0.8rem !important;
    }

    select,
    input {
        font-size: 0.8rem !important;
    }
</style>

<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="home">Dashboard</a></li>
                            <li><a href="#">Transaksi</a></li>
                            <li><a href="#">Input Data Kartu Keluarga</a></li>
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
            {{-- <div class="col-lg-12"> --}}
            <div class="col-lg-12">
                <div class="card">

                    <div class="card-body">
                        <h2><strong>Detail Warga RT 1</strong></h2>
                        <hr> <br>
                        <div class="default-tab">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="data-anak-tab" data-toggle="tab" href="#data-anak" role="tab" aria-controls="data-anak" aria-selected="true">ANAK-ANAK</a>
                                    <a class="nav-item nav-link" id="data-remaja-tab" data-toggle="tab" href="#data-remaja" role="tab" aria-controls="data-remaja" aria-selected="false">REMAJA</a>
                                    <a class="nav-item nav-link" id="data-dewasa-tab" data-toggle="tab" href="#data-dewasa" role="tab" aria-controls="data-dewasa" aria-selected="false">DEWASA</a>
                                    <a class="nav-item nav-link" id="data-manula-tab" data-toggle="tab" href="#data-manula" role="tab" aria-controls="data-manula" aria-selected="false">MANULA</a>
                                </div>
                            </nav>

                            <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="data-anak" role="tabpanel" aria-labelledby="data-anak-tab">
                                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Nomor Kartu Keluarga</th>
                                                <th>NIK</th>
                                                <th>Nama</th>
                                                <th>Pekerjaan</th>
                                                <th>Level Ekonomi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @foreach( $rt1 as $p )
                                                        <tr>
                                                            <td>{{$p->no_kk}}</td>
                                            <td>{{$p->no_ktp}}</td>
                                            <td>{{$p->nama}}</td>
                                            <td>{{$p->nama_pekerjaan}}</td>
                                            <td>{{$p->nama_level}}</td>
                                            </tr>
                                            @endforeach --}}

                                        </tbody>
                                    </table>


                                </div>



                                <div class="tab-pane fade" id="data-remaja" role="tabpanel" aria-labelledby="data-remaja-tab">
                                    <table id="bootstrap-data-table2" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>NIK</th>
                                                <th>Nomor Kartu Keluarga</th>
                                                <th>Nama</th>
                                                <th>Keahlian</th>
                                                <th>Sertifikat</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @foreach( $join as $k )
                                                    <tr>
                                                        <td>{{$k->no_ktp}}</td>
                                            <td>{{$k->no_kk}}</td>
                                            <td>{{$k->nama}}</td>
                                            <td>{{$k->nama_keahlian}}</td>
                                            <td>{{$k->deskripsi_sertifikat}}</td>
                                            </tr>
                                            @endforeach --}}

                                        </tbody>
                                    </table>

                                </div>
                                <div class="tab-pane fade" id="data-dewasa" role="tabpanel" aria-labelledby="data-dewasa-tab">
                                    <table id="bootstrap-data-table3" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Nomor Kartu Keluarga</th>
                                                <th>Nama Kepala Keluarga</th>

                                                <th>Level Ekonomi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @foreach( $lv as $p )
                                                    <tr>
                                                        <td>{{$p->no_kk}}</td>
                                            <td>{{$p->nm_kk}}</td>
                                            <td>{{$p->nama_level}}</td>

                                            </tr>
                                            @endforeach --}}

                                        </tbody>
                                    </table>

                                </div>


                                <div class="tab-pane fade" id="data-manula" role="tabpanel" aria-labelledby="data-manula-tab">

                                    <table id="bootstrap-data-table4" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Nomor Kartu Keluarga</th>
                                                <th>NIK</th>
                                                <th>Nama</th>
                                                <th>Golongan Darah</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @foreach( $gd as $gd )
                                                    <tr>
                                                        <td>{{$gd->no_kk}}</td>
                                            <td>{{$gd->no_ktp}}</td>
                                            <td>{{$gd->nama}}</td>
                                            <td>{{$gd->gol_darah}}</td>
                                            </tr>
                                            @endforeach --}}

                                        </tbody>
                                    </table>

                                </div>




                            </div>


                        </div>
                    </div>








                </div>
            </div>
            {{-- </div> --}}
        </div>
    </div>
</div>
@endsection