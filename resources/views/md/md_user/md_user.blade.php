@extends('red_takmir/layout',[
"InfoPage" => [
"Navbar" => '/red_takmir/user'
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
                            <li><a href="#">Atur User</a></li>
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
                            <a href="/form_user" class="btn btn-success" id="tambah" style="margin-bottom: 15px">Tambah Data User</a>
                            {{--  <a href="{{route ('google.add')}}" class="btn btn-success" id="tambah" style="margin-bottom: 15px"></i> Tambah Data </a>  --}}
                        <div class="table-responsive">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Hak Akses</th>
                                        <th>Edit / Delete User</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $urut = 0; ?>
                                    @foreach( $users as $result => $w )
                                    <tr>
                                        <td>{{ $urut += 1; }}</td>
                                        <td>{{$w->name}}</td>
                                        <td>{{$w->email}}</td>
                                        <td class="text-center">
                                            <?php 
                                            if($w->role == '2'){
                                                echo "Admin"; 
                                            } else if($w->role == '3'){
                                                echo "RW";
                                            } else if($w->role == '4'){
                                                echo "KRT";
                                            } else if($w->role == '5'){
                                                echo "PKK";
                                            } else if($w->role == '6'){
                                                echo "Takmir";
                                            } else if($w->role == '7'){
                                                echo "Tidak Diberi Hak Akses";
                                            }
                                            ?>
                                        </td>
                                        <td class="text-center">
                                            <a href="/edit_user/{{$w->id}}" class="btn btn-warning" id="edit">EDIT</a>
                                            <a href="/delete_user/{{$w->id}}}" class="btn btn-danger" id="delete">DELETE</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            
                        </table>
                        {{--  {{ $user->links() }}  --}}
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