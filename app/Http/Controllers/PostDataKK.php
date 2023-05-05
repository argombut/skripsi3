<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DataKKModel;
use Symfony\Component\VarDumper\Cloner\Data;

class PostDataKK extends Controller
{
    public function addPostDKK()
    {
        return view('add-post-dkk');
    }
    public function savePostDKK(Request $request)
    {
        DB::table('data_kk')->insert([

            'no_kk' => $request->nomorkk,
            'no_rt' => $request->nort,
            'no_rw' => $request->norw,
            'nm_kk' => $request->namakk,
            'kd_rumah' => $request->koderumah,
            'kd_level_ekonomi' => $request->levelekonomi,
            'keterangan' => $request->keterangan,

        ]);

        //update jml_kk  md_rumah
        if (!empty($request->koderumah)) {
            $md_rumah =  DB::table('md_rumah')->where('kd_rumah', $request->koderumah);
            $new_jml_kk = $md_rumah->first()->jml_kk + 1;
            $md_rumah->update([
                'jml_kk' => $new_jml_kk
            ]);
        }
        return redirect('/transaksi');
        // return back()->with('post_add_dkk', 'Data berhasil ditambahkan');
    }

    public function tambahAnggota(Request $no_kk)
    {
        // dd($no_kk);
        return view('tambah-anggota');
    }



    public function transaksi_datainduk($no_kk)
    {
        // $data_induk = DB::table('datainduk')->get();

        $kk = DB::table('data_kk')->get();
        $ag = DB::table('md_agama')->get();
        $pd = DB::table('md_pendidikan')->get();
        $pk = DB::table('md_pekerjaan')->get();
        $le = DB::table('md_level_ekonomi')->get();
        $rt = DB::table('md_rt')->get();
        $data_induk = DB::table('datainduk')->where('no_kk', $no_kk)->get();
        return view('transaksi_datainduk', compact('data_induk', 'kk', 'ag', 'pd', 'pk', 'le', 'rt'));
    }


