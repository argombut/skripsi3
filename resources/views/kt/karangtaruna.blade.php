@extends('layout/kt',[
"InfoPage" => [
"Navbar" => '/kt/karangtaruna'
]
])
@section('title', 'Data Anggota Karang Taruna')

@section('container')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>DATA PEMUDA LAKI-LAKI</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="/">Dashboard</a></li>
                            <li><a href="#">Data Warga</a></li>
                            <li class="active">Anggota Karang Taruna</li>
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
                        <strong class="card-title">Tabel Anggota Karang Taruna</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Nomor Kartu Keluarga</th>
                                    <th>NIK</th>
                                    <th>RW</th>
                                    <th>RT</th>
                                    {{-- <th>Nama</th> --}}
                                    <th>Panggilan</th>
                                    <th>Anggota Karang Taruna</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data_induk as $p )
                                <tr>
                                    <td>{{$p->no_kk}}</td>
                                    <td>{{$p->no_ktp}}</td>
                                    <td>{{$p->no_rw}}</td>
                                    <td>{{$p->no_rt}}</td>
                                    {{-- <td>{{$p->nama}}</td> --}}
                                    <td>{{$p->nm_panggilan}}</td>
                                    <td>{{$p->is_kt}}</td>

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