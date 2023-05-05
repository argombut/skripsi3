@extends('layout/paan',[
'InfoPage' => [
'Navbar' => '/md_rumah'
]])
@section('title', 'Master Data Rumah')

@section('container')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>TABEL MD RUMAH</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="/">Dashboard</a></li>
                            <li><a href="#">Master Data</a></li>
                            <li class="active">MD Rumah</li>
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
                        <a href="form_rumah" class="btn btn-success" id="tambah">Tambah Master Data Rumah</a> <br>
                        <hr>
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Kode</th>
                                    <th>No. Rumah</th>
                                    <th>RT</th>
                                    <th>Jml. KK</th>
                                    <th>Jml. Penghuni</th>
                                    <th>Nama KK</th>
                                    <th>Keterangan</th>
                                    <th>Status Kontrakan</th>
                                    <th>Status</th>
                                    <th>Latitude</th>
                                    <th>Longitude</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($md_rumah as $mdrum)
                                <tr>
                                    <td>{{$mdrum->kd_rumah}}</td>
                                    <td>{{$mdrum->no_rumah}}</td>
                                    <td>{{$mdrum->kd_rt}}</td>
                                    <td>{{$mdrum->jml_kk}}</td>
                                    <td>{{$mdrum->jml_penghuni}}</td>
                                    <td>{{$mdrum->nm_kk}}</td>
                                    <td>{{$mdrum->keterangan}}</td>
                                    <td>{{$mdrum->is_kontrakan}}</td>
                                    <td>{{$mdrum->status}}</td>
                                    <td>{{$mdrum->latitude}}</td>
                                    <td>{{$mdrum->longitude}}</td>
                                    <td>
                                        <a href="/edit_mdrumah/{{$mdrum->kd_rumah}}" class="btn btn-warning" id="edit">EDIT</a>
                                        <a href="/delete_mdrumah/{{$mdrum->kd_rumah}}}" class="btn btn-danger" id="delete">DELETE</a>
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