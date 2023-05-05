@extends('layout/paan',[
'InfoPage' => [
'Navbar' => '/golongan_darah'
]])
@section('title', 'Golongan Darah')

@section('container')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>TABEL GOLONGAN DARAH WARGA</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="/">Dashboard</a></li>
                            <li><a href="#">Tampilkan Data</a></li>
                            <li class="active">Data Golongan Darah</li>
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
                        <strong class="card-title">Filter Data Golongan Darah</strong>
                    </div>
                    <div class="card-body">
                        <div id="cFilter" class='container-fluid flex-row flex-nowrap'>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group row">
                                        <label class="col-sm-4">No. RW</label>
                                            <select class="select form-control col-sm-5"></select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group row">
                                        <label class="col-sm-4">No. RT</label>
                                            <select class="select form-control col-sm-5"></select>
                                    </div>
                                </div>
                                <div class="col-sm-4" hidden>
                                    <div class="form-group">
                                        <label class="control-label">Nomor Rumah</label>
                                        <select class="select form-control"></select>
                                    </div>
                                </div>
                                <div class="col-sm-4" hidden>
                                    <div class="form-group">
                                        <label class="control-label">Nomor Rumah</label>
                                        <select class="select form-control"></select>
                                    </div>
                                </div>
                                <div class="col-sm-4" hidden>
                                    <div class="form-group">
                                        <label class="control-label">Nomor Rumah</label>
                                        <select class="select form-control"></select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4">Golongan Darah</label>
                                        <select class="select form-control col-sm-6"></select>
                                    </div>
                                </div>    
                                <div class="col-sm-2 text-center">
                                    <button class='btn btn-primary' style="font-size: 12px" onclick="cFilter()">Filter</button>
                                </div>                    
                            </div>

                        </div>

                        
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Tabel Golongan Darah Warga</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered" style="text-align: center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>RT</th>
                                    <th>RW</th>
                                    <th>No. Rumah</th>
                                    <th>Nama</th>
                                    <th>Panggilan</th>
                                    <th>Golongan Darah</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($table as $result => $gd)
                                <tr>
                                    <td>{{ $result + $table->firstitem() }}</td>
                                    <td>{{$gd->no_rt}}</td>
                                    <td>{{$gd->no_rw}}</td>
                                    <td>{{$gd->kd_rumah}}</td>
                                    <td>{{$gd->nama}}</td>
                                    <td>{{$gd->nm_panggilan}}</td>
                                    <td>
                                        @php
                                            if($gd->gol_darah == 'A'){
                                                echo 'A';
                                            }elseif($gd->gol_darah == 'B'){
                                                echo 'B';
                                            }elseif($gd->gol_darah == 'O'){
                                                echo 'O';
                                            }else{
                                                echo 'AB';
                                            }
                                        @endphp
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div>
</div><!-- .content -->
@endsection