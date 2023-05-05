@extends('layout/pkk',[
"InfoPage" => [
"Navbar" => '/pkk/detail13'
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
                        <h1>DATA DETAIL WARGA PEREMPUAN RT 13</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="/">Dashboard</a></li>
                            <li><a href="#">Data Lainnya</a></li>
                            <li class="active">Data Warga Perempuan RT 13</li>
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
                        <strong class="card-title">Tabel Detail Warga Perempuan RT 2</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Nomor Kartu Keluarga</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Nama Kepala Keluarga</th>
                                    <th>Nomor RT</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $detail13 as $d )
                                <tr>
                                    <td>{{$d->no_kk}}</td>
                                    <td>{{$d->no_ktp}}</td>
                                    <td>{{$d->nama}}</td>
                                    <td>{{$d->nm_kk}}</td>
                                    <td>{{$d->kd_rt}}</td>


                                </tr>
                                @endforeach

                            </tbody>
                        </table>

                        <table>



                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div><!-- .animated -->
</div><!-- .content -->
@endsection