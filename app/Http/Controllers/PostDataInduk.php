<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\DataIndukModel;
use Illuminate\Http\Request;


class PostDataInduk extends Controller
{
    public function addPostDI()
    {
        return view('add-post-di');
    }

    public function savePostDI(Request $request)
    {
        DB::table('datainduk')->insert([
            'kd_induk'          => $request->kodeinduk,
            'no_kk'             => $request->nomorkk,
            'nama'              => $request->namalengkap,
            'nm_panggilan'      => $request->namapanggilan,
            'status_hub_kk'     => $request->hubungan,
            'tmp_lahir'         => $request->tempatlahir,
            'tgl_lahir'         => $request->date,
            'j_kelamin'         => $request->jeniskelamin,
            'kd_agama'          => $request->kodeagama,
            'kd_pendidikan'     => $request->kodependidikan,
            'kd_pekerjaan'      => $request->kodepekerjaan,
            'status_kawin'      => $request->statuskawin,
            'status_mukim'      => $request->statusmukim,
            'keterangan_mukim'  => $request->keteranganmukim,
            'kd_level_ekonomi'  => $request->levelekonomi,
            'gol_darah'         => $request->golongandarah,
            'is_kt'             => $request->is_kt,
            'is_latin'          => $request->bacalatin,
            'is_hijaiyah'       => $request->bacahijaiyah,
            'is_iqra'           => $request->bacaiqra,
            'is_quran'          => $request->bacaquran,
            'is_5waktu'         => $request->sholat,
            'is_jamaah'         => $request->sholatjamaah,
            'is_zakat_fitrah'   => $request->zakatfitrah,
            'is_zakat_mal'      => $request->zakatmal,
            'is_qurban'         => $request->kurban,
            'is_haji'           => $request->haji,
            'is_umrah'          => $request->umrah,
            'kd_rt'             => $request->kodert,
            'no_ktp'            => $request->nomorktp,
            'status'            => $request->status,
        ]);

        $kk = DB::table('data_kk')->where('no_kk', $request->nomorkk);
        if (!empty($kk->first())) {
            if (!empty($kk->first()->kd_rumah)) {
                DB::table('md_rumah')->increment('jml_penghuni');
            }
        }
        return redirect('/data_induk');
        // return back()->with('post_add', 'Data berhasil ditambahkan');
    }


    public function editPost($kd_induk)
    {
        $kk = DB::table('data_kk')->get();
        $ag = DB::table('md_agama')->get();
        $pd = DB::table('md_pendidikan')->get();
        $pk = DB::table('md_pekerjaan')->get();
        $le = DB::table('md_level_ekonomi')->get();
        $rt = DB::table('md_rt')->get();
        $edit = DB::table('datainduk')->where('kd_induk', $kd_induk)->first();
        return view('edit_data_induk', compact('edit', 'kk', 'ag', 'pd', 'pk', 'le', 'rt'));
    }


    public function updatePost(Request $request)
    {
        $datainduk = DB::table('datainduk')
            ->where('datainduk.kd_induk', $request->kodeinduk)
            ->leftJoin('data_kk', 'data_kk.no_kk', '=', 'datainduk.no_kk');
        $no_kk = $datainduk->first()->no_kk;
        $kd_rumah = $datainduk->first()->kd_rumah;

        $md_rumah = DB::table('md_rumah')->where('kd_rumah', $kd_rumah);

        if ($no_kk !== $request->nomorkk) {
            if (!is_null($md_rumah->first())) {
                $md_rumah->decrement('jml_penghuni');
            }
            $total_anggota = DB::table('data_kk')->where('no_kk', $no_kk)->count();
            if ($total_anggota === 1) {
                $md_rumah->decrement('jml_kk');
            }
            $new_kk = DB::table('data_kk')->where('no_kk', $request->nomorkk);
            if (!is_null($new_kk->first())) {
                if (!empty($new_kk->kd_rumah)) {
                    $new_md_rumah = DB::table('md_rumah')->where('kd_rumah', $new_kk->first()->kd_rumah);
                    // if (!is_null($new_md_rumah->first())) {
                    $new_md_rumah->increment('jml_penghuni');
                    // }
                }
            }
        }

        DB::table('datainduk')->where('kd_induk', $request->kodeinduk)->update([
            'kd_induk'          => $request->kodeinduk,
            'no_kk'             => $request->nomorkk,
            'nama'              => $request->namalengkap,
            'nm_panggilan'      => $request->namapanggilan,
            'status_hub_kk'     => $request->hubungan,
            'tmp_lahir'         => $request->tempatlahir,
            'tgl_lahir'         => $request->date,
            'j_kelamin'         => $request->jeniskelamin,
            'kd_agama'          => $request->kodeagama,
            'kd_pendidikan'     => $request->kodependidikan,
            'kd_pekerjaan'      => $request->kodepekerjaan,
            'status_kawin'      => $request->statuskawin,
            'status_mukim'      => $request->statusmukim,
            'keterangan_mukim'  => $request->keteranganmukim,
            'kd_level_ekonomi'  => $request->levelekonomi,
            'gol_darah'         => $request->golongandarah,
            'is_kt'             => $request->is_kt,
            'is_latin'          => $request->bacalatin,
            'is_hijaiyah'       => $request->bacahijaiyah,
            'is_iqra'           => $request->bacaiqra,
            'is_quran'          => $request->bacaquran,
            'is_5waktu'         => $request->sholat,
            'is_jamaah'         => $request->sholatjamaah,
            'is_zakat_fitrah'   => $request->zakatfitrah,
            'is_zakat_mal'      => $request->zakatmal,
            'is_qurban'         => $request->kurban,
            'is_haji'           => $request->haji,
            'is_umrah'          => $request->umrah,
            'kd_rt'             => $request->kodert,
            'no_ktp'            => $request->nomorktp,
            'status'            => $request->status,
        ]);
        return redirect('data_induk');
        // return back()->with('post_update', 'Berhasil Update');
    }


    public function deletePost($kd_induk)
    {
        //get no_kk
        $no_kk = DB::table('datainduk')->where('kd_induk', $kd_induk);
        //get kk
        if (!empty($no_kk->first())) {
            $no_kk = $no_kk->first()->no_kk;
            //get anggota
            $datainduk = DB::table('datainduk')->where('no_kk', $no_kk);

            if (!empty($datainduk->first())) {
                $data_kk = DB::table('data_kk')->where('no_kk', $no_kk);
                if (!empty($data_kk->first())) {
                    $md_rumah = DB::table('md_rumah')->where('kd_rumah', $data_kk->first()->kd_rumah);
                    if (!empty($md_rumah->first())) {
                        $md_rumah->decrement('jml_penghuni');
                        if ($datainduk->count() < 1) {
                            $md_rumah->decrement('jml_kk');
                        }
                    }
                }
            }
        }

        // dd('skip');
        //if anggota === 1 remove jml_kk
        DB::table('datainduk')->where('kd_induk', $kd_induk)->delete();
        return back()->with('post_delete');
    }
}
