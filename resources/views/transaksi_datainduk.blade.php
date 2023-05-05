@extends('layout/paan',[
'InfoPage' => [
'Navbar' => '/transaksi'
]])
@section('title', 'Form Tambah Anggota')

@section('container')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-8">
                <div class="page-header float-left">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="home">Dashboard</a></li>
                            <li><a href="#">Transaksi</a></li>
                            <li><a href="#">Input Data Kartu Keluarga</a></li>
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
            <div class="col-lg-12">
                <div class="card">

                    <div class="card-body">
                        <h2><strong>Tambah Anggota Kartu Keluarga</strong></h2>
                        <hr> <br>
                        <div class="default-tab">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="data-inti-tab" data-toggle="tab" href="#data-inti" role="tab" aria-controls="data-inti" aria-selected="true">Data Inti</a>
                                    <a class="nav-item nav-link" id="data-personal-tab" data-toggle="tab" href="#data-personal" role="tab" aria-controls="data-personal" aria-selected="false">Data Personal</a>
                                    <a class="nav-item nav-link" id="data-mukim-tab" data-toggle="tab" href="#data-mukim" role="tab" aria-controls="data-mukim" aria-selected="false">Data Mukim</a>
                                    <a class="nav-item nav-link" id="data-ibadah-tab" data-toggle="tab" href="#data-ibadah" role="tab" aria-controls="data-ibadah" aria-selected="false">Data Ibadah</a>
                                </div>
                            </nav>
                            <form id="tambah" method="POST" action="{{route('save.tambah')}}">
                                <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="data-inti" role="tabpanel" aria-labelledby="data-inti-tab">
                                        @csrf

                                        {{-- {{dd($data_induk)}} --}}
                                        <div class="row form-group" hidden>
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Kode Induk</strong></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="kodeinduk" placeholder="Kode Induk" class="form-control" readonly></div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Nomor Kartu Keluarga</strong></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="nomorkk" placeholder="Nomor Kartu Keluarga" class="form-control" value="{{$data_induk[0]->no_kk}}" readonly></div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>NIK</strong></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="nomorktp" placeholder="Nomor KTP" class="form-control" required></div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Nama Lengkap</strong></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="namalengkap" placeholder="Nama Lengkap" class="form-control" required></div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Nama Panggilan</strong></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="namapanggilan" placeholder="Nama Panggilan" class="form-control" required></div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Status Hubungan</strong></label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="hubungan" id="select" class="form-control">
                                                    <option value="Kepala Keluarga">Kepala Keluarga</option>
                                                    <option value="Istri">Istri</option>
                                                    <option value="Anak">Anak</option>
                                                    <option value="Orang Tua">Orang Tua</option>
                                                    <option value="Cucu">Cucu</option>
                                                    <option value="Menantu">Menantu</option>
                                                    <option value="Lain-lain">Lain-lain</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Tempat Lahir</strong></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="tempatlahir" placeholder="Tempat Lahir" class="form-control" required></div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Tanggal Lahir</strong></label></div>
                                            <div class="col-12 col-md-9"><input type="date" id="date" name="date" placeholder="Tempat Lahir" class="form-control" required></div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Jenis Kelamin</strong></label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="jeniskelamin" id="select" class="form-control">
                                                    <option value="Laki-laki">Laki-laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Agama</strong></label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="kodeagama" id="kodeagama" class="form-control">
                                                    @foreach ($ag as $ag)
                                                    <option value='{{$ag->kd_agama}}'>{{$ag->nama_agama}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Status</strong></label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="status" id="select" class="form-control">
                                                    <option value="Aktif">Aktif</option>
                                                    <option value="Pindah">Pindah</option>
                                                    <option value="Meninggal">Meninggal</option>
                                                </select>
                                            </div>
                                        </div>

                                        {{-- <div class="row form-group">
                                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Status</strong></label></div>
                                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="status" placeholder="Status" class="form-control" required></div>
                                                </div> --}}

                                    </div>
                                    <div class="tab-pane fade" id="data-personal" role="tabpanel" aria-labelledby="data-personal-tab">

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Golongan Darah</strong></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="golongandarah" placeholder="Golongan Darah" class="form-control"></div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Pendidikan</strong></label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="kodependidikan" id="select" class="form-control">
                                                    @foreach ($pd as $pd)
                                                    <option value='{{$pd->kd_pendidikan}}'>{{$pd->nama_jenjang}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Pekerjaan</strong></label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="kodepekerjaan" id="select" class="form-control">
                                                    @foreach ($pk as $pk)
                                                    <option value='{{$pk->kd_pekerjaan}}'>{{$pk->nama_pekerjaan}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Level Ekonomi</strong></label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="levelekonomi" id="select" class="form-control">
                                                    @foreach ($le as $le)
                                                    <option value='{{$le->kd_level_ekonomi}}'>{{$le->nama_level}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Status Kawin</strong></label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="statuskawin" id="select" class="form-control">
                                                    <option value="Belum Kawin">Belum Kawin</option>
                                                    <option value="Kawin">Kawin</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Anggota Karang Taruna</strong></label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="karangtaruna" id="select" class="form-control">
                                                    <option value="-">-</option>
                                                    <option value="Ya">Ya</option>
                                                    <option value="Tidak">Tidak</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="data-mukim" role="tabpanel" aria-labelledby="data-mukim-tab">
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Status Mukim</strong></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="statusmukim" placeholder="Keterangan Mukim" class="form-control" ></div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Keterangan Mukim</strong></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="keteranganmukim" placeholder="Keterangan Mukim" class="form-control" ></div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Kode RT</strong></label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="kodert" id="select" class="form-control">
                                                    @foreach ($rt as $rt)
                                                    <option value='{{$rt->kd_rt}}'>RT {{$rt->kd_rt}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="data-ibadah" role="tabpanel" aria-labelledby="data-ibadah-tab">
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Baca Latin</strong></label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="bacalatin" id="select" class="form-control">
                                                    <option value="-">-</option>
                                                    <option value="Ya">Ya</option>
                                                    <option value="Tidak">Tidak</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Baca Hijaiyah</strong></label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="bacahijaiyah" id="select" class="form-control">
                                                    <option value="-">-</option>
                                                    <option value="Ya">Ya</option>
                                                    <option value="Tidak">Tidak</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Baca Iqra</strong></label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="bacaiqra" id="select" class="form-control">
                                                    <option value="-">-</option>
                                                    <option value="Ya">Ya</option>
                                                    <option value="Tidak">Tidak</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Baca Al-Qur'an</strong></label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="bacaquran" id="select" class="form-control">
                                                    <option value="-">-</option>
                                                    <option value="Ya">Ya</option>
                                                    <option value="Tidak">Tidak</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Sholat 5 Waktu</strong></label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="sholat" id="select" class="form-control">
                                                    <option value="-">-</option>
                                                    <option value="Ya">Ya</option>
                                                    <option value="Tidak">Tidak</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Sholat Berjamaah</strong></label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="sholatjamaah" id="select" class="form-control">
                                                    <option value="-">-</option>
                                                    <option value="Ya">Ya</option>
                                                    <option value="Tidak">Tidak</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Zakat Fitrah</strong></label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="zakatfitrah" id="select" class="form-control">
                                                    <option value="-">-</option>
                                                    <option value="Ya">Ya</option>
                                                    <option value="Tidak">Tidak</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Zakat Mal</strong></label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="zakatmal" id="select" class="form-control">
                                                    <option value="-">-</option>
                                                    <option value="Ya">Ya</option>
                                                    <option value="Tidak">Tidak</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Kurban</strong></label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="kurban" id="select" class="form-control">
                                                    <option value="-">-</option>
                                                    <option value="Ya">Ya</option>
                                                    <option value="Tidak">Tidak</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Haji</strong></label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="haji" id="select" class="form-control">
                                                    <option value="-">-</option>
                                                    <option value="Ya">Ya</option>
                                                    <option value="Tidak">Tidak</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Umrah</strong></label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="umrah" id="select" class="form-control">
                                                    <option value="-">-</option>
                                                    <option value="Ya">Ya</option>
                                                    <option value="Tidak">Tidak</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <button class="btn btn-primary" type="submit" form="tambah"> Simpan</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>NIK</th>
                                    <th>Nama Lengkap</th>
                                    <th>Nama Panggilan</th>
                                    <th>Tempat, Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Nomor Kartu Keluarga</th>
                                    <th>Status Hubungan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data_induk as $di)
                                <tr>
                                    <td>{{$di->no_ktp}}</td>
                                    <td>{{$di->nama}}</td>
                                    <td>{{$di->nm_panggilan}}</td>
                                    <td>{{$di->tmp_lahir}}, {{$di->tgl_lahir}}</td>
                                    <td>{{$di->j_kelamin}}</td>
                                    <td>{{$di->no_kk}}</td>
                                    <td>{{$di->status_hub_kk}}</td>
                                    <td>
                                        <a href="/edit_data_induk/{{$di->kd_induk}}" class="fa fa-edit" style="font-size: 24.32446px; color:rgb(22, 206, 62);"></a>
                                        <a href="/delete_data_induk/{{$di->kd_induk}}" class="fa fa-trash" style="font-size: 24.32446px; color:rgb(247, 10, 10);"></a>
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