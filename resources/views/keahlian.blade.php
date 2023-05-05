@extends('layout/paan',[
    'InfoPage' => [
        'Navbar' => '/keahlian'
        ]
    ])
@section('title', 'Data Keahlian')

@section('container')
@if(Session::has('post_delete'))
<span>{{Session::get('post_delete')}}</span>
@endif
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>TABEL DATA KEAHLIAN</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="/">Dashboard</a></li>
                            <li><a href="#">Data Jamaah</a></li>
                            <li class="active">Data Keahlian</li>
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


                    <div class="card-body">
                        <a href="form_keahlian" class="btn btn-success" id="tambah">Tambah Data Keahlian</a> <br>
                        <hr>
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No. KK</th>
                                    <th>NIK</th>
                                    <th>RT</th>
                                    <th>Nama</th>
                                    <th>Panggilan</th>
                                    <th>Keahlian</th>
                                    <th>Sertifikat</th>
                                    <th>Deskripsi</th>
                                    <th>Level</th>
                                    {{-- <th>Deskripsi</th> --}}
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($keahlian as $k)
                                <tr>
                                    <td>{{$k->no_kk}}</td>
                                    <td>{{$k->no_ktp}}</td>
                                    <td>{{$k->kd_rt}}</td>
                                    <td>{{$k->nama}}</td>
                                    <td>{{$k->nm_panggilan}}</td>
                                    <td>{{$k->nama_keahlian}}</td>
                                    <td>{{$k->is_sertifikat}}</td>
                                    <td>{{$k->deskripsi_sertifikat}}</td>
                                    <td>{{$k->level_sertifikat}}</td>
                                    {{-- <td>{{$k->deskripsi_sertifikat}}</td> --}}
                                    <td>
                                        <a href="/edit_keahlian/{{$k->id}}" class="btn btn-warning" id="edit">EDIT</a>
                                        <a href="/delete_data_keahlian/{{$k->id}}" class="btn btn-danger" id="delete">DELETE</a>
                                    </td>
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

@section('customscript')
<script type="text/javascript">
    $(document).ready(function() {
        $('#bootstrap-data-table-export').DataTable();
    });
</script>
@endsection