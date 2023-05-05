@extends('layout/paan',[
'InfoPage' => [
'Navbar' => '/edit_data_induk'
]])
@section('title', 'Form Edit Anggota')

@section('container')
<div class="content">
    <div class="animated fadeIn">
        @if(Session::has('post_update'))
        <span>{{Session::get('post_update')}}</span>
        @endif
        <form method="post" action="{{route('updatedi.post')}}">
            @csrf
            <input type="hidden" name="id" value="{{$edit->kd_induk}}">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body card-block">
                            <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <h2><strong>Edit Data Warga</strong></h2>
                                <hr> <br>
                                <div class="row form-group" hidden>
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Kode Induk</strong></label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="kd_induk" name="kodeinduk" placeholder="Kode Induk" class="form-control" required value="{{$edit->kd_induk}}" readonly></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>NIK</strong></label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="nomorktp" name="nomorktp" placeholder="Nomor KTP" class="form-control" required value="{{$edit->no_ktp}}"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Nama Kepala Keluarga</strong></label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="nomorkk" id="select" class="form-control select">
                                            @foreach($kk as $kk)
                                            <option value="{{$kk->no_kk}}"{{ $kk->no_kk    == $edit->no_kk ? 'selected' : ''}}>{{$kk->nm_kk}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Nama Lengkap</strong></label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="nmlkp" name="namalengkap" placeholder="Nama Lengkap" class="form-control" required value="{{$edit->nama}}"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Panggilan</strong></label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="nmpgl" name="namapanggilan" placeholder="Nama Panggilan" class="form-control" required value="{{$edit->nm_panggilan}}"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Status Hubungan</strong></label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="hubungan" id="hubungan" class="form-control" value="">
                                            <option value="Kepala Keluarga"{{ 'Kepala Keluarga'    == $edit->status_hub_kk ? 'selected' : ''}}>Kepala Keluarga</option>
                                            <option value="Istri"{{ 'Istri'    == $edit->status_hub_kk ? 'selected' : ''}}>Istri</option>
                                            <option value="Anak"{{ 'Anak'    == $edit->status_hub_kk ? 'selected' : ''}}>Anak</option>
                                            <option value="Orang Tua"{{ 'Orang Tua'    == $edit->status_hub_kk ? 'selected' : ''}}>Orang Tua</option>
                                            <option value="Menantu"{{ 'Menantu'    == $edit->status_hub_kk ? 'selected' : ''}}>Menantu</option>
                                            <option value="Cucu"{{ 'Cucu'    == $edit->status_hub_kk ? 'selected' : ''}}>Cucu</option>
                                            <option value="Lain-lain"{{ 'Lain-lain'    == $edit->status_hub_kk ? 'selected' : ''}}>Lain-lain</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Tempat Lahir</strong></label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="tempatlahir" name="tempatlahir" placeholder="Tempat Lahir" class="form-control" required value="{{$edit->tmp_lahir}}"></div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Tanggal Lahir</strong></label></div>
                                    <div class="col-12 col-md-9"><input type="date" id="date" name="date" placeholder="Tanggal Lahir" class="form-control" required value="{{$edit->tgl_lahir}}"></div>
                                </div>



                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Jenis Kelamin</strong></label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="jeniskelamin" id="jeniskelamin" class="form-control">
                                            <option value="Laki-laki"{{ 'Laki-laki'    == $edit->j_kelamin ? 'selected' : ''}}>Laki-laki</option>
                                            <option value="Perempuan"{{ 'Perempuan'    == $edit->j_kelamin ? 'selected' : ''}}>Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Agama</strong></label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="kodeagama" id="kodeagama" class="form-control">
                                            @foreach($ag as $ag)
                                            <option value="{{$ag->kd_agama}}"{{ $ag->kd_agama    == $edit->kd_agama ? 'selected' : ''}}>{{$ag->nama_agama}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Pendidikan</strong></label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="kodependidikan" id="select" class="form-control">
                                            @foreach($pd as $pd)
                                            <option value="{{$pd->kd_pendidikan}}"{{ $pd->kd_pendidikan    == $edit->kd_pendidikan ? 'selected' : ''}}>{{$pd->nama_jenjang}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Pekerjaan</strong></label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="kodepekerjaan" id="select" class="form-control">
                                            @foreach($pk as $pk)
                                            <option value="{{$pk->kd_pekerjaan}}"{{ $pk->kd_pekerjaan    == $edit->kd_pekerjaan ? 'selected' : ''}}>{{$pk->nama_pekerjaan}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Status Kawin</strong></label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="statuskawin" id="statuskawin" class="form-control">
                                            <option value="Belum Kawin"{{ 'Belum Kawin'    == $edit->status_kawin ? 'selected' : ''}}>Belum Kawin</option>
                                            <option value="Kawin"{{ 'Kawin'    == $edit->status_kawin ? 'selected' : ''}}>Kawin</option>
                                            <option value="Cerai"{{ 'Cerai'    == $edit->status_kawin ? 'selected' : ''}}>Cerai</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Status Mukim</strong></label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="statusmukim" name="statusmukim" placeholder="Keterangan Mukim" class="form-control" required value="{{$edit->status_mukim}}"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Keterangan Mukim</strong></label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="keteranganmukim" name="keteranganmukim" placeholder="Keterangan Mukim" class="form-control" required value="{{$edit->keterangan_mukim}}"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Level Ekonomi</strong></label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="levelekonomi" id="select" class="form-control">
                                            @foreach($le as $le)
                                            <option value="{{$le->kd_level_ekonomi}}"{{ $le->kd_level_ekonomi    == $edit->kd_level_ekonomi ? 'selected' : ''}}>{{$le->nama_level}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Golongan Darah</strong></label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="golongandarah" name="golongandarah" placeholder="Golongan Darah" class="form-control" required value="{{$edit->gol_darah}}"></div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Anggota Karang Taruna</strong></label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="is_kt" id="is_kt" class="form-control">
                                            <option value="-"{{ ''    == $edit->is_kt ? 'selected' : ''}}>-</option>
                                            <option value="Ya"{{ 'Ya'    == $edit->is_latin ? 'selected' : ''}}>Ya</option>
                                            <option value="Tidak"{{ 'Tidak'    == $edit->is_latin ? 'selected' : ''}}>Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Baca Latin</strong></label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="bacalatin" id="bacalatin" class="form-control">
                                            <option value="-"{{ '-'    == $edit->is_latin ? 'selected' : ''}}>-</option>
                                            <option value="Ya"{{ 'Ya'    == $edit->is_latin ? 'selected' : ''}}>Ya</option>
                                            <option value="Tidak"{{ 'Tidak'    == $edit->is_latin ? 'selected' : ''}}>Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Baca Hijaiyah</strong></label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="bacahijaiyah" id="bacahijaiyah" class="form-control">
                                            <option value="-"{{ '-'    == $edit->is_latin ? 'selected' : ''}}>-</option>
                                            <option value="Ya"{{ 'Ya'    == $edit->is_hijaiyah ? 'selected' : ''}}>Ya</option>
                                            <option value="Tidak"{{ 'Tidak'    == $edit->is_hijaiyah ? 'selected' : ''}}>Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Baca Iqra</strong></label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="bacaiqra" id="bacaiqra" class="form-control">
                                            <option value="-"{{ '-'    == $edit->is_latin ? 'selected' : ''}}>-</option>
                                            <option value="Ya"{{ 'Ya'    == $edit->is_iqra ? 'selected' : ''}}>Ya</option>
                                            <option value="Tidak"{{ 'Tidak'    == $edit->is_iqra ? 'selected' : ''}}>Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Baca Al-Qur'an</strong></label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="bacaquran" id="bacaquran" class="form-control">
                                            <option value="-"{{ '-'    == $edit->is_latin ? 'selected' : ''}}>-</option>
                                            <option value="Ya"{{ 'Ya'    == $edit->is_quran ? 'selected' : ''}}>Ya</option>
                                            <option value="Tidak"{{ 'Tidak'    == $edit->is_quran? 'selected' : ''}}>Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Sholat 5 Waktu</strong></label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="sholat" id="sholat" class="form-control">
                                            <option value="-"{{ '-'    == $edit->is_latin ? 'selected' : ''}}>-</option>
                                            <<option value="Ya"{{ 'Ya'    == $edit->is_5waktu ? 'selected' : ''}}>Ya</option>
                                            <option value="Tidak"{{ 'Tidak'    == $edit->is_5waktu ? 'selected' : ''}}>Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Sholat Berjamaah</strong></label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="sholatjamaah" id="sholatjamaah" class="form-control">
                                            <option value="-"{{ '-'    == $edit->is_latin ? 'selected' : ''}}>-</option>
                                            <option value="Ya"{{ 'Ya'    == $edit->is_jamaah ? 'selected' : ''}}>Ya</option>
                                            <option value="Tidak"{{ 'Tidak'    == $edit->is_jamaah ? 'selected' : ''}}>Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Zakat Fitrah</strong></label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="zakatfitrah" id="zakatfitrah" class="form-control">
                                            <option value="-"{{ '-'    == $edit->is_latin ? 'selected' : ''}}>-</option>
                                            <option value="Ya"{{ 'Ya'    == $edit->is_zakat_fitrah ? 'selected' : ''}}>Ya</option>
                                            <option value="Tidak"{{ 'Tidak'    == $edit->is_zakat_fitrah ? 'selected' : ''}}>Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Zakat Mal</strong></label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="zakatmal" id="zakatmal" class="form-control">
                                            <option value="-"{{ '-'    == $edit->is_latin ? 'selected' : ''}}>-</option>
                                            <<option value="Ya"{{ 'Ya'    == $edit->is_zakat_mal ? 'selected' : ''}}>Ya</option>
                                            <option value="Tidak"{{ 'Tidak'    == $edit->is_zakat_mal ? 'selected' : ''}}>Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Kurban</strong></label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="kurban" id="kurban" class="form-control">
                                            <option value="-"{{ '-'    == $edit->is_latin ? 'selected' : ''}}>-</option>
                                            <option value="Ya"{{ 'Ya'    == $edit->is_qurban ? 'selected' : ''}}>Ya</option>
                                            <option value="Tidak"{{ 'Tidak'    == $edit->is_qurban ? 'selected' : ''}}>Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Haji</strong></label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="haji" id="haji" class="form-control">
                                            <option value="-"{{ '-'    == $edit->is_latin ? 'selected' : ''}}>-</option>
                                            <option value="Ya"{{ 'Ya'    == $edit->is_haji ? 'selected' : ''}}>Ya</option>
                                            <option value="Tidak"{{ 'Tidak'    == $edit->is_haji ? 'selected' : ''}}>Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Umrah</strong></label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="umrah" id="umrah" class="form-control">
                                            <option value="-"{{ '-'    == $edit->is_latin ? 'selected' : ''}}>-</option>
                                            <option value="Ya"{{ 'Ya'    == $edit->is_umrah ? 'selected' : ''}}>Ya</option>
                                            <option value="Tidak"{{ 'Tidak'    == $edit->is_umrah ? 'selected' : ''}}>Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Nomor RT</strong></label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="kodert" id="select" class="form-control">
                                            @foreach($rt as $rt)
                                            <option value="{{$rt->kd_rt}}"{{ $rt->kd_rt    == $edit->kd_rt ? 'selected' : ''}}>{{$rt->no_rt}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Status</strong></label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="status" name="status" placeholder="Status" class="form-control" required value="{{$edit->status}}"></div>
                                </div>


                                <input type="submit" value="Submit">
                            </form>
                        </div>
                    </div>

                </div>




            </div>

        </form>
    </div><!-- .animated -->
</div><!-- .content -->
@endsection