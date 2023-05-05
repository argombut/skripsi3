@extends('takmir/layout',[
"InfoPage" => [
"Navbar" => '/takmir/user'
]
])
@section('title', 'Edit Role User')

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
                        <h1>TABEL USER</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="/">Dashboard</a></li>
                            <li><a href="#">Edit User</a></li>
                            <li class="active">Data User</li>
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

            <div class="row col-md-12">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Tabel Data Warga</strong>
                        </div>
                        <div class="card-body">
                            <a href="{{url('/../md/md_user/form_user')}}" class="btn btn-success" id="tambah" style="margin-bottom: 15px">Tambah Data User</a>
                        <div class="table-responsive">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Edit Role</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $urut = 0; ?>
                                @foreach( $datauser as $result => $w )
                                <tr>
                                    <td>{{ $urut += 1; }}</td>
                                    <td>{{$w->name}}</td>
                                    <td>{{$w->email}}</td>
                                    <td>{{$w->role}}</td>
                                    <td>
                                        <a href="/edit_user/{{$w->id}}" class="btn btn-warning" id="edit">EDIT</a>
                                        {{--   <a href="/delete_user/{{$w->id}}}" class="btn btn-danger" id="delete">DELETE</a>  --}}
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                            
                        </table>
                        {{--  {{ $datauser->links() }}  --}}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>


@endsection

@section('customscript')

@endsection