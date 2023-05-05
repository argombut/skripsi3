@extends('layout/paan',[
    'InfoPage' => [
        'Navbar' => '/data_induk'
        ]
    ])
@section('title', 'Data Induk')

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
                        <h1>TABEL DATA WARGA</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="/">Dashboard</a></li>
                            <li><a href="#">Data Jamaah</a></li>
                            <li class="active">Data Induk</li>
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
                        <a href="form_datainduk" class="btn btn-success" id="tambah">Tambah Data Warga</a> <br>
                        <hr>
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Nomor KK</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Panggilan</th>
                                    <th>TTL</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Status Hubungan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data_induk as $did)
                                <tr>
                                    <td>{{$did->no_kk}}</td>
                                    <td>{{$did->no_ktp}}</td>
                                    <td>{{$did->nama}}</td>
                                    <td>{{$did->nm_panggilan}}</td>
                                    <td>{{$did->tmp_lahir}}, {{$did->tgl_lahir}}</td>
                                    <td>{{$did->j_kelamin}}</td>
                                    <td>{{$did->status_hub_kk}}</td>
                                    <td>
                                        <a href="/edit_data_induk/{{$did->kd_induk}}" class="btn btn-warning" id="edit">EDIT</a>
                                        <a href="/delete_data_induk/{{$did->kd_induk}}" class="btn btn-danger" id="delete">DELETE</a>
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