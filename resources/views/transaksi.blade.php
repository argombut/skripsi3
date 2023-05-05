@extends('layout/paan',[
    'InfoPage' => [
        'Navbar' => '/transaksi'
    ]
])
@section('title', 'Transaksi')

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
            <div class="col-sm-8s">
                <div class="page-header float-left">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="home">Dashboard</a></li>
                            <li><a href="#">Data Jamaah</a></li>
                            <li class="active">Data Kepala Keluarga</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="animated fadeIn">
        @if(Session::has('post_add'))
        <span>{{Session::get('post_add')}}</span>
        @endif
        <form method="post" action="{{route('savedkk.post')}}">
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="form_datakk" class="btn btn-success" id="tambah">Tambah Data Kartu Keluarga</a> <br>
                            <hr>
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nomor Kartu Keluarga</th>
                                        <th>Nama Kepala Keluarga</th>
                                        <th>Jumlah Anggota</th>
                                        <th>RW</th>
                                        <th>RT</th>
                                        {{-- <th>Keterangan</th> --}}
                                        <th id="tk">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($dkdi as $join)
                                    <tr>
                                        <td> <a class="btn btn-link" id="hue" data-a="{{$join->no_kk}}" data-toggle="modal" data-target=".bd-example-modal-lg" style="color:rgb(0, 17, 255); font-size:12px;">{{$join->no_kk}}</a></td>
                                        <td>{{$join->nm_kk}}</td>
                                        <td>{{$join->jml_anggota}}</td>
                                        <td>{{$join->no_rw}}</td>
                                        <td>{{$join->no_rt}}</td>
                                        {{-- <td>{{$join->keterangan}}</td> --}}
                                        <td>
                                            <a href="transaksi_datainduk/{{$join->no_kk}}" class="btn btn-primary" id="edit">TAMBAH ANGGOTA</a>
                                            <a href="/edit_dkk/{{$join->no_kk}}" class="btn btn-warning" id="edit">EDIT</a>
                                            <a href="/delete_data_kk/{{$join->no_kk}}" class="btn btn-danger" id="delete">HAPUS</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document" style="max-width:70% !important;">
        <div class="modal-content">
            <div class="container">
                <br>
                <h2>Kartu Keluarga</h2>
                <hr><br>
                <div class="row">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Lengkap</th>
                                <th>Nomor Kartu Keluarga</th>
                                <th>Status Hubungan Dalam Keluarga</th>
                                <th>Jenis Kelamin</th>
                                <th>Tempat</th>
                                <th>Tanggal Lahir</th>
                                <th>Agama</th>
                                <th>Pendidikan</th>
                                <th>Pekerjaan</th>
                            </tr>
                        </thead>
                        <tbody id="ew">
                            <tr></tr>
                            {{-- @foreach($tampil as $did)
                                        <tr>
                                            
                                            <td>{{$did->nama}}</td>
                            <td>{{$did->no_kk}}</td>
                            <td>{{$did->status_hub_kk}}</td>
                            <td>{{$did->j_kelamin}}</td>
                            <td>{{$did->tmp_lahir}}, {{$did->tgl_lahir}}</td>
                            <td>{{$did->kd_agama}}</td>
                            <td>{{$did->kd_pendidikan}}</td>
                            <td>{{$did->kd_pekerjaan}}</td>
                            --}}
                            {{-- --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div><!-- /#right-panel -->
@endsection

@section('customscript')
<script>
    // $('.bd-example-modal-lg').on('show.bs.modal', function (e) {
    //         console.dir($(e.relatedTarget).data('a'))
    //       })

    $('.bd-example-modal-lg').on('show.bs.modal', function(e) {
        var btn = e.relatedTarget
        var id = $(btn).data('a')
        fetch('transaksi/' + id)
            .then(response => response.json())
            .then(json => {
                $('#ew').empty()
                $.each(json, function(key, data) {
                    // $('#ew').append('<td>' + data.no_kk + '</td>');
                    // console.log(data);

                    tr = document.createElement('tr')

                    $.each(data, function(index, detail) {
                        // console.log(detail);

                        td = document.createElement('td')
                        td.innerHTML = detail
                        tr.appendChild(td)

                    })

                    $('#ew').append(tr)
                })
            })
    })
</script>
@endsection