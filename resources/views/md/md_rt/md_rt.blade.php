@extends('layout/paan',[
'InfoPage' => [
'Navbar' => '/md_rt'
]])
@section('title', 'Master Data RT')

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
                        <h1>Tabel MD RT</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="/">Dashboard</a></li>
                            <li><a href="#">Master Data</a></li>
                            <li class="active">MD RT</li>
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
                        <a href="form_rt" class="btn btn-success" id="tambah">Tambah Master Data RT</a> <br>
                        <hr>
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Kode RT</th>
                                    <th>Nomor RT</th>
                                    <th>Nomor RW</th>
                                    <th>Nama Pejabat</th>
                                    <th>Nama Ibu Pejabat</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($md_rt as $mdrt)
                                <tr>
                                    <td>{{$mdrt->kd_rt}}</td>
                                    <td>{{$mdrt->no_rt}}</td>
                                    <td>{{$mdrt->no_rw}}</td>
                                    <td>{{$mdrt->nm_pejabat}}</td>
                                    <td>{{$mdrt->nm_bu_pejabat}}</td>
                                    <td>{{$mdrt->keterangan}}</td>
                                    <td>
                                    <a href="/edit_mdrt/{{$mdrt->kd_rt}}" class="btn btn-warning" id="edit">EDIT</a>
                                    <a href="/delete_mdrt/{{$mdrt->kd_rt}}}" class="btn btn-danger" id="delete">DELETE</a>
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