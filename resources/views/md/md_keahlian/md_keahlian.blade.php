@extends('layout/paan',[
'InfoPage' => [
'Navbar' => '/md_keahlian'
]])
@section('title', 'Master Data Keahlian')

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
                        <h1>Tabel MD Keahlian</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="/">Dashboard</a></li>
                            <li><a href="#">Master Data</a></li>
                            <li class="active">MD Keahlian</li>
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
                        <a href="form_mdkeahlian" class="btn btn-success" id="tambah">Tambah Master Data Keahlian</a> <br>
                        <hr>
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Kode Keahlian</th>
                                    <th>Nama Level</th>
                                    <th>Deskripsi</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($keahlian as $k)
                                <tr>
                                    <td>{{$k->kd_keahlian}}</td>
                                    <td>{{$k->nama_keahlian}}</td>
                                    <td>{{$k->deskripsi}}</td>
                                    <td>{{$k->keterangan}}</td>
                                    <td>
                                    <a href="/edit_mdkeahlian/{{$k->kd_keahlian}}" class="btn btn-warning" id="edit">EDIT</a>
                                    <a href="/delete_mdkeahlian/{{$k->kd_keahlian}}}" class="btn btn-danger" id="delete">DELETE</a>
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