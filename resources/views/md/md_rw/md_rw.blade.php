@extends('layout/paan',[
'InfoPage' => [
'Navbar' => '/md_rw'
]])
@section('title', 'Master Data RW')

@section('container')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>TABEL MD RW</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="/">Dashboard</a></li>
                            <li><a href="#">Master Data</a></li>
                            <li class="active">MD RW</li>
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
                        <a href="form_rw" class="btn btn-success" id="tambah">Tambah Master Data RW</a> <br>
                        <hr>
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>RW</th>
                                    <th>Nama Pejabat</th>
                                    <th>Nama Ibu Pejabat</th>
                                    <th>Keterangan</th>
                                    <th>Dusun</th>
                                    <th>Desa</th>
                                    <th>Kecamatan</th>
                                    <th>Kabupaten</th>
                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($md_rw as $mdrw)
                                <tr>
                                    <td>{{$mdrw->no_rw}}</td>
                                    <td>{{$mdrw->nm_pejabat}}</td>
                                    <td>{{$mdrw->nm_bu_pejabat}}</td>
                                    <td>{{$mdrw->keterangan}}</td>
                                    <td>{{$mdrw->nm_dusun}}</td>
                                    <td>{{$mdrw->nm_desa}}</td>
                                    <td>{{$mdrw->nm_kecamatan}}</td>
                                    <td>{{$mdrw->nm_kabupaten}}</td>
                                    <td>
                                        <a href="/edit_mdrw/{{$mdrw->no_rw}}" class="btn btn-warning" id="edit">EDIT</a>
                                        <a href="/delete_mdrw/{{$mdrw->no_rw}}}" class="btn btn-danger" id="delete">DELETE</a>
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