    public function saveTambahAnggota(Request $request)
    {
        // dd($request->post());
        DB::table('datainduk')->insert([

            // 'kd_induk'          => $request->kodeinduk,
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
            'is_kt'             => $request->karangtaruna,
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
        if (!empty($kk->first()->kd_rumah)) {
            DB::table('md_rumah')->increment('jml_penghuni');
            if (DB::table('datainduk')->where('no_kk', $request->nomorkk)->count() < 1) {
                DB::table('md_rumah')->increment('jml_kk');
            }
        }
        return back()->with('post_add_dkk', 'Data berhasil ditambahkan');
    }





    public function editPost($no_kk)
    {

        $rw = DB::table('md_rw')->get();
        $rt = DB::table('md_rt')->get();
        $le = DB::table('md_level_ekonomi')->get();
        $edit = DB::table('data_kk')->where('no_kk', $no_kk)->first();
        return view('edit_dkk', compact('edit', 'rw', 'rt', 'le'));
    }


    public function updatePost(Request $request)
    {
        // dd($request->all());

        // dd(DB::table('datainduk')->where('datainduk.no_kk', $request->nomorkk)
        //     ->leftJoin('data_kk', 'data_kk.no_kk', '=', 'datainduk.no_kk')->count());

        // dd($request->id !== $request->nomorkk);
        //no_kk CHANGE
        // if ($request->id !== $request->nomorkk) {
        echo 'A';
        $no_kk = $request->nomorkk;
        $datainduk = DB::table('datainduk')->where('datainduk.no_kk', $request->nomorkk)
            ->leftJoin('data_kk', 'data_kk.no_kk', '=', 'datainduk.no_kk');
        //datainduk NOT NULL
        if (!empty($datainduk->first())) {
            echo 'B';
            $data_kk = DB::table('data_kk')->where('no_kk', $no_kk);
            //get data_kk
            if (!empty($data_kk->first())) {
                echo 'C';
                $md_rumah = DB::table('md_rumah')->where('kd_rumah', $data_kk->first()->kd_rumah);
                //md_rumah NOT NULL
                if (!empty($md_rumah->first())) {
                    echo 'D';
                    // $md_rumah->decrement('jml_penghuni');
                    $datainduk = $datainduk->whereNotIn('data_kk.kd_rumah', ['000', 'NULL']);
                    if ($datainduk->count() > 0) {
                        // $md_rumah->decrement('jml_kk');
                        echo 'E';
                    }
                }
            }
        }
        // } else {

        // die();
        $old_kd_home = DB::table('data_kk')->where('no_kk', $request->id);
        if (!empty($old_kd_home->first())) {
            echo 'F';
            $old_kd_home = $old_kd_home->first()->kd_rumah;
            if ($old_kd_home !== $request->koderumah) {
                echo 'G';
                $datainduk2 = DB::table('datainduk')->where('datainduk.no_kk', $request->nomorkk)
                    ->leftJoin('data_kk', 'data_kk.no_kk', '=', 'datainduk.no_kk')
                    ->whereNotIn('data_kk.kd_rumah', ['000', 'NULL']);
                if ($datainduk2->count() === 0) {
                    echo 'H';
                    // DB::table('md_rumah')->where('kd_rumah', $request->koderumah)->increment('jml_kk');
                }
                // DB::table('md_rumah')->where('kd_rumah', $request->koderumah)->increment('jml_penghuni');
            }
        }
        // }
        // dd($old_kd_home, $request->koderumah, DB::table('data_kk')->where('no_kk', $request->id)->first());
        // dd(DB::table('md_rumah')->where('kd_rumah', '001')->decrement('jml_kk'));
        // die();



        // $kk = DB::table('data_kk')->where('no_kk', $request->id);
        // $kd_rumah = $kk->first()->kd_rumah;

        // if (empty($request->koderumah)) {
        //     $kk_is_null = $kk->first();
        //     if ($kk_is_null) {
        //         $old_home = DB::table('md_rumah')->where('kd_rumah', $kd_rumah);
        //         $old_home_result = $old_home->first();
        //         if (!is_null($old_home_result)) {
        //             $old_home->decrement('jml_kk');
        //         }
        //     }
        // } else {
        //     if ($kd_rumah !== $request->koderumah) {

        //         $old_home = DB::table('md_rumah')->where('kd_rumah', $kd_rumah);
        //         $old_home_result = $old_home->first();
        //         if (!is_null($old_home_result)) {
        //             $old_home->decrement('jml_kk');
        //         }
        //         $new_home = DB::table('md_rumah')->where('kd_rumah', $request->koderumah);
        //         $new_home->increment('jml_kk', 1);
        //     }
        // }
        DB::table('data_kk')->where('no_kk', $request->id)->update([
            'no_kk' => $request->nomorkk,
            'no_rt' => $request->nort,
            'no_rw' => $request->norw,
            'nm_kk' => $request->namakk,
            'kd_rumah' => $request->koderumah,
            'kd_level_ekonomi' => $request->levelekonomi,
            'keterangan' => $request->keterangan,
        ]);
        // $post = DB::table('data_kk')->where('no_kk', $request->nomorkk)->first();
        return redirect('transaksi');
    }

    public function deletePost($no_kk)
    {
        $kk = DB::table('data_kk')->where('no_kk', $no_kk);
        if (!is_null($kk->first())) {
            $kd_rumah = $kk->first()->kd_rumah;
            $md_rumah = DB::table('md_rumah')->where('kd_rumah', $kd_rumah);
            $md_rumah->decrement('jml_kk');
        }

        DB::table('data_kk')->where('no_kk', $no_kk)->delete();
        return back()->with('post_delete', 'Post Berhasil Dihapus');
    }


    public function tampilTransaksi($no_kk)
    {
        $tampil = DB::table('datainduk')
            ->select('nama', 'no_kk', 'status_hub_kk', 'j_kelamin', 'tmp_lahir', 'tgl_lahir', 'kd_agama', 'kd_pendidikan', 'kd_pekerjaan')
            ->where('no_kk', $no_kk)
            ->get();

        return json_encode($tampil);
    }
}
