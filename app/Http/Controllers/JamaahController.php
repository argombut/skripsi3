<?php

namespace App\Http\Controllers;

use App\Models\Data_kk;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
// use App\Models\KeahlianJamaah;

class JamaahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function datainduk()
    {
        $data_induk = DB::table('datainduk')->get();
        return view('data_induk', compact('data_induk'));
    }


    public function data_induk()
    {
        $datainduk = DB::table('datainduk')
            ->join('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
            ->select(
                'datainduk.kode_kk',
                'datainduk.kd_induk',
                'md_rt.no_rw',
                'md_rt.no_rt',
                'datainduk.nama',
                'datainduk.nm_panggilan',
                'datainduk.tmp_lahir',
                'datainduk.tgl_lahir',
                'datainduk.j_kelamin',
                'datainduk.status_hub_kk',
                'datainduk.status_mukim',
                'datainduk.status'
            )
            ->get();
        // dd($datainduk);
        return view('datainduk', compact('datainduk'));
    }

    public function datakk()
    {
        // $data_kk = Data_kk::Join('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'data_kk.kd_level_ekonomi')
        //     ->select('data_kk.no_kk', 'data_kk.nm_kk', 'data_kk.no_rw', 'data_kk.no_rt', 'data_kk.kd_rumah', 'md_level_ekonomi.nama_level', 'data_kk.keterangan')
        //     ->get();

        $kk = Data_kk::Join('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'data_kk.kd_level_ekonomi')
            ->leftJoin('datainduk', 'datainduk.kode_kk', '=', 'data_kk.kode_kk')
            ->where('datainduk.status_hub_kk', '=', 'Kepala Keluarga')
            ->select(
                'data_kk.no_kk',
                'data_kk.kode_kk', 
                'data_kk.nm_kk', 
                'data_kk.no_rw', 
                'data_kk.no_rt', 
                'data_kk.kd_rumah',
                'data_kk.kd_level_ekonomi', 
                'md_level_ekonomi.nama_level', 
                'data_kk.keterangan'
            )
            ->paginate(1000);
        return view('data_kk', ['kk' => $kk]);
    }


    public function mdrumah()
    {
        $md_rumah = DB::table('md_rumah')->get();
        return view('/md/md_rumah/md_rumah', ['md_rumah' => $md_rumah]);
    }

    public function mdrw()
    {
        $md_rw = DB::table('md_rw')->get();
        return view('/md/md_rw/md_rw', ['md_rw' => $md_rw]);
    }

    public function mdrt()
    {
        $md_rt = DB::table('md_rt')->get();
        return view('/md/md_rt/md_rt', ['md_rt' => $md_rt]);
    }

    public function mduser()
    {
        $users = DB::table('users')->get();
        return view('/md/md_user/md_user', ['users' => $users]);

        // $datauser = DB::table('users')->get();

        // return view('/md_user/user', ['datauser' => $datauser]);
    }

    public function mdagama()
    {
        $md_agama = DB::table('md_agama')->get();
        return view('/md/md_agama/md_agama', ['md_agama' => $md_agama]);
    }

    public function mdpekerjaan()
    {
        $md_pekerjaan = DB::table('md_pekerjaan')->get();
        return view('/md/md_pekerjaan/md_pekerjaan', ['md_pekerjaan' => $md_pekerjaan]);
    }

    public function mdpendidikan()
    {
        $md_pendidikan = DB::table('md_pendidikan')->get();
        return view('/md/md_pendidikan/md_pendidikan', ['md_pendidikan' => $md_pendidikan]);
    }

    public function mdkeahlian()
    {
        $md_keahlian = DB::table('md_keahlian')->get();
        return view('/md/md_keahlian/md_keahlian', ['md_keahlian' => $md_keahlian]);
    }


    public function join()
    {
        $join = DB::table('md_rt')
            ->join('md_rumah', 'md_rt.kd_rt', '=', 'md_rumah.kd_rumah')
            ->select('md_rt.no_rw', 'md_rt.no_rt', 'md_rumah.no_rumah', 'md_rumah.nama_kk', 'md_rumah.jml_penghuni')
            ->get();

        return view('table', ['join' => $join]);
    }

    public function joindkdi()
    {
        $join = Data_kk::leftJoin('datainduk', 'datainduk.no_kk', '=', 'data_kk.no_kk')
            ->select('data_kk.no_kk', 'data_kk.no_rt', 'data_kk.no_rw', 'data_kk.nm_kk', 'data_kk.keterangan')
            ->distinct()
            ->get();
        return view('transaksi', ['dkdi' => $join]);
    }

    public function joinkj() ///KEAHLIAN JAMAAH///
    {
        $keahlian =  DB::table('data_keahlian_warga')
            ->leftJoin('datainduk', 'datainduk.kd_induk', '=', 'data_keahlian_warga.kd_induk')
            ->leftJoin('md_keahlian', 'md_keahlian.kd_keahlian', '=', 'data_keahlian_warga.kd_keahlian')
            ->select(
                'data_keahlian_warga.id',
                'data_keahlian_warga.kd_keahlian',
                'datainduk.kd_induk',
                'datainduk.kode_kk',
                'datainduk.no_kk',
                'datainduk.no_ktp',
                'datainduk.kd_rt',
                'datainduk.kd_agama',
                'datainduk.nama',
                'datainduk.nm_panggilan',
                'md_keahlian.nama_keahlian',
                'data_keahlian_warga.is_sertifikat',
                'data_keahlian_warga.level_sertifikat',
                'data_keahlian_warga.deskripsi_sertifikat'
            )
            
            ->paginate(1000);

        return view('data_keahlian', ['keahlian' => $keahlian]);
    }

    public function joingd() ///GOLONGAN DARAH///
    {
        // $join = DB::table('datainduk')
        //     ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        //     ->leftJoin('md_rumah', 'md_rumah.kd_rt', '=', 'datainduk.kd_rt')
        //     ->select('md_rt.no_rw', 'md_rt.no_rt', 'md_rumah.no_rumah', 'datainduk.nama', 'datainduk.nm_panggilan', 'datainduk.gol_darah')
        //     ->get();

        $table = DB::table('datainduk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
            ->leftJoin('data_kk', 'data_kk.kode_kk', '=', 'datainduk.kode_kk')
            ->select(
                'md_rt.no_rw', 
                'md_rt.no_rt',
                'data_kk.kd_rumah', 
                'datainduk.kd_rt',
                'datainduk.kode_kk', 
                'datainduk.nama', 
                'datainduk.nm_panggilan', 
                'datainduk.gol_darah'
            )
            ->paginate(1000);
        return view('golongan_darah', ['table' => $table]);
    }

    public function joinpk() ///PEKERJAAN///
    {
        // $join = DB::table('datainduk')
        //     ->leftJoin('md_pekerjaan', 'md_pekerjaan.kd_pekerjaan', '=', 'datainduk.kd_pekerjaan')
        //     ->leftJoin('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'datainduk.kd_level_ekonomi')
        //     ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        //     ->get();

        $join = DB::table('datainduk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
            ->leftJoin('md_pekerjaan', 'md_pekerjaan.kd_pekerjaan', '=', 'datainduk.kd_pekerjaan')
            ->leftJoin('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'datainduk.kd_level_ekonomi')
            ->paginate(1000);
        return view('pekerjaan', ['pekerjaan' => $join]);
    }

    public function keahlian()
    {
        $keahlian =  DB::table('data_keahlian_warga')
            ->leftJoin('datainduk', 'datainduk.kd_induk', '=', 'data_keahlian_warga.kd_induk')
            ->leftJoin('md_keahlian', 'md_keahlian.kd_keahlian', '=', 'data_keahlian_warga.kd_keahlian')
            // ->leftJoin('md_rt', 'datainduk.kd_rt', '=', 'md_rt.kd_rt')
            ->select(

                'data_keahlian_warga.id',
                'data_keahlian_warga.kd_keahlian',
                'datainduk.kd_induk',
                'datainduk.no_kk',
                'datainduk.no_ktp',
                'datainduk.kd_rt',
                // 'md_rt.no_rw',
                'datainduk.nama',
                'datainduk.nm_panggilan',
                'md_keahlian.nama_keahlian',
                'data_keahlian_warga.is_sertifikat',
                'data_keahlian_warga.level_sertifikat',
                'data_keahlian_warga.deskripsi_sertifikat'
            )
            ->get();
        return view('/keahlian', ['keahlian' => $keahlian]);
    }

    public function ibadah()
    {
        // $ibadah = DB::table('datainduk')
        //     ->leftjoin('md_agama', 'md_agama.kd_agama', '=', 'datainduk.kd_agama')
        //     ->leftjoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        //     ->where('datainduk.kd_agama', '=', '1')
        //     ->get();

        $join = DB::table('datainduk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
            ->leftJoin('md_agama', 'md_agama.kd_agama', '=', 'datainduk.kd_agama')
            ->paginate(1000);
        return view('ibadah', ['join' => $join]);
    }

    public function joinpd() ///PENDIDIKAN///
    {
        $join = DB::table('datainduk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
            ->leftJoin('md_pendidikan', 'md_pendidikan.kd_pendidikan', '=', 'datainduk.kd_pendidikan')
            ->paginate(1000);
        return view('pendidikan', ['pd' => $join]);
    }
    public function baca() ///PENDIDIKAN///
    {
        $join = DB::table('datainduk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
            ->where('datainduk.kd_agama', 1)  
            ->paginate(1000);
        // $join = '';
        return view('baca', ['pd' => $join]);
    }

    public function transaksi_datakk()
    {
        $data_kk = DB::table('data_kk')->get();
        return view('transaksi', ['data_kk' => $data_kk]);
    }



    public function cariTransaksi(Request $request)
    {
        if (empty($request->post())) {
            $data = DB::table('datainduk')
                ->leftJoin('data_kk', 'data_kk.no_kk', '=', 'datainduk.no_kk')
                ->get();
        } else {
            $data = DB::table('datainduk')
                ->leftJoin('data_kk', 'data_kk.no_kk', '=', 'datainduk.no_kk')
                ->where('data_kk.no_kk', $request->nomorkk)
                ->orwhere('data_kk.no_rt', $request->nomorrt)
                ->orwhere('data_kk.no_rw', $request->nomorrw)
                ->get();
        }
        return view('transaksi', compact('data'));
    }

    public function editTransaksi(Request $request)
    {
        if (empty($request->kd_induk)) {
            $data = DB::table('datainduk')
                ->leftJoin('data_kk', 'data_kk.no_kk', '=', 'datainduk.no_kk')
                ->get();
            $data_induk = [];
        } else {
            $data = DB::table('datainduk')
                ->leftJoin('data_kk', 'data_kk.no_kk', '=', 'datainduk.no_kk')
                ->get();
            $data_induk = DB::table('datainduk')
                ->leftJoin('data_kk', 'data_kk.no_kk', '=', 'datainduk.no_kk')
                ->where('kd_induk', $request->kd_induk)
                ->get();
        }

        return view('transaksi', compact('data', 'data_induk'));
    }


    public function simpanEditTransaksi()
    {
        //untuk nyimpen
    }


    public function updateIndukTransaksi(Request $request)
    {
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

        $data = DB::table('datainduk')
            ->leftJoin('data_kk', 'data_kk.no_kk', '=', 'datainduk.no_kk')
            ->get();


        return view('transaksi', compact('data'));
    }



    public function birthCounter($dt)
    {
        $dt_born = Carbon::parse($dt);
        $dt_now = Carbon::now();
        $dt_age = $dt_born->diffInYears($dt_now);
        return $dt_age;
    }

    public function ageCategory($age)
    {
        if ($age <= 16) :
            return 'Anak-anak';
        elseif ($age <= 30) :
            return 'Remaja';
        elseif ($age <= 55) :
            return 'Dewasa';
        else :
            return 'Manula';
        endif;
    }



    //=========================================RED RW=======================================//
    
    public function home()
    {
        $manula_laki = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->where('datainduk.tgl_lahir', '<=', Carbon::now()->subYear(55)->toDateString())
        ->where('datainduk.j_kelamin', 'like', 'Laki-laki')
        ->count();
        $dewasa_laki = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->where('datainduk.tgl_lahir', '>=', Carbon::now()->subYear(55)->toDateString())
        ->where('datainduk.tgl_lahir', '<=', Carbon::now()->subYear(30)->toDateString())
        ->where('datainduk.j_kelamin', 'like', 'Laki-laki')
        ->count();
        $remaja_laki = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->where('datainduk.tgl_lahir', '>=', Carbon::now()->subYear(30)->toDateString())
        ->where('datainduk.tgl_lahir', '<=', Carbon::now()->subYear(16)->toDateString())
        ->where('datainduk.j_kelamin', 'like', 'Laki-laki')
        ->count();
        $anak_laki = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->where('datainduk.tgl_lahir', '>=', Carbon::now()->subYear(16)->toDateString())
        ->where('datainduk.j_kelamin', 'like', 'Laki-laki')
        ->count();

        $manula_pr = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->where('datainduk.tgl_lahir', '<=', Carbon::now()->subYear(55)->toDateString())
        ->where('datainduk.j_kelamin', 'like', 'Perempuan')
        ->count();
        $dewasa_pr = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->where('datainduk.tgl_lahir', '>=', Carbon::now()->subYear(55)->toDateString())
        ->where('datainduk.tgl_lahir', '<=', Carbon::now()->subYear(30)->toDateString())
        ->where('datainduk.j_kelamin', 'like', 'Perempuan')
        ->count();
        $remaja_pr = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->where('datainduk.tgl_lahir', '>=', Carbon::now()->subYear(30)->toDateString())
        ->where('datainduk.tgl_lahir', '<=', Carbon::now()->subYear(16)->toDateString())
        ->where('datainduk.j_kelamin', 'like', 'Perempuan')
        ->count();
        $anak_pr = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->where('datainduk.tgl_lahir', '>=', Carbon::now()->subYear(16)->toDateString())
        ->where('datainduk.j_kelamin', 'like', 'Perempuan')
        ->count();

                
            $laki = [$manula_laki, $dewasa_laki, $remaja_laki, $anak_laki];
            $pr = [$manula_pr, $dewasa_pr, $remaja_pr, $anak_pr];
        

        $laki = json_encode($laki);
        $pr = json_encode($pr);


        //counter total warga-----------------------------------------------------------
        $warga = DB::table('datainduk')
        ->count();

        //counter rumah---------------------------------------------
        $rumah = DB::table('md_rumah')
            ->count();


        //counter kk------------------------------------------------
        $data_kk = DB::table('data_kk')
            ->count();


        //counter status mukim--------------------------------------------
        $labelmukim = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->groupBy('datainduk.status_mukim')
        ->pluck('datainduk.status_mukim');
        $labelmukim = json_encode($labelmukim);

        $valuesmukim = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->select(
            DB::raw('count(datainduk.status_mukim) as jumlah'),
        )
        ->groupBy('datainduk.status_mukim')
        ->pluck('jumlah');
        $valuesmukim = json_encode($valuesmukim);
        

        //counter goldar----------------------------------------------
        $gol_darah = DB::table('datainduk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
            ->leftJoin('data_kk', 'data_kk.no_kk', '=', 'datainduk.no_kk')
            ->select(
                'md_rt.no_rw', 
                'md_rt.no_rt',
                'datainduk.gol_darah'
            )
            ->groupBy('datainduk.gol_darah')
            ->get();

        $g = array();
        foreach ($gol_darah as $data) {
            if ($data->gol_darah == 1) {
                $label =  'A';
            } elseif ($data->gol_darah == 2) {
                $label =  'B';
            } elseif ($data->gol_darah == 3) {
                $label =  'O';
            } else {
                $label =  'AB';
            }
            $g[] = $label;
        }

        $labelgoldar = json_encode($g);

        $valuesgoldar = DB::table('datainduk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
            ->leftJoin('data_kk', 'data_kk.no_kk', '=', 'datainduk.no_kk')
            ->select(
                DB::raw('count(datainduk.gol_darah) as jumlah'),
                'md_rt.no_rw',
                'md_rt.no_rt',
                'datainduk.gol_darah'
            )
            ->groupBy('datainduk.gol_darah')
            ->pluck('jumlah');
        $valuesgoldar = json_encode($valuesgoldar);


        //counter agama---------------------------------------------------------
        $labelagama = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->leftJoin('md_agama', 'md_agama.kd_agama', '=', 'datainduk.kd_agama')
        ->select(
            DB::raw('count(datainduk.kd_agama) as jumlah'),
            'md_agama.nama_agama'
        )
        ->groupBy('datainduk.kd_agama')
        ->orderBy('jumlah', 'desc')
        ->pluck('md_agama.nama_agama');
        $labelagama = json_encode($labelagama);

        $valuesagama = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->leftJoin('md_agama', 'md_agama.kd_agama', '=', 'datainduk.kd_agama')
        ->select(
            DB::raw('count(datainduk.kd_agama) as jumlah'),
        )
        ->groupBy('datainduk.kd_agama')
        ->orderBy('jumlah', 'desc')
        ->pluck('jumlah');
        $valuesagama = json_encode($valuesagama);



        //counter level ekonomi---------------------------------------------------------------------------
        $labelekonomi = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->leftJoin('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'datainduk.kd_level_ekonomi')
        ->groupBy('md_level_ekonomi.kd_level_ekonomi')
        ->pluck('md_level_ekonomi.nama_level');
        $labelekonomi = json_encode($labelekonomi);

        $valuesekonomi = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->leftJoin('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'datainduk.kd_level_ekonomi')
        ->select(
            DB::raw('count(datainduk.kd_level_ekonomi) as jumlah'),
        )
        ->groupBy('md_level_ekonomi.kd_level_ekonomi')
        ->pluck('jumlah');
        $valuesekonomi = json_encode($valuesekonomi);


        //counter pendidikan-----------------------------------------------------------------------------
        $labelpdd = DB::table('datainduk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
            ->leftJoin('md_pendidikan', 'md_pendidikan.kd_pendidikan', '=', 'datainduk.kd_pendidikan')
            ->select(
                DB::raw('count(datainduk.kd_pendidikan) as jumlah'),
                'md_pendidikan.nama_jenjang'
            )
            ->groupBy('datainduk.kd_pendidikan')
            ->orderBy('jumlah', 'desc')
            ->pluck('md_pendidikan.nama_jenjang');

        $valuespdd = DB::table('datainduk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
            ->leftJoin('md_pendidikan', 'md_pendidikan.kd_pendidikan', '=', 'datainduk.kd_pendidikan')
            ->select(
                DB::raw('count(datainduk.kd_pendidikan) as jumlah'),
            )
            ->groupBy('datainduk.kd_pendidikan')
            ->orderBy('jumlah', 'desc')
            ->pluck('jumlah');


        //counter pekerjaan------------------------------------------------------------------------------------------------
        $labelpkj = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->leftJoin('md_pekerjaan', 'md_pekerjaan.kd_pekerjaan', '=', 'datainduk.kd_pekerjaan')
        ->leftJoin('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'datainduk.kd_level_ekonomi')
        ->select(
            DB::raw('count(md_pekerjaan.nama_pekerjaan) as jumlah'),
            'md_pekerjaan.nama_pekerjaan'
        )
        ->groupBy('md_pekerjaan.nama_pekerjaan')
        ->orderBy('jumlah', 'desc')
        ->pluck('md_pekerjaan.nama_pekerjaan');

        $valuespkj = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->leftJoin('md_pekerjaan', 'md_pekerjaan.kd_pekerjaan', '=', 'datainduk.kd_pekerjaan')
        ->leftJoin('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'datainduk.kd_level_ekonomi')
        ->select(
            DB::raw('count(md_pekerjaan.nama_pekerjaan) as jumlah'),
        )
        ->groupBy('md_pekerjaan.nama_pekerjaan')
        ->orderBy('jumlah', 'desc')
        ->pluck('jumlah');


        //get data-----------------------------------------------------------------------------------------------
        $data = DB::table('datainduk')
            ->select('tgl_lahir')
            ->get();

        $keahlian = DB::table('data_keahlian_warga')
        ->leftJoin('datainduk', 'datainduk.kd_induk', '=', 'data_keahlian_warga.kd_induk')
        ->leftJoin('md_keahlian', 'md_keahlian.kd_keahlian', '=', 'data_keahlian_warga.kd_keahlian')
        // ->leftJoin('md_rt', 'datainduk.kd_rt', '=', 'md_rt.kd_rt')
        ->select(

            'data_keahlian_warga.id',
            'data_keahlian_warga.kd_keahlian',
            'datainduk.kd_induk',
            'datainduk.no_kk',
            'datainduk.no_ktp',
            'datainduk.kd_rt',
            'datainduk.kd_agama',
            // 'md_rt.no_rw',
            'datainduk.nama',
            'datainduk.nm_panggilan',
            'md_keahlian.nama_keahlian',
            'data_keahlian_warga.is_sertifikat',
            'data_keahlian_warga.level_sertifikat',
            'data_keahlian_warga.deskripsi_sertifikat'
        )
        ->get();

        $level_eko = DB::table('datainduk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
            ->leftJoin('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'datainduk.kd_level_ekonomi')
            ->get();

        $goldar = DB::table('datainduk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
            ->leftJoin('md_rumah', 'md_rumah.kd_rt', '=', 'datainduk.kd_rt')
            ->select('md_rt.no_rw', 'md_rt.no_rt', 'md_rumah.no_rumah', 'datainduk.nama', 'datainduk.nm_panggilan', 'datainduk.gol_darah')
            ->get();

        $agama = DB::table('datainduk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
            ->leftJoin('md_agama', 'md_agama.kd_agama', '=', 'datainduk.kd_agama')
            ->get();

        $pekerjaan = DB::table('datainduk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
            ->leftJoin('md_pekerjaan', 'md_pekerjaan.kd_pekerjaan', '=', 'datainduk.kd_pekerjaan')
            ->leftJoin('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'datainduk.kd_level_ekonomi')
            ->get();



        return view('/red_rw/home', [
            
            'laki' => $laki,
            'pr' => $pr,

            "warga" => $warga,
            
            "data_kk" => $data_kk,
            "rumah" => $rumah,

            'labelmukim' => $labelmukim,
            'valuesmukim' => $valuesmukim,
            
            'labelgoldar' => $labelgoldar,
            'valuesgoldar' => $valuesgoldar,

            'labelagama' => $labelagama,
            'valuesagama' => $valuesagama,

            'labelekonomi' => $labelekonomi,
            'valuesekonomi' => $valuesekonomi,

            'labelpdd' => $labelpdd,
            'valuespdd' => $valuespdd,

            'labelpkj' => $labelpkj,
            'valuespkj' => $valuespkj,
        ]);
    }

    public function warga(Request $request)
    {
        //filter
        //session untuk mnangkap data dari request(form filter)
        $_SESSION['no_rt'] = isset($_GET['no_rt']) ? $request->no_rt : ''; 
        $_SESSION['no_rw'] = isset($_GET['no_rw']) ? $request->no_rw : '';
        $_SESSION['kelamin'] = isset($_GET['kelamin']) ? $request->kelamin : '';
        $_SESSION['mukim'] = isset($_GET['mukim']) ? $request->mukim : '';

        //chart usia
        $manula_laki = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->where('datainduk.tgl_lahir', '<=', Carbon::now()->subYear(55)->toDateString())
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('datainduk.j_kelamin', 'like', 'Laki-laki')
        ->where('datainduk.status_mukim', 'like', $_SESSION['mukim'] . '%')
        ->count();
        $dewasa_laki = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->where('datainduk.tgl_lahir', '>=', Carbon::now()->subYear(55)->toDateString())
        ->where('datainduk.tgl_lahir', '<=', Carbon::now()->subYear(30)->toDateString())
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('datainduk.j_kelamin', 'like', 'Laki-laki')
        ->where('datainduk.status_mukim', 'like', $_SESSION['mukim'] . '%')
        ->count();
        $remaja_laki = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->where('datainduk.tgl_lahir', '>=', Carbon::now()->subYear(30)->toDateString())
        ->where('datainduk.tgl_lahir', '<=', Carbon::now()->subYear(16)->toDateString())
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('datainduk.j_kelamin', 'like', 'Laki-laki')
        ->where('datainduk.status_mukim', 'like', $_SESSION['mukim'] . '%')
        ->count();
        $anak_laki = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->where('datainduk.tgl_lahir', '>=', Carbon::now()->subYear(16)->toDateString())
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('datainduk.j_kelamin', 'like', 'Laki-laki')
        ->where('datainduk.status_mukim', 'like', $_SESSION['mukim'] . '%')
        ->count();

        $manula_pr = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->where('datainduk.tgl_lahir', '<=', Carbon::now()->subYear(55)->toDateString())
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('datainduk.j_kelamin', 'like', 'Perempuan')
        ->where('datainduk.status_mukim', 'like', $_SESSION['mukim'] . '%')
        ->count();
        $dewasa_pr = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->where('datainduk.tgl_lahir', '>=', Carbon::now()->subYear(55)->toDateString())
        ->where('datainduk.tgl_lahir', '<=', Carbon::now()->subYear(30)->toDateString())
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('datainduk.j_kelamin', 'like', 'Perempuan')
        ->where('datainduk.status_mukim', 'like', $_SESSION['mukim'] . '%')
        ->count();
        $remaja_pr = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->where('datainduk.tgl_lahir', '>=', Carbon::now()->subYear(30)->toDateString())
        ->where('datainduk.tgl_lahir', '<=', Carbon::now()->subYear(16)->toDateString())
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('datainduk.j_kelamin', 'like', 'Perempuan')
        ->where('datainduk.status_mukim', 'like', $_SESSION['mukim'] . '%')
        ->count();
        $anak_pr = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->where('datainduk.tgl_lahir', '>=', Carbon::now()->subYear(16)->toDateString())
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('datainduk.j_kelamin', 'like', 'Perempuan')
        ->where('datainduk.status_mukim', 'like', $_SESSION['mukim'] . '%')
        ->count();

        if ($_SESSION['kelamin'] == 'Laki-laki') {
            $pr = [0, 0, 0, 0];
            $laki = [$manula_laki, $dewasa_laki, $remaja_laki, $anak_laki];
        }elseif($_SESSION['kelamin'] == 'Perempuan'){
            $laki = [0, 0, 0, 0];
            $pr = [$manula_pr, $dewasa_pr, $remaja_pr, $anak_pr];
        }else{            
            $laki = [$manula_laki, $dewasa_laki, $remaja_laki, $anak_laki];
            $pr = [$manula_pr, $dewasa_pr, $remaja_pr, $anak_pr];
        }

        $laki = json_encode($laki); // json_encode mengubah variabel PHP (berisi array) menjadi JSON
        $pr = json_encode($pr);

        //tabel
        $warga = DB::table('datainduk')
            ->leftJoin('data_kk', 'data_kk.no_kk', '=', 'datainduk.no_kk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')  
            ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
            ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
            ->where('datainduk.j_kelamin', 'like', '%' . $_SESSION['kelamin'] . '%')
            ->where('datainduk.status_mukim', 'like', $_SESSION['mukim'] . '%')
            ->paginate(1000);
    
        $warga->withPath('/red_rw/warga?no_rt=&no_rw=&kelamin=&mukim='); //Link untuk URI Pagination dapat dibuat sesuai dengan keinginan dengan memanfaatkan method withPath

        //chart status mukim
        $label = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('datainduk.j_kelamin', 'like', '%' . $_SESSION['kelamin'] . '%')
        ->where('datainduk.status_mukim', 'like', $_SESSION['mukim'] . '%')
        ->groupBy('datainduk.status_mukim')
        ->pluck('datainduk.status_mukim'); //fungsi pluck berguna untuk penghematan daya dan waktu untuk mengeksekusi query jika yang dibutuhkan hanya salah satu atau dua kolom tertentu.

        $values = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->select(
            DB::raw('count(datainduk.status_mukim) as jumlah'),
        )
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('datainduk.j_kelamin', 'like', '%' . $_SESSION['kelamin'] . '%')
        ->where('datainduk.status_mukim', 'like', $_SESSION['mukim'] . '%')
        ->groupBy('datainduk.status_mukim')
        ->pluck('jumlah');

        // script dropdown filter
        $md_rt = DB::table('data_kk')->groupBy('no_rt')->get();
        $md_rw = DB::table('data_kk')->groupBy('no_rw')->get();

        return view('/red_rw/warga', [
            'warga' => $warga,
            'md_rt' => $md_rt,
            'md_rw' => $md_rw,
            'label' => $label,
            'values' => $values,
            'laki' => $laki,
            'pr' => $pr,
        ]);
    }

    public function data_kk(Request $request)
    {
        // script untuk filter
        $_SESSION['no_rt'] = isset($_GET['no_rt']) ? $request->no_rt : '';
        $_SESSION['no_rw'] = isset($_GET['no_rw']) ? $request->no_rw : '';
        $_SESSION['level_ekonomi'] = isset($_GET['level_ekonomi']) ? $request->level_ekonomi : '';
        $status = [];
        $status['nokk'] = [];
        $status['nokk']['statuskk'] = "";

        $kk = Data_kk::Join('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'data_kk.kd_level_ekonomi')
            ->leftJoin('datainduk', 'datainduk.kode_kk', '=', 'data_kk.kode_kk')
            ->where('datainduk.status_hub_kk', '=', 'Kepala Keluarga')
            ->select(
                'data_kk.no_kk',
                'data_kk.kode_kk', 
                'data_kk.nm_kk', 
                'data_kk.no_rw', 
                'data_kk.no_rt', 
                'data_kk.kd_rumah',
                'data_kk.kd_level_ekonomi', 
                'md_level_ekonomi.nama_level', 
                'data_kk.keterangan'
            )
            ->where('data_kk.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
            ->where('data_kk.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
            ->where('data_kk.kd_level_ekonomi', 'like', '%' . $_SESSION['level_ekonomi'] . '%')
            ->paginate(1000);

        $kk->withPath('/red_rw/datakk?no_rt=&no_rw=&level_ekonomi=');

        $label = Data_kk::Join('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'data_kk.kd_level_ekonomi')
            ->leftJoin('datainduk', 'datainduk.kode_kk', '=', 'data_kk.kode_kk')
            ->where('datainduk.status_hub_kk', '=', 'Kepala Keluarga')
            ->select(
                'data_kk.no_rw', 
                'data_kk.no_rt',
                'data_kk.kd_level_ekonomi',
                'md_level_ekonomi.nama_level'
            )
            ->where('data_kk.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
            ->where('data_kk.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
            ->where('data_kk.kd_level_ekonomi', 'like', '%' . $_SESSION['level_ekonomi'] . '%')
            ->groupBy('md_level_ekonomi.kd_level_ekonomi')
            ->pluck('md_level_ekonomi.nama_level');

        $values = Data_kk::Join('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'data_kk.kd_level_ekonomi')
            ->leftJoin('datainduk', 'datainduk.kode_kk', '=', 'data_kk.kode_kk')
            ->where('datainduk.status_hub_kk', '=', 'Kepala Keluarga')
            ->select(
                DB::raw('count(datainduk.kode_kk) as jumlah'),      
                'data_kk.no_rw',
                'data_kk.no_rt',
                'data_kk.kd_level_ekonomi',
                'md_level_ekonomi.nama_level'
            )
            ->where('data_kk.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
            ->where('data_kk.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
            ->where('data_kk.kd_level_ekonomi', 'like', '%' . $_SESSION['level_ekonomi'] . '%')
            ->groupBy('md_level_ekonomi.kd_level_ekonomi')
            ->pluck('jumlah');
        // dd($values);

        // script dropdown filter
        $md_rt = DB::table('data_kk')->groupBy('no_rt')->get();
        $md_rw = DB::table('data_kk')->groupBy('no_rw')->get();
        $level_ekonomi = DB::table('md_level_ekonomi')->get();

        foreach($kk as $row){
            $cekstatus = DB::table('datainduk')
                ->selectRaw('kode_kk, COUNT(status_mukim) as status')
                ->where('kode_kk', '=', $row->kode_kk)
                ->whereIn('status_mukim', ["Kontrak", "Belum Kawin", "Mukim"])
                ->groupBy('kode_kk')
                ->get();
            
            if(count($cekstatus) > 0){
                $status['nokk']['statuskk'] = "Aktif";
            }else{
                $status['nokk']['statuskk'] = "Pindah";
            }
        }
        
        return view('/red_rw/datakk', [
            'kk' => $kk,
            'label' => $label,
            'values' => $values,
            'md_rt' => $md_rt,
            'md_rw' => $md_rw,
            'level_ekonomi' => $level_ekonomi,
            'status' => $status,
        ]);

    }

    public function ekonomi(Request $request)
    {
        //filter
        $_SESSION['no_rt'] = isset($_GET['no_rt']) ? $request->no_rt : ''; //session untuk mnangkap data dari request(form filter)
        $_SESSION['no_rw'] = isset($_GET['no_rw']) ? $request->no_rw : '';
        $_SESSION['level_ekonomi'] = isset($_GET['level_ekonomi']) ? $request->level_ekonomi : '';
        $_SESSION['mukim'] = isset($_GET['mukim']) ? $request->mukim : '';

        //tabel
        $ekonomi = DB::table('datainduk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
            ->leftJoin('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'datainduk.kd_level_ekonomi')
            ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
            ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
            ->where('md_level_ekonomi.kd_level_ekonomi', 'like', '%' . $_SESSION['level_ekonomi'] . '%')
            ->where('datainduk.status_mukim', 'like', $_SESSION['mukim'] . '%')
            ->paginate(1000);
        $ekonomi->withPath('/red_rw/ekonomi?no_rt=&no_rw=&level_ekonomi=&mukim=');

        //CHART LEVEL EKONOMI
        $label = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->leftJoin('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'datainduk.kd_level_ekonomi')
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('md_level_ekonomi.kd_level_ekonomi', 'like', '%' . $_SESSION['level_ekonomi'] . '%')
        ->where('datainduk.status_mukim', 'like', $_SESSION['mukim'] . '%')
        ->groupBy('md_level_ekonomi.kd_level_ekonomi')
        ->pluck('md_level_ekonomi.nama_level');

        $values = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->leftJoin('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'datainduk.kd_level_ekonomi')
        ->select(
            DB::raw('count(datainduk.kd_level_ekonomi) as jumlah'),
        )
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('md_level_ekonomi.kd_level_ekonomi', 'like', '%' . $_SESSION['level_ekonomi'] . '%')
        ->where('datainduk.status_mukim', 'like', $_SESSION['mukim'] . '%')
        ->groupBy('md_level_ekonomi.kd_level_ekonomi')
        ->pluck('jumlah');


        //CHART STATUS MUKIM
        $label2 = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->leftJoin('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'datainduk.kd_level_ekonomi')
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('md_level_ekonomi.kd_level_ekonomi', 'like', '%' . $_SESSION['level_ekonomi'] . '%')
        ->where('datainduk.status_mukim', 'like', $_SESSION['mukim'] . '%')
        ->groupBy('datainduk.status_mukim')
        ->pluck('datainduk.status_mukim');

        $values2 = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->leftJoin('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'datainduk.kd_level_ekonomi')
        ->select(
            DB::raw('count(datainduk.status_mukim) as jumlah'),
        )
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('md_level_ekonomi.kd_level_ekonomi', 'like', '%' . $_SESSION['level_ekonomi'] . '%')
        ->where('datainduk.status_mukim', 'like', $_SESSION['mukim'] . '%')
        ->groupBy('datainduk.status_mukim')
        ->pluck('jumlah');

        // script dropdown filter
        $md_rt = DB::table('md_rt')->get();
        $md_rw = DB::table('md_rw')->get();
        $level = DB::table('md_level_ekonomi')->get();
        // $label = DB::table('md_level_ekonomi')->pluck('nama_level');

        return view('/red_rw/ekonomi', [
            'ekonomi' => $ekonomi,
            'md_rt' => $md_rt,
            'md_rw' => $md_rw,
            'level' => $level,
            'label' => $label,
            'label2' => $label2,
            'values' => $values,
            'values2' => $values2,
        ]);

    }

    public function pekerjaan(Request $request)
    {
        //filter
        $_SESSION['no_rt'] = isset($_GET['no_rt']) ? $request->no_rt : '';
        $_SESSION['no_rw'] = isset($_GET['no_rw']) ? $request->no_rw : '';
        $_SESSION['pekerjaan'] = isset($_GET['pekerjaan']) ? $request->pekerjaan : '';
        $_SESSION['level_ekonomi'] = isset($_GET['level_ekonomi']) ? $request->level_ekonomi : '';

        $join = DB::table('datainduk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
            ->leftJoin('md_pekerjaan', 'md_pekerjaan.kd_pekerjaan', '=', 'datainduk.kd_pekerjaan')
            ->leftJoin('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'datainduk.kd_level_ekonomi')
            ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
            ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
            ->where('md_pekerjaan.nama_pekerjaan', 'like', '%' . $_SESSION['pekerjaan'] . '%')
            ->where('md_level_ekonomi.kd_level_ekonomi', 'like', '%' . $_SESSION['level_ekonomi'] . '%')
            ->paginate(1000);

        $join->withPath('/red_rw/pekerjaan?no_rt=&no_rw=&pekerjaan=&level_ekonomi=');

        $label = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->leftJoin('md_pekerjaan', 'md_pekerjaan.kd_pekerjaan', '=', 'datainduk.kd_pekerjaan')
        ->leftJoin('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'datainduk.kd_level_ekonomi')
        ->select(
            DB::raw('count(md_pekerjaan.nama_pekerjaan) as jumlah'),
            'md_pekerjaan.nama_pekerjaan'
        )
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('md_pekerjaan.nama_pekerjaan', 'like', '%' . $_SESSION['pekerjaan'] . '%')
        ->where('md_level_ekonomi.kd_level_ekonomi', 'like', '%' . $_SESSION['level_ekonomi'] . '%')
        ->groupBy('md_pekerjaan.nama_pekerjaan')
        ->orderBy('jumlah', 'desc')
        ->pluck('md_pekerjaan.nama_pekerjaan');

        $values = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->leftJoin('md_pekerjaan', 'md_pekerjaan.kd_pekerjaan', '=', 'datainduk.kd_pekerjaan')
        ->leftJoin('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'datainduk.kd_level_ekonomi')
        ->select(
            DB::raw('count(md_pekerjaan.nama_pekerjaan) as jumlah'),
        )
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('md_pekerjaan.nama_pekerjaan', 'like', '%' . $_SESSION['pekerjaan'] . '%')
        ->where('md_level_ekonomi.kd_level_ekonomi', 'like', '%' . $_SESSION['level_ekonomi'] . '%')
        ->groupBy('md_pekerjaan.nama_pekerjaan')
        ->orderBy('jumlah', 'desc')
        ->pluck('jumlah');


        $label2 = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->leftJoin('md_pekerjaan', 'md_pekerjaan.kd_pekerjaan', '=', 'datainduk.kd_pekerjaan')
        ->leftJoin('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'datainduk.kd_level_ekonomi')
        ->select(
            DB::raw('count(md_pekerjaan.nama_pekerjaan) as jumlah'),
            'md_level_ekonomi.nama_level'
        )
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('md_pekerjaan.nama_pekerjaan', 'like', '%' . $_SESSION['pekerjaan'] . '%')
        ->where('md_level_ekonomi.kd_level_ekonomi', 'like', '%' . $_SESSION['level_ekonomi'] . '%')
        ->groupBy('md_level_ekonomi.kd_level_ekonomi')
        ->pluck('md_level_ekonomi.nama_level');

        $values2 = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->leftJoin('md_pekerjaan', 'md_pekerjaan.kd_pekerjaan', '=', 'datainduk.kd_pekerjaan')
        ->leftJoin('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'datainduk.kd_level_ekonomi')
        ->select(
            DB::raw('count(md_pekerjaan.nama_pekerjaan) as jumlah'),
            'md_level_ekonomi.nama_level'
        )
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('md_pekerjaan.nama_pekerjaan', 'like', '%' . $_SESSION['pekerjaan'] . '%')
        ->where('md_level_ekonomi.kd_level_ekonomi', 'like', '%' . $_SESSION['level_ekonomi'] . '%')
        ->groupBy('md_level_ekonomi.kd_level_ekonomi')
        ->pluck('jumlah');

        // script dropdown filter
        $md_rt = DB::table('md_rt')->get();
        $md_rw = DB::table('md_rw')->get();
        $kerja = DB::table('md_pekerjaan')->get();
        $level = DB::table('md_level_ekonomi')->get();

        return view('/red_rw/pekerjaan', [
            'pekerjaan' => $join,
            'label' => $label,
            'values' => $values,
            'label2' => $label2,
            'values2' => $values2,
            'md_rt' => $md_rt,
            'md_rw' => $md_rw,
            'kerja' => $kerja,
            'level' => $level,
        ]);
    }

    public function pendidikan(Request $request)
    {

        $_SESSION['no_rt'] = isset($_GET['no_rt']) ? $request->no_rt : '';
        $_SESSION['no_rw'] = isset($_GET['no_rw']) ? $request->no_rw : '';
        $_SESSION['pendidikan'] = isset($_GET['pendidikan']) ? $request->pendidikan : '';

        $join = DB::table('datainduk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
            ->leftJoin('md_pendidikan', 'md_pendidikan.kd_pendidikan', '=', 'datainduk.kd_pendidikan')
            ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
            ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
            ->where('datainduk.kd_pendidikan', 'like', '%' . $_SESSION['pendidikan'] . '%')
            ->paginate(1000);
        $join->withPath('/red_rw/pendidikan?no_rt=&no_rw=&pendidikan=');

        $label = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->leftJoin('md_pendidikan', 'md_pendidikan.kd_pendidikan', '=', 'datainduk.kd_pendidikan')
        ->select(
            DB::raw('count(datainduk.kd_pendidikan) as jumlah'),
            'md_pendidikan.nama_jenjang'
        )
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('datainduk.kd_pendidikan', 'like', '%' . $_SESSION['pendidikan'] . '%')
        ->groupBy('datainduk.kd_pendidikan')
        ->orderBy('jumlah', 'desc')
        ->pluck('md_pendidikan.nama_jenjang');

        $values = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->leftJoin('md_pendidikan', 'md_pendidikan.kd_pendidikan', '=', 'datainduk.kd_pendidikan')
        ->select(
            DB::raw('count(datainduk.kd_pendidikan) as jumlah'),
        )
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('datainduk.kd_pendidikan', 'like', '%' . $_SESSION['pendidikan'] . '%')
        ->groupBy('datainduk.kd_pendidikan')
        ->orderBy('jumlah', 'desc')
        ->pluck('jumlah');

        // script dropdown filter
        $md_rt = DB::table('md_rt')->get();
        $md_rw = DB::table('md_rw')->get();
        $didik = DB::table('md_pendidikan')->get();

        return view('/red_rw/pendidikan', [
            'pendidikan' => $join,
            'label' => $label,
            'values' => $values,
            'md_rt' => $md_rt,
            'md_rw' => $md_rw,
            'didik' => $didik
        ]);
    }

    public function agama(Request $request)
    {
        $_SESSION['no_rt'] = isset($_GET['no_rt']) ? $request->no_rt : '';
        $_SESSION['no_rw'] = isset($_GET['no_rw']) ? $request->no_rw : '';
        $_SESSION['agama'] = isset($_GET['agama']) ? $request->agama : '';


        $join = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->leftJoin('md_agama', 'md_agama.kd_agama', '=', 'datainduk.kd_agama')
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('datainduk.kd_agama', 'like', '%' . $_SESSION['agama'] . '%')
        ->paginate(1000);
        $join->withPath('/red_rw/agama?no_rt=&no_rw=&agama=');

        $label = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->leftJoin('md_agama', 'md_agama.kd_agama', '=', 'datainduk.kd_agama')
        ->select(
            DB::raw('count(datainduk.kd_agama) as jumlah'),
            'md_agama.nama_agama'
        )
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('datainduk.kd_agama', 'like', '%' . $_SESSION['agama'] . '%')
        ->groupBy('datainduk.kd_agama')
        ->orderBy('jumlah', 'desc')
        ->pluck('md_agama.nama_agama');

        $values = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->leftJoin('md_agama', 'md_agama.kd_agama', '=', 'datainduk.kd_agama')
        ->select(
            DB::raw('count(datainduk.kd_agama) as jumlah'),
        )
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('datainduk.kd_agama', 'like', '%' . $_SESSION['agama'] . '%')
        ->groupBy('datainduk.kd_agama')
        ->orderBy('jumlah', 'desc')
        ->pluck('jumlah');

        // script dropdown filter
        $md_rt = DB::table('md_rt')->get();
        $md_rw = DB::table('md_rw')->get();
        $agm = DB::table('md_agama')->get();

        return view('/red_rw/agama', [
            'agama' => $join,
            'label' => $label,
            'values' => $values,
            'md_rt' => $md_rt,
            'md_rw' => $md_rw,
            'agm' => $agm,
        ]);

        
    }

    public function rwkeahlian(Request $request)
    {
        // script untuk filter
        $_SESSION['no_rt'] = isset($_GET['no_rt']) ? $request->no_rt : '';
        // $_SESSION['no_rw'] = isset($_GET['no_rw']) ? $request->no_rw : '';
        $_SESSION['keahlian'] = isset($_GET['keahlian']) ? $request->keahlian : '';
        $_SESSION['level'] = isset($_GET['level']) ? $request->level : '';

        $keahlian =  DB::table('data_keahlian_warga')
            ->leftJoin('datainduk', 'datainduk.kd_induk', '=', 'data_keahlian_warga.kd_induk')
            ->leftJoin('md_keahlian', 'md_keahlian.kd_keahlian', '=', 'data_keahlian_warga.kd_keahlian')
            ->select(
                'data_keahlian_warga.id',
                'data_keahlian_warga.kd_keahlian',
                'datainduk.kd_induk',
                'datainduk.kode_kk',
                'datainduk.no_kk',
                'datainduk.no_ktp',
                'datainduk.kd_rt',
                'datainduk.kd_agama',
                'datainduk.nama',
                'datainduk.nm_panggilan',
                'md_keahlian.nama_keahlian',
                'data_keahlian_warga.is_sertifikat',
                'data_keahlian_warga.level_sertifikat',
                'data_keahlian_warga.deskripsi_sertifikat'
            )
            ->where('datainduk.kd_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
            ->where('data_keahlian_warga.kd_keahlian', 'like', '%' . $_SESSION['keahlian'] . '%')
            ->where('data_keahlian_warga.level_sertifikat', 'like', '%' . $_SESSION['level'] . '%')
            ->paginate(1000);
        // script untuk pagination biar ketika difilter masih bisa jalan paginationnya
        $keahlian->withPath('/red_rw/keahlian?no_rt=&keahlian=&level=');


        // script chart
        $label =  DB::table('data_keahlian_warga')
        ->leftJoin('datainduk', 'datainduk.kd_induk', '=', 'data_keahlian_warga.kd_induk')
        ->leftJoin('md_keahlian', 'md_keahlian.kd_keahlian', '=', 'data_keahlian_warga.kd_keahlian')
        ->select(
            'data_keahlian_warga.kd_keahlian',
            'datainduk.kd_rt',
            'datainduk.kd_agama',
            'md_keahlian.nama_keahlian',
            'data_keahlian_warga.level_sertifikat'
        )
        ->where('datainduk.kd_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('data_keahlian_warga.kd_keahlian', 'like', '%' . $_SESSION['keahlian'] . '%')
        ->where('data_keahlian_warga.level_sertifikat', 'like', '%' . $_SESSION['level'] . '%')
        ->groupBy('data_keahlian_warga.kd_keahlian')
        ->pluck('md_keahlian.nama_keahlian');

        $values =  DB::table('data_keahlian_warga')
        ->leftJoin('datainduk', 'datainduk.kd_induk', '=', 'data_keahlian_warga.kd_induk')
        ->leftJoin('md_keahlian', 'md_keahlian.kd_keahlian', '=', 'data_keahlian_warga.kd_keahlian')
        ->select(
            DB::raw('count(data_keahlian_warga.kd_keahlian) as jumlah'),
            'data_keahlian_warga.kd_keahlian',
            'datainduk.kd_rt',
            'datainduk.kd_agama',
            'md_keahlian.nama_keahlian',
            'data_keahlian_warga.level_sertifikat'
        )
        ->where('datainduk.kd_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('data_keahlian_warga.kd_keahlian', 'like', '%' . $_SESSION['keahlian'] . '%')
        ->where('data_keahlian_warga.level_sertifikat', 'like', '%' . $_SESSION['level'] . '%')
        ->groupBy('data_keahlian_warga.kd_keahlian')
        ->pluck('jumlah');

        // script dropdown filter
        $md_rt = DB::table('md_rt')->get();
        $ahli = DB::table('md_keahlian')->get();
        $level = DB::table('data_keahlian_warga')->get();
        
        return view('/red_rw/keahlian', [
            'keahlian' => $keahlian,
            'label' => $label,
            'values' => $values,
            'md_rt' => $md_rt,
            'ahli' => $ahli,
            'level' => $level,
        ]);
    }


    public function goldarah(Request $request)
    {
        // script untuk filter
        $_SESSION['no_rt'] = isset($_GET['no_rt']) ? $request->no_rt : '';
        $_SESSION['no_rw'] = isset($_GET['no_rw']) ? $request->no_rw : '';
        $_SESSION['gol_darah'] = isset($_GET['gol_darah']) ? $request->gol_darah : '';
        
        // script untuk table
        $table = DB::table('datainduk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
            ->leftJoin('data_kk', 'data_kk.kode_kk', '=', 'datainduk.kode_kk')
            ->select(
                'md_rt.no_rw', 
                'md_rt.no_rt',
                'data_kk.kd_rumah', 
                'datainduk.kd_rt',
                'datainduk.kode_kk', 
                'datainduk.nama', 
                'datainduk.nm_panggilan', 
                'datainduk.gol_darah'
            )
            ->where('md_rt.no_rt', 'like', '%'. $_SESSION['no_rt'] .'%')
            ->where('md_rt.no_rw', 'like', '%'. $_SESSION['no_rw'] .'%')
            ->where('datainduk.gol_darah', 'like', '%'. $_SESSION['gol_darah'] .'%')
            ->paginate(1000);

        // script untuk pagination biar ketika difilter masih bisa jalan paginationnya
        $table->withPath('/red_rw/gol_darah?no_rt=&no_rw=');


        // script untuk chart
        $gol_darah = DB::table('datainduk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
            ->leftJoin('data_kk', 'data_kk.kode_kk', '=', 'datainduk.kode_kk')
            ->select(
                'md_rt.no_rw', 
                'md_rt.no_rt',
                'data_kk.kd_rumah', 
                'datainduk.kd_rt', 
                'datainduk.nama', 
                'datainduk.nm_panggilan', 
                'datainduk.gol_darah'
            )
            ->where('md_rt.no_rt', 'like', '%'. $_SESSION['no_rt'] .'%')
            ->where('md_rt.no_rw', 'like', '%'. $_SESSION['no_rw'] .'%')
            ->where('datainduk.gol_darah', 'like', '%' . $_SESSION['gol_darah'] . '%')
            ->groupBy('datainduk.gol_darah')
            ->get();

        $g = array();
        foreach ($gol_darah as $data) {
            if ($data->gol_darah == 1) {
                $label =  'A';
            } elseif ($data->gol_darah == 2) {
                $label =  'B';
            } elseif ($data->gol_darah == 3) {
                $label =  'O';
            } else {
                $label =  'AB';
            }
            $g[] = $label;
        }

        $label = json_encode($g);
        // dd($label);

        $values = DB::table('datainduk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
            ->leftJoin('data_kk', 'data_kk.kode_kk', '=', 'datainduk.kode_kk')
            ->select(
                DB::raw('count(datainduk.gol_darah) as jumlah'),
                'md_rt.no_rw', 
                'md_rt.no_rt',
                'data_kk.kd_rumah', 
                'datainduk.kd_rt',
                'datainduk.kode_kk', 
                'datainduk.nama', 
                'datainduk.nm_panggilan', 
                'datainduk.gol_darah'
            )
            ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
            ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
            ->where('datainduk.gol_darah', 'like', '%' . $_SESSION['gol_darah'] . '%')
            ->groupBy('datainduk.gol_darah')
            ->pluck('jumlah');
        $values = json_encode($values);


        // script dropdown filter
        $md_rt = DB::table('md_rt')->get();
        $md_rw = DB::table('md_rw')->get();
        $gol_darah_filter = DB::table('datainduk')->groupBy('gol_darah')->get();
            
        return view('/red_rw/gol_darah', [
            'table' => $table,
            'label' => $label,
            'values' => $values,
            'md_rt' => $md_rt,
            'md_rw' => $md_rw,
            'gol_darah_filter' => $gol_darah_filter,
        ]);


        
    }




    //===============================================================================================================//
    //==============================================RED PKK==========================================================//
    public function homepkk()
    {
            $countkeahlian =  DB::table('data_keahlian_warga')
                ->leftJoin('datainduk', 'datainduk.kd_induk', '=', 'data_keahlian_warga.kd_induk')
                ->leftJoin('md_keahlian', 'md_keahlian.kd_keahlian', '=', 'data_keahlian_warga.kd_keahlian')
                ->where('datainduk.j_kelamin', '=', 'Perempuan')
                ->count();
            
            $countperempuan = DB::table('datainduk')
                ->where('datainduk.j_kelamin', '=', 'Perempuan')
                ->count();

            //$counterpkk = DB::table('')


            // script chart keahlian
            $label =  DB::table('data_keahlian_warga')
            ->leftJoin('datainduk', 'datainduk.kd_induk', '=', 'data_keahlian_warga.kd_induk')
            ->leftJoin('md_keahlian', 'md_keahlian.kd_keahlian', '=', 'data_keahlian_warga.kd_keahlian')
            ->select(
                'data_keahlian_warga.kd_keahlian',
                'datainduk.kd_rt',
                'datainduk.kd_agama',
                'md_keahlian.nama_keahlian',
                'data_keahlian_warga.level_sertifikat'
            )
            ->where('datainduk.j_kelamin', '=', 'Perempuan')
            ->groupBy('data_keahlian_warga.kd_keahlian')
            ->pluck('md_keahlian.nama_keahlian');

            $values =  DB::table('data_keahlian_warga')
            ->leftJoin('datainduk', 'datainduk.kd_induk', '=', 'data_keahlian_warga.kd_induk')
            ->leftJoin('md_keahlian', 'md_keahlian.kd_keahlian', '=', 'data_keahlian_warga.kd_keahlian')
            ->select(
                DB::raw('count(data_keahlian_warga.kd_keahlian) as jumlah'),
                'data_keahlian_warga.kd_keahlian',
                'datainduk.kd_rt',
                'datainduk.kd_agama',
                'md_keahlian.nama_keahlian',
                'data_keahlian_warga.level_sertifikat'
            )
            ->where('datainduk.j_kelamin', '=', 'Perempuan')
            ->groupBy('data_keahlian_warga.kd_keahlian')
            ->pluck('jumlah');


            return view('/red_pkk/home', [
                'countkeahlian' => $countkeahlian,
                'countperempuan' => $countperempuan,

                'label' => $label,
                'values' => $values,
                

                
            ]);
    }



    public function wargapkk(Request $request)
    {
        $_SESSION['no_rt'] = isset($_GET['no_rt']) ? $request->no_rt : '';
        $_SESSION['no_rw'] = isset($_GET['no_rw']) ? $request->no_rw : '';
        $_SESSION['kawin'] = isset($_GET['kawin']) ? $request->kawin : '';
        $_SESSION['hub'] = isset($_GET['hub']) ? $request->hub : '';


        $pk = DB::table('datainduk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
            ->where('datainduk.j_kelamin', '=', 'Perempuan')
            ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
            ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
            ->where('datainduk.status_kawin', 'like' , $_SESSION['kawin'] . '%')
            ->where('datainduk.status_hub_kk', 'like', '%' . $_SESSION['hub'] . '%')
            ->paginate(1000);
        $pk->withPath('/red_pkk/warga?no_rt=&no_rw=&kawin=&hub=');

        $pk = $pk->map(function ($row) {
            $kalkulasi = Carbon::parse($row->tgl_lahir)->age;
            $row->usia = $kalkulasi;
            return $row;
        });

        //counter status kawin
        $labelkawin = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->where('datainduk.j_kelamin', '=', "Perempuan")
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('datainduk.status_kawin', 'like', $_SESSION['kawin'] . '%')
        ->where('datainduk.status_hub_kk', 'like', '%' . $_SESSION['hub'] . '%')
        ->groupBy('datainduk.status_kawin')
        ->pluck('datainduk.status_kawin');

        $valueskawin = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->where('datainduk.j_kelamin', '=', "Perempuan")
        ->select(
            DB::raw('count(datainduk.status_kawin) as jumlah'),
        )
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('datainduk.status_kawin', 'like' , $_SESSION['kawin'] . '%')
        ->where('datainduk.status_hub_kk', 'like', '%' . $_SESSION['hub'] . '%')
        ->groupBy('datainduk.status_kawin')
        ->pluck('jumlah');



        //counter hubungan
        $labelhubungan = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->where('datainduk.j_kelamin', '=', "Perempuan")
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('datainduk.status_kawin', 'like' , $_SESSION['kawin'] . '%')
        ->where('datainduk.status_hub_kk', 'like', '%' . $_SESSION['hub'] . '%')
        ->groupBy('datainduk.status_hub_kk')
        ->pluck('datainduk.status_hub_kk');

        $valueshubungan = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->where('datainduk.j_kelamin', '=', "Perempuan")
        ->select(
            DB::raw('count(datainduk.status_hub_kk) as jumlah'),
        )
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('datainduk.status_kawin', 'like' , $_SESSION['kawin'] . '%')
        ->where('datainduk.status_hub_kk', 'like', '%' . $_SESSION['hub'] . '%')
        ->groupBy('datainduk.status_hub_kk')
        ->pluck('jumlah');

        // script dropdown filter
        $md_rt = DB::table('md_rt')->get();
        $md_rw = DB::table('md_rw')->get();

        

        return view('/red_pkk/warga', [
                'pk' => $pk,

                'md_rt' => $md_rt,
                'md_rw' => $md_rw,

                'labelkawin' => $labelkawin,
                'valueskawin' => $valueskawin,

                'labelhubungan' => $labelhubungan,
                'valueshubungan' => $valueshubungan,

            ]);
    }


    public function keahlianpkk(Request $request)
    {
        // script untuk filter
        $_SESSION['no_rt'] = isset($_GET['no_rt']) ? $request->no_rt : '';
        // $_SESSION['no_rw'] = isset($_GET['no_rw']) ? $request->no_rw : '';
        $_SESSION['keahlian'] = isset($_GET['keahlian']) ? $request->keahlian : '';
        $_SESSION['level'] = isset($_GET['level']) ? $request->level : '';

        $keahlian =  DB::table('data_keahlian_warga')
            ->leftJoin('datainduk', 'datainduk.kd_induk', '=', 'data_keahlian_warga.kd_induk')
            ->leftJoin('md_keahlian', 'md_keahlian.kd_keahlian', '=', 'data_keahlian_warga.kd_keahlian')
            ->select(
                'data_keahlian_warga.id',
                'data_keahlian_warga.kd_keahlian',
                'datainduk.kd_induk',
                'datainduk.kode_kk',
                'datainduk.no_ktp',
                'datainduk.kd_rt',
                'datainduk.kd_agama',
                'datainduk.nama',
                'datainduk.nm_panggilan',
                'md_keahlian.nama_keahlian',
                'data_keahlian_warga.is_sertifikat',
                'data_keahlian_warga.level_sertifikat',
                'data_keahlian_warga.deskripsi_sertifikat'
            )
            ->where('datainduk.j_kelamin', '=', "Perempuan")
            ->where('datainduk.kd_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
            ->where('data_keahlian_warga.kd_keahlian', 'like', '%' . $_SESSION['keahlian'] . '%')
            ->where('data_keahlian_warga.level_sertifikat', 'like', '%' . $_SESSION['level'] . '%')
            ->paginate(1000);
        // script untuk pagination biar ketika difilter masih bisa jalan paginationnya
        $keahlian->withPath('/red_pkk/keahlian?no_rt=&keahlian=&level=');


        // script chart
        $label =  DB::table('data_keahlian_warga')
        ->leftJoin('datainduk', 'datainduk.kd_induk', '=', 'data_keahlian_warga.kd_induk')
        ->leftJoin('md_keahlian', 'md_keahlian.kd_keahlian', '=', 'data_keahlian_warga.kd_keahlian')
        ->select(
            'data_keahlian_warga.kd_keahlian',
            'datainduk.kd_rt',
            'datainduk.kd_agama',
            'md_keahlian.nama_keahlian',
            'data_keahlian_warga.level_sertifikat'
        )
        ->where('datainduk.j_kelamin', '=', "Perempuan")
        ->where('datainduk.kd_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('data_keahlian_warga.kd_keahlian', 'like', '%' . $_SESSION['keahlian'] . '%')
        ->where('data_keahlian_warga.level_sertifikat', 'like', '%' . $_SESSION['level'] . '%')
        ->groupBy('data_keahlian_warga.kd_keahlian')
        ->pluck('md_keahlian.nama_keahlian');

        $values =  DB::table('data_keahlian_warga')
        ->leftJoin('datainduk', 'datainduk.kd_induk', '=', 'data_keahlian_warga.kd_induk')
        ->leftJoin('md_keahlian', 'md_keahlian.kd_keahlian', '=', 'data_keahlian_warga.kd_keahlian')
        ->select(
            DB::raw('count(data_keahlian_warga.kd_keahlian) as jumlah'),
            'data_keahlian_warga.kd_keahlian',
            'datainduk.kd_rt',
            'datainduk.kd_agama',
            'md_keahlian.nama_keahlian',
            'data_keahlian_warga.level_sertifikat'
        )
        ->where('datainduk.j_kelamin', '=', "Perempuan")
        ->where('datainduk.kd_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('data_keahlian_warga.kd_keahlian', 'like', '%' . $_SESSION['keahlian'] . '%')
        ->where('data_keahlian_warga.level_sertifikat', 'like', '%' . $_SESSION['level'] . '%')
        ->groupBy('data_keahlian_warga.kd_keahlian')
        ->pluck('jumlah');

        // script dropdown filter
        $md_rt = DB::table('md_rt')->get();
        $ahli = DB::table('md_keahlian')->get();
        $level = DB::table('data_keahlian_warga')->get();
        
        return view('/red_pkk/keahlian', [
            'keahlian' => $keahlian,
            'label' => $label,
            'values' => $values,
            'md_rt' => $md_rt,
            'ahli' => $ahli,
            'level' => $level,
        ]);

    }

    public function pekerjaanpkk(Request $request)
    {
        //filter
        $_SESSION['no_rt'] = isset($_GET['no_rt']) ? $request->no_rt : '';
        $_SESSION['no_rw'] = isset($_GET['no_rw']) ? $request->no_rw : '';
        $_SESSION['pekerjaan'] = isset($_GET['pekerjaan']) ? $request->pekerjaan : '';
        $_SESSION['level_ekonomi'] = isset($_GET['level_ekonomi']) ? $request->level_ekonomi : '';

        $join = DB::table('datainduk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
            ->leftJoin('md_pekerjaan', 'md_pekerjaan.kd_pekerjaan', '=', 'datainduk.kd_pekerjaan')
            ->leftJoin('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'datainduk.kd_level_ekonomi')
            ->where('datainduk.j_kelamin', '=', "Perempuan") //edited
            ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
            ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
            ->where('md_pekerjaan.nama_pekerjaan', 'like', '%' . $_SESSION['pekerjaan'] . '%')
            ->where('md_level_ekonomi.kd_level_ekonomi', 'like', '%' . $_SESSION['level_ekonomi'] . '%')
            ->paginate(1000);

        $join->withPath('/red_rw/pekerjaan?no_rt=&no_rw=&pekerjaan=&level_ekonomi=');

        $label = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->leftJoin('md_pekerjaan', 'md_pekerjaan.kd_pekerjaan', '=', 'datainduk.kd_pekerjaan')
        ->leftJoin('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'datainduk.kd_level_ekonomi')
        ->where('datainduk.j_kelamin', '=', "Perempuan") //edited
        ->select(
            DB::raw('count(md_pekerjaan.nama_pekerjaan) as jumlah'),
            'md_pekerjaan.nama_pekerjaan'
        )
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('md_pekerjaan.nama_pekerjaan', 'like', '%' . $_SESSION['pekerjaan'] . '%')
        ->where('md_level_ekonomi.kd_level_ekonomi', 'like', '%' . $_SESSION['level_ekonomi'] . '%')
        ->groupBy('md_pekerjaan.nama_pekerjaan')
        ->orderBy('jumlah', 'desc')
        ->pluck('md_pekerjaan.nama_pekerjaan');

        $values = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->leftJoin('md_pekerjaan', 'md_pekerjaan.kd_pekerjaan', '=', 'datainduk.kd_pekerjaan')
        ->leftJoin('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'datainduk.kd_level_ekonomi')
        ->where('datainduk.j_kelamin', '=', "Perempuan") //edited
        ->select(
            DB::raw('count(md_pekerjaan.nama_pekerjaan) as jumlah'),
        )
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('md_pekerjaan.nama_pekerjaan', 'like', '%' . $_SESSION['pekerjaan'] . '%')
        ->where('md_level_ekonomi.kd_level_ekonomi', 'like', '%' . $_SESSION['level_ekonomi'] . '%')
        ->groupBy('md_pekerjaan.nama_pekerjaan')
        ->orderBy('jumlah', 'desc')
        ->pluck('jumlah');


        $label2 = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->leftJoin('md_pekerjaan', 'md_pekerjaan.kd_pekerjaan', '=', 'datainduk.kd_pekerjaan')
        ->leftJoin('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'datainduk.kd_level_ekonomi')
        ->where('datainduk.j_kelamin', '=', "Perempuan") //edited
        ->select(
            DB::raw('count(md_pekerjaan.nama_pekerjaan) as jumlah'),
            'md_level_ekonomi.nama_level'
        )
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('md_pekerjaan.nama_pekerjaan', 'like', '%' . $_SESSION['pekerjaan'] . '%')
        ->where('md_level_ekonomi.kd_level_ekonomi', 'like', '%' . $_SESSION['level_ekonomi'] . '%')
        ->groupBy('md_level_ekonomi.kd_level_ekonomi')
        ->pluck('md_level_ekonomi.nama_level');

        $values2 = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->leftJoin('md_pekerjaan', 'md_pekerjaan.kd_pekerjaan', '=', 'datainduk.kd_pekerjaan')
        ->leftJoin('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'datainduk.kd_level_ekonomi')
        ->where('datainduk.j_kelamin', '=', "Perempuan") //edited
        ->select(
            DB::raw('count(md_pekerjaan.nama_pekerjaan) as jumlah'),
            'md_level_ekonomi.nama_level'
        )
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('md_pekerjaan.nama_pekerjaan', 'like', '%' . $_SESSION['pekerjaan'] . '%')
        ->where('md_level_ekonomi.kd_level_ekonomi', 'like', '%' . $_SESSION['level_ekonomi'] . '%')
        ->groupBy('md_level_ekonomi.kd_level_ekonomi')
        ->pluck('jumlah');

        // script dropdown filter
        $md_rt = DB::table('md_rt')->get();
        $md_rw = DB::table('md_rw')->get();
        $kerja = DB::table('md_pekerjaan')->get();
        $level = DB::table('md_level_ekonomi')->get();

        return view('/red_pkk/pekerjaan', [
            'pekerjaan' => $join,
            'label' => $label,
            'values' => $values,
            'label2' => $label2,
            'values2' => $values2,
            'md_rt' => $md_rt,
            'md_rw' => $md_rw,
            'kerja' => $kerja,
            'level' => $level,
        ]);
    }


    //==================================================================================================================//
    //==============================================RED KARANG TARUNA===================================================//
    public function RemajaCounter()
    {
        $counter = [];
        $counter['Remaja'] = [];
        $counter['Remaja']['Total'] = $data_induk = DB::table('datainduk')
            ->where('tgl_lahir', '>=', Carbon::now()->subYear(30)->toDateString())
            ->where('tgl_lahir', '<=', Carbon::now()->subYear(16)->toDateString())
            ->count();
        $counter['Remaja']['Laki'] = $data_induk = DB::table('datainduk')
            ->where('j_kelamin', '=', 'Laki-laki')
            ->where('tgl_lahir', '>=', Carbon::now()->subYear(30)->toDateString())
            ->where('tgl_lahir', '<=', Carbon::now()->subYear(16)->toDateString())
            ->count();
        $counter['Remaja']['Perempuan'] = $data_induk = DB::table('datainduk')
            ->where('j_kelamin', '=', 'Perempuan')
            ->where('tgl_lahir', '>=', Carbon::now()->subYear(30)->toDateString())
            ->where('tgl_lahir', '<=', Carbon::now()->subYear(16)->toDateString())
            ->count();
        $counter['Remaja']['KT'] = $data_induk = DB::table('datainduk')
            ->where('is_kt', '=', 'Ya')
            ->where('tgl_lahir', '>=', Carbon::now()->subYear(30)->toDateString())
            ->where('tgl_lahir', '<=', Carbon::now()->subYear(16)->toDateString())
            ->count();
        $counter['Remaja']['Keahlian'] = DB::table('data_keahlian_warga')
            ->leftJoin('datainduk', 'datainduk.kd_induk', '=', 'data_keahlian_warga.kd_induk')
            ->leftJoin('md_keahlian', 'md_keahlian.kd_keahlian', '=', 'data_keahlian_warga.kd_keahlian')
            ->where('tgl_lahir', '>=', Carbon::now()->subYear(30)->toDateString())
            ->where('tgl_lahir', '<=', Carbon::now()->subYear(16)->toDateString())
            ->count();
        return $counter;
    }

    public function homekt()
    {
        //counter anggota
        $anggotakt = DB::table('datainduk')
        ->where('is_kt', '=', 'Ya')
        ->count();


        //counter gender
        $laki = DB::table('datainduk')
        ->where('datainduk.j_kelamin', '=', 'Laki-laki')
        ->where('tgl_lahir', '>=', Carbon::now()->subYear(30)->toDateString())
        ->where('tgl_lahir', '<=', Carbon::now()->subYear(16)->toDateString())
        ->count();
        $perempuan = DB::table('datainduk')
        ->where('datainduk.j_kelamin', '=', 'Perempuan')
        ->where('tgl_lahir', '>=', Carbon::now()->subYear(30)->toDateString())
        ->where('tgl_lahir', '<=', Carbon::now()->subYear(16)->toDateString())
        ->count();
       
        // script chart keahlian
        $labelkeahlian =  DB::table('data_keahlian_warga')
        ->leftJoin('datainduk', 'datainduk.kd_induk', '=', 'data_keahlian_warga.kd_induk')
        ->leftJoin('md_keahlian', 'md_keahlian.kd_keahlian', '=', 'data_keahlian_warga.kd_keahlian')
        ->select(
            'data_keahlian_warga.kd_keahlian',
            'datainduk.kd_rt',
            'datainduk.kd_agama',
            'md_keahlian.nama_keahlian',
            'data_keahlian_warga.level_sertifikat'
        )
        ->where('tgl_lahir', '>=', Carbon::now()->subYear(30)->toDateString())
        ->where('tgl_lahir', '<=', Carbon::now()->subYear(16)->toDateString())
        ->groupBy('data_keahlian_warga.kd_keahlian')
        ->pluck('md_keahlian.nama_keahlian');

        $valueskeahlian =  DB::table('data_keahlian_warga')
        ->leftJoin('datainduk', 'datainduk.kd_induk', '=', 'data_keahlian_warga.kd_induk')
        ->leftJoin('md_keahlian', 'md_keahlian.kd_keahlian', '=', 'data_keahlian_warga.kd_keahlian')
        ->select(
            DB::raw('count(data_keahlian_warga.kd_keahlian) as jumlah'),
            'data_keahlian_warga.kd_keahlian',
            'datainduk.kd_rt',
            'datainduk.kd_agama',
            'md_keahlian.nama_keahlian',
            'data_keahlian_warga.level_sertifikat'
        )
        ->where('tgl_lahir', '>=', Carbon::now()->subYear(30)->toDateString())
        ->where('tgl_lahir', '<=', Carbon::now()->subYear(16)->toDateString())
        ->groupBy('data_keahlian_warga.kd_keahlian')
        ->pluck('jumlah');

        //script chart jenis kelamin
        $labelgender = DB::table('datainduk')
        ->where('tgl_lahir', '>=', Carbon::now()->subYear(30)->toDateString())
        ->where('tgl_lahir', '<=', Carbon::now()->subYear(16)->toDateString())
        ->groupBy('datainduk.j_kelamin')
        ->pluck('datainduk.j_kelamin');

        $valuesgender = DB::table('datainduk')
        ->where('tgl_lahir', '>=', Carbon::now()->subYear(30)->toDateString())
        ->where('tgl_lahir', '<=', Carbon::now()->subYear(16)->toDateString())
        ->select(
            DB::raw('count(datainduk.j_kelamin) as jumlah'),
        )
        ->groupBy('datainduk.j_kelamin')
        ->pluck('jumlah');


       

        return view('/red_kt/home', [
            'data' => $this->RemajaCounter(),
            'anggotakt' => $anggotakt,

            'laki' => $laki,
            'perempuan' => $perempuan,

            'labelkeahlian' => $labelkeahlian,
            'valueskeahlian' => $valueskeahlian,

            'labelgender' => $labelgender,
            'valuesgender' => $valuesgender,
            
        ]);
    }

    public function wargakt(Request $request)
    {
        // dd(Carbon::now()->subYear(30)->toDateString()); //1992
        // dd(Carbon::now()->subYear(16)->toDateString()); //2006
        $_SESSION['no_rt'] = isset($_GET['no_rt']) ? $request->no_rt : '';
        $_SESSION['no_rw'] = isset($_GET['no_rw']) ? $request->no_rw : '';
        $_SESSION['skawin'] = isset($_GET['skawin']) ? $request->skawin : '';

        $data_induk = DB::table('datainduk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
            ->where('tgl_lahir', '>=', Carbon::now()->subYear(30)->toDateString())
            ->where('tgl_lahir', '<=', Carbon::now()->subYear(16)->toDateString())
            ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
            ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
            ->where('datainduk.status_kawin', 'like', $_SESSION['skawin'] . '%')
            ->paginate(1000);
        $data_induk->withPath('/red_kt/warga?no_rt=&no_rw=&skawin=');

        $data_induk = $data_induk->map(function ($row) {
            $kalkulasi = Carbon::parse($row->tgl_lahir)->age;
            $row->usia = $kalkulasi;
            return $row;
        });
        // dd($data_induk);


        //counter status kawin
        $labelkawin = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->where('tgl_lahir', '>=', Carbon::now()->subYear(30)->toDateString())
        ->where('tgl_lahir', '<=', Carbon::now()->subYear(16)->toDateString())
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('datainduk.status_kawin', 'like', $_SESSION['skawin'] . '%')
        ->groupBy('datainduk.status_kawin')
        ->pluck('datainduk.status_kawin');

        $valueskawin = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->where('tgl_lahir', '>=', Carbon::now()->subYear(30)->toDateString())
        ->where('tgl_lahir', '<=', Carbon::now()->subYear(16)->toDateString())
        ->select(
            DB::raw('count(datainduk.status_kawin) as jumlah'),
        )
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('datainduk.status_kawin', 'like', $_SESSION['skawin'] . '%')
        ->groupBy('datainduk.status_kawin')
        ->pluck('jumlah');


        //counter gender
        $labelgender = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->where('tgl_lahir', '>=', Carbon::now()->subYear(30)->toDateString())
        ->where('tgl_lahir', '<=', Carbon::now()->subYear(16)->toDateString())
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('datainduk.status_kawin', 'like', $_SESSION['skawin'] . '%')
        ->groupBy('datainduk.j_kelamin')
        ->pluck('datainduk.j_kelamin');

        $valuesgender = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->where('tgl_lahir', '>=', Carbon::now()->subYear(30)->toDateString())
        ->where('tgl_lahir', '<=', Carbon::now()->subYear(16)->toDateString())
        ->select(
            DB::raw('count(datainduk.j_kelamin) as jumlah'),
        )
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('datainduk.status_kawin', 'like', $_SESSION['skawin'] . '%')
        ->groupBy('datainduk.j_kelamin')
        ->pluck('jumlah');

        // script dropdown filter
        $md_rt = DB::table('data_kk')->groupBy('no_rt')->get();
        $md_rw = DB::table('data_kk')->groupBy('no_rw')->get();

        return view('/red_kt/warga', [
            'data_induk' => $data_induk,
            'md_rt' => $md_rt,
            'md_rw' => $md_rw,

            'labelgender' => $labelgender,
            'valuesgender' => $valuesgender,

            'labelkawin' => $labelkawin,
            'valueskawin' => $valueskawin,
        ]);
    }


    public function laki()
    {
        $data_induk = DB::table('datainduk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
            ->where('j_kelamin', '=', 'Laki-laki')
            ->where('tgl_lahir', '>=', Carbon::now()->subYear(30)->toDateString())
            ->where('tgl_lahir', '<=', Carbon::now()->subYear(16)->toDateString())
            ->get();

        return view('/red_kt/laki', ['data_induk' => $data_induk]);
    }


    public function perempuan()
    {
        $data_induk = DB::table('datainduk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
            ->where('j_kelamin', '=', 'Perempuan')
            ->where('tgl_lahir', '>=', Carbon::now()->subYear(30)->toDateString())
            ->where('tgl_lahir', '<=', Carbon::now()->subYear(16)->toDateString())
            ->get();

        return view('/red_kt/perempuan', ['data_induk' => $data_induk]);
    }


    public function anggotakt()
    {
        $data_induk = DB::table('datainduk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
            ->where('is_kt', '=', 'Ya')
            ->where('tgl_lahir', '>=', Carbon::now()->subYear(30)->toDateString())
            ->where('tgl_lahir', '<=', Carbon::now()->subYear(16)->toDateString())
            ->get();

        $data_induk = $data_induk->map(function ($row) {
            $kalkulasi = Carbon::parse($row->tgl_lahir)->age;
            $row->usia = $kalkulasi;
            return $row;
        });

        return view('/red_kt/karangtaruna', ['data_induk' => $data_induk]);
    }


    public function keahliankt(Request $request)
    {
        // script untuk filter
        $_SESSION['no_rt'] = isset($_GET['no_rt']) ? $request->no_rt : '';
        // $_SESSION['no_rw'] = isset($_GET['no_rw']) ? $request->no_rw : '';
        $_SESSION['keahlian'] = isset($_GET['keahlian']) ? $request->keahlian : '';
        $_SESSION['level'] = isset($_GET['level']) ? $request->level : '';

        $keahlian =  DB::table('data_keahlian_warga')
            ->leftJoin('datainduk', 'datainduk.kd_induk', '=', 'data_keahlian_warga.kd_induk')
            ->leftJoin('md_keahlian', 'md_keahlian.kd_keahlian', '=', 'data_keahlian_warga.kd_keahlian')
            ->select(
                'data_keahlian_warga.id',
                'data_keahlian_warga.kd_keahlian',
                'datainduk.kd_induk',
                'datainduk.kode_kk',
                'datainduk.no_ktp',
                'datainduk.kd_rt',
                'datainduk.kd_agama',
                'datainduk.nama',
                'datainduk.nm_panggilan',
                'md_keahlian.nama_keahlian',
                'data_keahlian_warga.is_sertifikat',
                'data_keahlian_warga.level_sertifikat',
                'data_keahlian_warga.deskripsi_sertifikat'
            )
            ->where('tgl_lahir', '>=', Carbon::now()->subYear(30)->toDateString())
            ->where('tgl_lahir', '<=', Carbon::now()->subYear(16)->toDateString())
            ->where('datainduk.kd_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
            ->where('data_keahlian_warga.kd_keahlian', 'like', '%' . $_SESSION['keahlian'] . '%')
            ->where('data_keahlian_warga.level_sertifikat', 'like', '%' . $_SESSION['level'] . '%')
            ->paginate(1000);
        // script untuk pagination biar ketika difilter masih bisa jalan paginationnya
        $keahlian->withPath('/red_kt/keahlian?no_rt=&keahlian=&level=');


        // script chart
        $label =  DB::table('data_keahlian_warga')
        ->leftJoin('datainduk', 'datainduk.kd_induk', '=', 'data_keahlian_warga.kd_induk')
        ->leftJoin('md_keahlian', 'md_keahlian.kd_keahlian', '=', 'data_keahlian_warga.kd_keahlian')
        ->select(
            'data_keahlian_warga.kd_keahlian',
            'datainduk.kd_rt',
            'datainduk.kd_agama',
            'md_keahlian.nama_keahlian',
            'data_keahlian_warga.level_sertifikat'
        )
        ->where('tgl_lahir', '>=', Carbon::now()->subYear(30)->toDateString())
        ->where('tgl_lahir', '<=', Carbon::now()->subYear(16)->toDateString())
        ->where('datainduk.kd_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('data_keahlian_warga.kd_keahlian', 'like', '%' . $_SESSION['keahlian'] . '%')
        ->where('data_keahlian_warga.level_sertifikat', 'like', '%' . $_SESSION['level'] . '%')
        ->groupBy('data_keahlian_warga.kd_keahlian')
        ->pluck('md_keahlian.nama_keahlian');

        $values =  DB::table('data_keahlian_warga')
        ->leftJoin('datainduk', 'datainduk.kd_induk', '=', 'data_keahlian_warga.kd_induk')
        ->leftJoin('md_keahlian', 'md_keahlian.kd_keahlian', '=', 'data_keahlian_warga.kd_keahlian')
        ->select(
            DB::raw('count(data_keahlian_warga.kd_keahlian) as jumlah'),
            'data_keahlian_warga.kd_keahlian',
            'datainduk.kd_rt',
            'datainduk.kd_agama',
            'md_keahlian.nama_keahlian',
            'data_keahlian_warga.level_sertifikat'
        )
        ->where('tgl_lahir', '>=', Carbon::now()->subYear(30)->toDateString())
        ->where('tgl_lahir', '<=', Carbon::now()->subYear(16)->toDateString())
        ->where('datainduk.kd_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('data_keahlian_warga.kd_keahlian', 'like', '%' . $_SESSION['keahlian'] . '%')
        ->where('data_keahlian_warga.level_sertifikat', 'like', '%' . $_SESSION['level'] . '%')
        ->groupBy('data_keahlian_warga.kd_keahlian')
        ->pluck('jumlah');

        // script dropdown filter
        $md_rt = DB::table('md_rt')->get();
        $ahli = DB::table('md_keahlian')->get();
        $level = DB::table('data_keahlian_warga')->get();
        
        return view('/red_kt/keahlian', [
            'keahlian' => $keahlian,
            'label' => $label,
            'values' => $values,
            'md_rt' => $md_rt,
            'ahli' => $ahli,
            'level' => $level,
        ]);

    }





    // ==================================================================================================================================================
    // -------------------------------------RED TAKMIR---------------------------------------------------------------------------------------


    

    public function hometakmir()
    {
        $manula_laki = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->where('datainduk.tgl_lahir', '<=', Carbon::now()->subYear(55)->toDateString())
        ->where('datainduk.j_kelamin', 'like', 'Laki-laki')
        ->count();
        $dewasa_laki = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->where('datainduk.tgl_lahir', '>=', Carbon::now()->subYear(55)->toDateString())
        ->where('datainduk.tgl_lahir', '<=', Carbon::now()->subYear(30)->toDateString())
        ->where('datainduk.j_kelamin', 'like', 'Laki-laki')
        ->count();
        $remaja_laki = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->where('datainduk.tgl_lahir', '>=', Carbon::now()->subYear(30)->toDateString())
        ->where('datainduk.tgl_lahir', '<=', Carbon::now()->subYear(16)->toDateString())
        ->where('datainduk.j_kelamin', 'like', 'Laki-laki')
        ->count();
        $anak_laki = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->where('datainduk.tgl_lahir', '>=', Carbon::now()->subYear(16)->toDateString())
        ->where('datainduk.j_kelamin', 'like', 'Laki-laki')
        ->count();

        $manula_pr = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->where('datainduk.tgl_lahir', '<=', Carbon::now()->subYear(55)->toDateString())
        ->where('datainduk.j_kelamin', 'like', 'Perempuan')
        ->count();
        $dewasa_pr = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->where('datainduk.tgl_lahir', '>=', Carbon::now()->subYear(55)->toDateString())
        ->where('datainduk.tgl_lahir', '<=', Carbon::now()->subYear(30)->toDateString())
        ->where('datainduk.j_kelamin', 'like', 'Perempuan')
        ->count();
        $remaja_pr = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->where('datainduk.tgl_lahir', '>=', Carbon::now()->subYear(30)->toDateString())
        ->where('datainduk.tgl_lahir', '<=', Carbon::now()->subYear(16)->toDateString())
        ->where('datainduk.j_kelamin', 'like', 'Perempuan')
        ->count();
        $anak_pr = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->where('datainduk.tgl_lahir', '>=', Carbon::now()->subYear(16)->toDateString())
        ->where('datainduk.j_kelamin', 'like', 'Perempuan')
        ->count();

                 
            $laki = [$manula_laki, $dewasa_laki, $remaja_laki, $anak_laki];
            $pr = [$manula_pr, $dewasa_pr, $remaja_pr, $anak_pr];
        

        $laki = json_encode($laki);
        $pr = json_encode($pr);



        //counter total warga-----------------------------------------------------------
        $warga = DB::table('datainduk')
        
        ->count();
        

        //counter data kk------------------------------------------------------------------------
        $data_kk = DB::table('data_kk')
            ->leftJoin('datainduk', 'datainduk.no_kk', '=', 'data_kk.no_kk')
            ->where('datainduk.status_hub_kk', '=', 'Kepala Keluarga')
            ->count();




        //counter rumah---------------------------------------------------------------------------
        $rumah = DB::table('md_rumah')
            ->count();


        //counter goldar-----------------------------------------------------------------
        $gol_darah = DB::table('datainduk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
            ->leftJoin('data_kk', 'data_kk.no_kk', '=', 'datainduk.no_kk')
            ->select(
                'md_rt.no_rw', 
                'md_rt.no_rt',
                'data_kk.kd_rumah', 
                'datainduk.kd_rt', 
                'datainduk.nama', 
                'datainduk.nm_panggilan', 
                'datainduk.gol_darah'
            )

            ->groupBy('datainduk.gol_darah')
            ->get();

        $g = array();
        foreach ($gol_darah as $data) {
            if ($data->gol_darah == 1) {
                $label =  'A';
            } elseif ($data->gol_darah == 2) {
                $label =  'B';
            } elseif ($data->gol_darah == 3) {
                $label =  'O';
            } else {
                $label =  'AB';
            }
            $g[] = $label;
        }
        $labelgoldar = json_encode($g);

        $valuesgoldar = DB::table('datainduk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
            ->leftJoin('data_kk', 'data_kk.no_kk', '=', 'datainduk.no_kk')
            ->select(
                DB::raw('count(datainduk.gol_darah) as jumlah'),
                'md_rt.no_rw', 
                'md_rt.no_rt',
                'data_kk.kd_rumah', 
                'datainduk.kd_rt', 
                'datainduk.nama', 
                'datainduk.nm_panggilan', 
                'datainduk.gol_darah'
            )

            ->groupBy('datainduk.gol_darah')
            ->pluck('jumlah');
        $valuesgoldar = json_encode($valuesgoldar);



        //counter level ekonomi----------------------------------------------------------------------------------------------
        $labelekonomi = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->leftJoin('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'datainduk.kd_level_ekonomi')
        ->groupBy('md_level_ekonomi.kd_level_ekonomi')
        ->pluck('md_level_ekonomi.nama_level');
        $labelekonomi = json_encode($labelekonomi);

        $valuesekonomi = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->leftJoin('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'datainduk.kd_level_ekonomi')
        ->select(
            DB::raw('count(datainduk.kd_level_ekonomi) as jumlah'),
        )
        ->groupBy('md_level_ekonomi.kd_level_ekonomi')
        ->pluck('jumlah');
        $valuesekonomi = json_encode($valuesekonomi);



        //counter ibadah----------------------------------------------------------------------------
        $ibadah = DB::table('datainduk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
            ->leftJoin('md_agama', 'md_agama.kd_agama', '=', 'datainduk.kd_agama')
            ->get();


        $waktu = 0;
        $jamaah = 0;
        $fitrah = 0;
        $mal = 0;
        $qurban = 0;
        $haji = 0;
        $umrah = 0;
        foreach ($ibadah as $data) {
            if ($data->is_5waktu == 'Ya') {
                $waktu += 1;
            }
            if ($data->is_jamaah == 'Ya') {
                $jamaah +=  1;
            }
            if ($data->is_zakat_fitrah == 'Ya') {
                $fitrah +=  1;
            }
            if ($data->is_zakat_mal == 'Ya') {
                $mal +=  1;
            }
            if ($data->is_qurban == 'Ya') {
                $qurban +=  1;
            }
            if ($data->is_haji == 'Ya') {
                $haji +=  1;
            }
            if ($data->is_umrah == 'Ya') {
                $umrah +=  1;
            }
        }

        $valuesibadah = [$waktu, $jamaah, $fitrah, $mal, $qurban, $haji, $umrah];
        $valuesibadah = json_encode($valuesibadah);

        
        //counter kemampuan baca----------------------------------------------------------------------------------
        $baca = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        
        ->get();

        $latin = 0;
        $hijaiyah = 0;
        $iqra = 0;
        $quran = 0;
        foreach ($baca as $data) {
            if ($data->is_latin == 'Ya') {
                $latin += 1;
            }
            if ($data->is_hijaiyah == 'Ya') {
                $hijaiyah +=  1;
            }
            if ($data->is_iqra == 'Ya') {
                $iqra +=  1;
            } 
            if($data->is_quran == 'Ya'){
                $quran +=  1;
            }
        }

        $valuesbaca = [$latin, $hijaiyah, $iqra, $quran];
        $valuesbaca = json_encode($valuesbaca);


        //counter pendidikan----------------------------------------------------------------------------------------------------
        $labelpdd = DB::table('datainduk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
            ->leftJoin('md_pendidikan', 'md_pendidikan.kd_pendidikan', '=', 'datainduk.kd_pendidikan')
            ->select(
                DB::raw('count(datainduk.kd_pendidikan) as jumlah'),
                'md_pendidikan.nama_jenjang'
            )

            ->groupBy('datainduk.kd_pendidikan')
            ->orderBy('jumlah', 'desc')
            ->pluck('md_pendidikan.nama_jenjang');

        $valuespdd = DB::table('datainduk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
            ->leftJoin('md_pendidikan', 'md_pendidikan.kd_pendidikan', '=', 'datainduk.kd_pendidikan')
            ->select(
                DB::raw('count(datainduk.kd_pendidikan) as jumlah'),
            )

            ->groupBy('datainduk.kd_pendidikan')
            ->orderBy('jumlah', 'desc')
            ->pluck('jumlah');


        //counter pekerjaan--------------------------------------------------------------------------------------------
        $labelpkj = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->leftJoin('md_pekerjaan', 'md_pekerjaan.kd_pekerjaan', '=', 'datainduk.kd_pekerjaan')
        ->leftJoin('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'datainduk.kd_level_ekonomi')
        ->select(
            DB::raw('count(md_pekerjaan.nama_pekerjaan) as jumlah'),
            'md_pekerjaan.nama_pekerjaan'
        )
        ->groupBy('md_pekerjaan.nama_pekerjaan')
        ->orderBy('jumlah', 'desc')
        ->pluck('md_pekerjaan.nama_pekerjaan');

        $valuespkj = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->leftJoin('md_pekerjaan', 'md_pekerjaan.kd_pekerjaan', '=', 'datainduk.kd_pekerjaan')
        ->leftJoin('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'datainduk.kd_level_ekonomi')
        ->select(
            DB::raw('count(md_pekerjaan.nama_pekerjaan) as jumlah'),
        )
        ->groupBy('md_pekerjaan.nama_pekerjaan')
        ->orderBy('jumlah', 'desc')
        ->pluck('jumlah');


        //get
        $data = DB::table('datainduk')
            ->select('tgl_lahir') 
            ->get();

        $keahlian = DB::table('data_keahlian_warga')
        ->leftJoin('datainduk', 'datainduk.kd_induk', '=', 'data_keahlian_warga.kd_induk')
        ->leftJoin('md_keahlian', 'md_keahlian.kd_keahlian', '=', 'data_keahlian_warga.kd_keahlian')
        // ->leftJoin('md_rt', 'datainduk.kd_rt', '=', 'md_rt.kd_rt')
        ->select(

            'data_keahlian_warga.id',
            'data_keahlian_warga.kd_keahlian',
            'datainduk.kd_induk',
            'datainduk.no_kk',
            'datainduk.no_ktp',
            'datainduk.kd_rt',
            'datainduk.kd_agama',
            // 'md_rt.no_rw',
            'datainduk.nama',
            'datainduk.nm_panggilan',
            'md_keahlian.nama_keahlian',
            'data_keahlian_warga.is_sertifikat',
            'data_keahlian_warga.level_sertifikat',
            'data_keahlian_warga.deskripsi_sertifikat'
        )
        
        ->get();

        $level_eko = DB::table('datainduk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
            ->leftJoin('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'datainduk.kd_level_ekonomi')
            ->get();

        $goldar = DB::table('datainduk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
            ->leftJoin('md_rumah', 'md_rumah.kd_rt', '=', 'datainduk.kd_rt')
            ->select('md_rt.no_rw', 'md_rt.no_rt', 'md_rumah.no_rumah', 'datainduk.nama', 'datainduk.nm_panggilan', 'datainduk.gol_darah')
            ->get();

        $agama = DB::table('datainduk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
            ->leftJoin('md_agama', 'md_agama.kd_agama', '=', 'datainduk.kd_agama')
            ->get();

        $pekerjaan = DB::table('datainduk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
            ->leftJoin('md_pekerjaan', 'md_pekerjaan.kd_pekerjaan', '=', 'datainduk.kd_pekerjaan')
            ->leftJoin('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'datainduk.kd_level_ekonomi')
            ->get();

    



        return view('/red_takmir/home', [
            
            "warga" => $warga,
            "data_kk" => $data_kk,
            
            'laki' => $laki,
            'pr' => $pr,

            "rumah" => $rumah,

            'labelgoldar' => $labelgoldar,
            'valuesgoldar' => $valuesgoldar,


            'valuesibadah' => $valuesibadah,

            'valuesbaca' => $valuesbaca,


            'labelekonomi' => $labelekonomi,
            'valuesekonomi' => $valuesekonomi,

            'labelpdd' => $labelpdd,
            'valuespdd' => $valuespdd,

            'labelpkj' => $labelpkj,
            'valuespkj' => $valuespkj,
        ]);
    }






    public function wargatakmir(Request $request)
    {

        $_SESSION['no_rt'] = isset($_GET['no_rt']) ? $request->no_rt : '';
        $_SESSION['no_rw'] = isset($_GET['no_rw']) ? $request->no_rw : '';
        $_SESSION['kelamin'] = isset($_GET['kelamin']) ? $request->kelamin : '';
        $_SESSION['mukim'] = isset($_GET['mukim']) ? $request->mukim : '';

        $manula_laki = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->where('datainduk.tgl_lahir', '<=', Carbon::now()->subYear(55)->toDateString())       
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('datainduk.j_kelamin', 'like', 'Laki-laki')
        ->where('datainduk.status_mukim', 'like', $_SESSION['mukim'] . '%')
        ->count();
        $dewasa_laki = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->where('datainduk.tgl_lahir', '>=', Carbon::now()->subYear(55)->toDateString())
        ->where('datainduk.tgl_lahir', '<=', Carbon::now()->subYear(30)->toDateString())
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('datainduk.j_kelamin', 'like', 'Laki-laki')
        ->where('datainduk.status_mukim', 'like', $_SESSION['mukim'] . '%')
        ->count();
        $remaja_laki = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->where('datainduk.tgl_lahir', '>=', Carbon::now()->subYear(30)->toDateString())
        ->where('datainduk.tgl_lahir', '<=', Carbon::now()->subYear(16)->toDateString())
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('datainduk.j_kelamin', 'like', 'Laki-laki')
        ->where('datainduk.status_mukim', 'like', $_SESSION['mukim'] . '%')
        ->count();
        $anak_laki = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->where('datainduk.tgl_lahir', '>=', Carbon::now()->subYear(16)->toDateString())
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('datainduk.j_kelamin', 'like', 'Laki-laki')
        ->where('datainduk.status_mukim', 'like', $_SESSION['mukim'] . '%')
        ->count();

        $manula_pr = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->where('datainduk.tgl_lahir', '<=', Carbon::now()->subYear(55)->toDateString())
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('datainduk.j_kelamin', 'like', 'Perempuan')
        ->where('datainduk.status_mukim', 'like', $_SESSION['mukim'] . '%')
        ->count();
        $dewasa_pr = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->where('datainduk.tgl_lahir', '>=', Carbon::now()->subYear(55)->toDateString())
        ->where('datainduk.tgl_lahir', '<=', Carbon::now()->subYear(30)->toDateString())
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('datainduk.j_kelamin', 'like', 'Perempuan')
        ->where('datainduk.status_mukim', 'like', $_SESSION['mukim'] . '%')
        ->count();
        $remaja_pr = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->where('datainduk.tgl_lahir', '>=', Carbon::now()->subYear(30)->toDateString())
        ->where('datainduk.tgl_lahir', '<=', Carbon::now()->subYear(16)->toDateString())
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('datainduk.j_kelamin', 'like', 'Perempuan')
        ->where('datainduk.status_mukim', 'like', $_SESSION['mukim'] . '%')
        ->count();
        $anak_pr = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->where('datainduk.tgl_lahir', '>=', Carbon::now()->subYear(16)->toDateString())
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('datainduk.j_kelamin', 'like', 'Perempuan')
        ->where('datainduk.status_mukim', 'like', $_SESSION['mukim'] . '%')
        ->count();

        if ($_SESSION['kelamin'] == 'Laki-laki') {
            $pr = [0, 0, 0, 0];
            $laki = [$manula_laki, $dewasa_laki, $remaja_laki, $anak_laki];
        }elseif($_SESSION['kelamin'] == 'Perempuan'){
            $laki = [0, 0, 0, 0];
            $pr = [$manula_pr, $dewasa_pr, $remaja_pr, $anak_pr];
        }else{            
            $laki = [$manula_laki, $dewasa_laki, $remaja_laki, $anak_laki];
            $pr = [$manula_pr, $dewasa_pr, $remaja_pr, $anak_pr];
        }

        $laki = json_encode($laki);
        $pr = json_encode($pr);

        $counternilai = [];
        $counternilai['kode'] = [];
        $counternilai['kode']['nilai'] = 0;

        $warga = DB::table('datainduk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
            ->select('*')

            ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
            ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
            ->where('datainduk.j_kelamin', 'like', '%' . $_SESSION['kelamin'] . '%')
            ->where('datainduk.status_mukim', 'like', $_SESSION['mukim'] . '%')
            ->orderBy('is_5waktu', 'DESC')
            ->orderBy('is_jamaah', 'DESC')
            ->orderBy('is_zakat_fitrah', 'DESC')
            ->orderBy('is_zakat_mal', 'DESC')
            ->orderBy('is_qurban', 'DESC')
            ->orderBy('is_haji', 'DESC')
            ->orderBy('is_umrah', 'DESC')
            /*** TAMBAHIN SAMPAI IS IS_UMRAH ***/
            ->paginate(1000);
            
            
            $counterNilai = [];
            foreach($warga as $row){
                $nilai = 0;

                $limawaktu = DB::table('datainduk')
                    ->selectRaw('kd_induk, COUNT(is_5waktu)')
                    ->where('is_5waktu', '=', 'Ya')
                    ->whereIn('is_5waktu',["Ya"])
                    ->groupBy('kd_induk')
                    ->get();

                $jamaah = DB::table('datainduk')
                    ->selectRaw('kd_induk, COUNT(is_jamaah) as nilai')
                    ->where('kd_induk', '=', $row->kd_induk)
                    ->whereIn('is_jamaah',["Ya"])
                    ->groupBy('kd_induk')
                    ->get();

                $zakatfitrah = DB::Table('datainduk')
                    ->selectRaw('kd_induk, COUNT(is_zakat_fitrah) as nilai')
                    ->where('kd_induk', '=', $row->kd_induk)
                    ->whereIn('is_zakat_fitrah',["Ya"])
                    ->groupBy('kd_induk')
                    ->get();
                
                $zakatmal = DB::Table('datainduk')
                    ->selectRaw('kd_induk, COUNT(is_zakat_mal) as nilai')
                    ->where('kd_induk', '=', $row->kd_induk)
                    ->whereIn('is_zakat_mal',["Ya"])
                    ->groupBy('kd_induk')
                    ->get();

                $qurban = DB::Table('datainduk')
                    ->selectRaw('kd_induk, COUNT(is_qurban) as nilai')
                    ->where('kd_induk', '=', $row->kd_induk)
                    ->whereIn('is_qurban',["Ya"])
                    ->groupBy('kd_induk')
                    ->get();

                $haji = DB::Table('datainduk')
                    ->selectRaw('kd_induk, COUNT(is_haji) as nilai')
                    ->where('kd_induk', '=', $row->kd_induk)
                    ->whereIn('is_haji',["Ya"])
                    ->groupBy('kd_induk')
                    ->get();

                $umrah = DB::Table('datainduk')
                    ->selectRaw('kd_induk, COUNT(is_umrah) as nilai')
                    ->where('kd_induk', '=', $row->kd_induk)
                    ->whereIn('is_umrah',["Ya"])
                    ->groupBy('kd_induk')
                    ->get();

                if($row->is_5waktu == "Ya"){
                    $nilai++;
                }
                if($row->is_jamaah == "Ya"){
                    $nilai++;
                }
                if($row->is_zakat_fitrah == "Ya"){
                    $nilai++;
                }
                if($row->is_zakat_mal == "Ya"){
                    $nilai++;
                }
                if($row->is_quran == "Ya"){
                    $nilai++;
                }
                if($row->is_haji == "Ya"){
                    $nilai++;
                }
                if($row->is_umrah == "Ya"){
                    $nilai++;
                }

                /*** TAMBAHIN SAMPAI IS IS_UMRAH ***/

                // if($row->is_quran == 'Ya'){
                //     $counternilai['kode'] += 1;
                // }
                // if($row->is_5waktu == 'Ya'){
                //     $counternilai['kode'] += 1;
                // }
                // if($row->is_jamaah == 'Ya'){
                //     $counternilai['kode'] += 1;
                // }
                // if($row->is_zakat_fitrah == 'Ya'){
                //     $counternilai['kode'] += 1;
                // }
                // if($row->is_zakat_mal == 'Ya'){
                //     $counternilai['kode'] += 1;
                // }
                // if($row->is_qurban == 'Ya'){
                //     $counternilai['kode'] += 1;
                // }
                // if($row->is_haji == 'Ya'){
                //     $counternilai['kode'] += 1;
                // }
                // if($row->is_umrah == 'Ya'){
                //     $counternilai['kode'] += 1;
                // }
                $counterNilai[$row->kd_induk] = $nilai;
            }
        $warga->withPath('/red_takmir/warga?no_rt=&no_rw=&kelamin=&mukim=');

        

        

        $label = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('datainduk.j_kelamin', 'like', '%' . $_SESSION['kelamin'] . '%')
        ->where('datainduk.status_mukim', 'like', $_SESSION['mukim'] . '%')
        ->groupBy('datainduk.status_mukim')
        ->pluck('datainduk.status_mukim');

        $values = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->select(
            DB::raw('count(datainduk.status_mukim) as jumlah'),
        )
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('datainduk.j_kelamin', 'like', '%' . $_SESSION['kelamin'] . '%')
        ->where('datainduk.status_mukim', 'like', $_SESSION['mukim'] . '%')
        ->groupBy('datainduk.status_mukim')
        ->pluck('jumlah');
        
        // script dropdown filter
        $md_rt = DB::table('data_kk')->groupBy('no_rt')->get();
        $md_rw = DB::table('data_kk')->groupBy('no_rw')->get();
        // dd($counterNilai);
        // return;
        return view('/red_takmir/warga', [
            'warga' => $warga,
            'md_rt' => $md_rt,
            'md_rw' => $md_rw,
            'label' => $label,
            'values' => $values,
            'laki' => $laki,
            'pr' => $pr,
            'nilai' => $counterNilai
        ]);

    }





    public function datakktakmir(Request $request)
    {
        // script untuk filter
        $_SESSION['no_rt'] = isset($_GET['no_rt']) ? $request->no_rt : '';
        $_SESSION['no_rw'] = isset($_GET['no_rw']) ? $request->no_rw : '';
        $_SESSION['level_ekonomi'] = isset($_GET['level_ekonomi']) ? $request->level_ekonomi : '';

        $kk = Data_kk::Join('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'data_kk.kd_level_ekonomi')
            ->leftJoin('datainduk', 'datainduk.no_kk', '=', 'data_kk.no_kk')
            ->where('datainduk.status_hub_kk', '=', 'Kepala Keluarga')

            ->select(
                'data_kk.no_kk',
                'data_kk.kode_kk', 
                'data_kk.nm_kk', 
                'data_kk.no_rw', 
                'data_kk.no_rt', 
                'data_kk.kd_rumah',
                'data_kk.kd_level_ekonomi', 
                'md_level_ekonomi.nama_level', 
                'data_kk.keterangan'
            )
            ->where('data_kk.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
            ->where('data_kk.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
            ->where('data_kk.kd_level_ekonomi', 'like', '%' . $_SESSION['level_ekonomi'] . '%')
            ->paginate(1000);

        $kk->withPath('/red_takmir/datakk?no_rt=&no_rw=&level_ekonomi=');


        //chart lv ekonomi
        $label = Data_kk::Join('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'data_kk.kd_level_ekonomi')
            ->leftJoin('datainduk', 'datainduk.no_kk', '=', 'data_kk.no_kk')
            ->where('datainduk.status_hub_kk', '=', 'Kepala Keluarga')

            ->select(
                'data_kk.no_rw', 
                'data_kk.no_rt',
                'data_kk.kd_level_ekonomi',
                'md_level_ekonomi.nama_level'
            )
            ->where('data_kk.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
            ->where('data_kk.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
            ->where('data_kk.kd_level_ekonomi', 'like', '%' . $_SESSION['level_ekonomi'] . '%')
            ->groupBy('md_level_ekonomi.kd_level_ekonomi')
            ->pluck('md_level_ekonomi.nama_level');

        $values = Data_kk::Join('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'data_kk.kd_level_ekonomi')
            ->leftJoin('datainduk', 'datainduk.no_kk', '=', 'data_kk.no_kk')
            ->where('datainduk.status_hub_kk', '=', 'Kepala Keluarga')

            ->select(
                DB::raw('count(datainduk.gol_darah) as jumlah'),      
                'data_kk.no_rw',
                'data_kk.no_rt',
                'data_kk.kd_level_ekonomi',
                'md_level_ekonomi.nama_level'
            )
            ->where('data_kk.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
            ->where('data_kk.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
            ->where('data_kk.kd_level_ekonomi', 'like', '%' . $_SESSION['level_ekonomi'] . '%')
            ->groupBy('md_level_ekonomi.kd_level_ekonomi')
            ->pluck('jumlah');
        // dd($values);

        // script dropdown filter
        $md_rt = DB::table('data_kk')->groupBy('no_rt')->get();
        $md_rw = DB::table('data_kk')->groupBy('no_rw')->get();
        $level_ekonomi = DB::table('md_level_ekonomi')->get();
        
        return view('/red_takmir/datakk', [
            'kk' => $kk,
            'label' => $label,
            'values' => $values,
            'md_rt' => $md_rt,
            'md_rw' => $md_rw,
            'level_ekonomi' => $level_ekonomi,
        ]);
    }



    public function ekonomitakmir(Request $request)
    {
        $_SESSION['no_rt'] = isset($_GET['no_rt']) ? $request->no_rt : '';
        $_SESSION['no_rw'] = isset($_GET['no_rw']) ? $request->no_rw : '';
        $_SESSION['level_ekonomi'] = isset($_GET['level_ekonomi']) ? $request->level_ekonomi : '';
        $_SESSION['mukim'] = isset($_GET['mukim']) ? $request->mukim : '';

        $ekonomi = DB::table('datainduk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
            ->leftJoin('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'datainduk.kd_level_ekonomi')

            ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
            ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
            ->where('md_level_ekonomi.kd_level_ekonomi', 'like', '%' . $_SESSION['level_ekonomi'] . '%')
            ->where('datainduk.status_mukim', 'like', $_SESSION['mukim'] . '%')
            ->paginate(1000);
        $ekonomi->withPath('/red_takmir/ekonomi?no_rt=&no_rw=&level_ekonomi=&mukim=');

        $label = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->leftJoin('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'datainduk.kd_level_ekonomi')
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('md_level_ekonomi.kd_level_ekonomi', 'like', '%' . $_SESSION['level_ekonomi'] . '%')
        ->where('datainduk.status_mukim', 'like', $_SESSION['mukim'] . '%')
        ->groupBy('md_level_ekonomi.kd_level_ekonomi')
        ->pluck('md_level_ekonomi.nama_level');

        $values = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->leftJoin('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'datainduk.kd_level_ekonomi')
        ->select(
            DB::raw('count(datainduk.kd_level_ekonomi) as jumlah'),
        )
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('md_level_ekonomi.kd_level_ekonomi', 'like', '%' . $_SESSION['level_ekonomi'] . '%')
        ->where('datainduk.status_mukim', 'like', $_SESSION['mukim'] . '%')
        ->groupBy('md_level_ekonomi.kd_level_ekonomi')
        ->pluck('jumlah');

        $label2 = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->leftJoin('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'datainduk.kd_level_ekonomi')
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('md_level_ekonomi.kd_level_ekonomi', 'like', '%' . $_SESSION['level_ekonomi'] . '%')
        ->where('datainduk.status_mukim', 'like', $_SESSION['mukim'] . '%')
        ->groupBy('datainduk.status_mukim')
        ->pluck('datainduk.status_mukim');

        $values2 = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->leftJoin('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'datainduk.kd_level_ekonomi')
        ->select(
            DB::raw('count(datainduk.status_mukim) as jumlah'),
        )
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('md_level_ekonomi.kd_level_ekonomi', 'like', '%' . $_SESSION['level_ekonomi'] . '%')
        ->where('datainduk.status_mukim', 'like', $_SESSION['mukim'] . '%')
        ->groupBy('datainduk.status_mukim')
        ->pluck('jumlah');

        // script dropdown filter
        $md_rt = DB::table('md_rt')->get();
        $md_rw = DB::table('md_rw')->get();
        $level = DB::table('md_level_ekonomi')->get();
        // $label = DB::table('md_level_ekonomi')->pluck('nama_level');

        return view('/red_takmir/ekonomi', [
            'ekonomi' => $ekonomi,
            'md_rt' => $md_rt,
            'md_rw' => $md_rw,
            'level' => $level,
            'label' => $label,
            'label2' => $label2,
            'values' => $values,
            'values2' => $values2,
        ]);
    }

    public function pekerjaantakmir(Request $request)
    {
        $_SESSION['no_rt'] = isset($_GET['no_rt']) ? $request->no_rt : '';
        $_SESSION['no_rw'] = isset($_GET['no_rw']) ? $request->no_rw : '';
        $_SESSION['pekerjaan'] = isset($_GET['pekerjaan']) ? $request->pekerjaan : '';
        $_SESSION['level_ekonomi'] = isset($_GET['level_ekonomi']) ? $request->level_ekonomi : '';

        $join = DB::table('datainduk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
            ->leftJoin('md_pekerjaan', 'md_pekerjaan.kd_pekerjaan', '=', 'datainduk.kd_pekerjaan')
            ->leftJoin('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'datainduk.kd_level_ekonomi')

            ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
            ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
            ->where('md_pekerjaan.nama_pekerjaan', 'like', '%' . $_SESSION['pekerjaan'] . '%')
            ->where('md_level_ekonomi.kd_level_ekonomi', 'like', '%' . $_SESSION['level_ekonomi'] . '%')
            ->paginate(1000);

        $join->withPath('/red_takmir/pekerjaan?no_rt=&no_rw=&pekerjaan=&level_ekonomi=');


        //pekerjaan chart
        $label = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->leftJoin('md_pekerjaan', 'md_pekerjaan.kd_pekerjaan', '=', 'datainduk.kd_pekerjaan')
        ->leftJoin('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'datainduk.kd_level_ekonomi')
        ->select(
            DB::raw('count(md_pekerjaan.nama_pekerjaan) as jumlah'),
            'md_pekerjaan.nama_pekerjaan'
        )
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('md_pekerjaan.nama_pekerjaan', 'like', '%' . $_SESSION['pekerjaan'] . '%')
        ->where('md_level_ekonomi.kd_level_ekonomi', 'like', '%' . $_SESSION['level_ekonomi'] . '%')
        ->groupBy('md_pekerjaan.nama_pekerjaan')
        ->orderBy('jumlah', 'desc')
        ->pluck('md_pekerjaan.nama_pekerjaan');

        $values = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->leftJoin('md_pekerjaan', 'md_pekerjaan.kd_pekerjaan', '=', 'datainduk.kd_pekerjaan')
        ->leftJoin('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'datainduk.kd_level_ekonomi')
        ->select(
            DB::raw('count(md_pekerjaan.nama_pekerjaan) as jumlah'),
        )
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('md_pekerjaan.nama_pekerjaan', 'like', '%' . $_SESSION['pekerjaan'] . '%')
        ->where('md_level_ekonomi.kd_level_ekonomi', 'like', '%' . $_SESSION['level_ekonomi'] . '%')
        ->groupBy('md_pekerjaan.nama_pekerjaan')
        ->orderBy('jumlah', 'desc')
        ->pluck('jumlah');


        //level ekonomi chart
        $label2 = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->leftJoin('md_pekerjaan', 'md_pekerjaan.kd_pekerjaan', '=', 'datainduk.kd_pekerjaan')
        ->leftJoin('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'datainduk.kd_level_ekonomi')
        ->select(
            DB::raw('count(md_pekerjaan.nama_pekerjaan) as jumlah'),
            'md_level_ekonomi.nama_level'
        )
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('md_pekerjaan.nama_pekerjaan', 'like', '%' . $_SESSION['pekerjaan'] . '%')
        ->where('md_level_ekonomi.kd_level_ekonomi', 'like', '%' . $_SESSION['level_ekonomi'] . '%')
        ->groupBy('md_level_ekonomi.kd_level_ekonomi')
        ->pluck('md_level_ekonomi.nama_level');

        $values2 = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->leftJoin('md_pekerjaan', 'md_pekerjaan.kd_pekerjaan', '=', 'datainduk.kd_pekerjaan')
        ->leftJoin('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'datainduk.kd_level_ekonomi')
        ->select(
            DB::raw('count(md_pekerjaan.nama_pekerjaan) as jumlah'),
            'md_level_ekonomi.nama_level'
        )
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('md_pekerjaan.nama_pekerjaan', 'like', '%' . $_SESSION['pekerjaan'] . '%')
        ->where('md_level_ekonomi.kd_level_ekonomi', 'like', '%' . $_SESSION['level_ekonomi'] . '%')
        ->groupBy('md_level_ekonomi.kd_level_ekonomi')
        ->pluck('jumlah');

        // script dropdown filter
        $md_rt = DB::table('md_rt')->get();
        $md_rw = DB::table('md_rw')->get();
        $kerja = DB::table('md_pekerjaan')->get();
        $level = DB::table('md_level_ekonomi')->get();

        return view('/red_takmir/pekerjaan', [
            'pekerjaan' => $join,
            'label' => $label,
            'values' => $values,
            'label2' => $label2,
            'values2' => $values2,
            'md_rt' => $md_rt,
            'md_rw' => $md_rw,
            'kerja' => $kerja,
            'level' => $level,
        ]);
    }

    public function pendidikantakmir(Request $request)
    {
        $_SESSION['no_rt'] = isset($_GET['no_rt']) ? $request->no_rt : '';
        $_SESSION['no_rw'] = isset($_GET['no_rw']) ? $request->no_rw : '';
        $_SESSION['pendidikan'] = isset($_GET['pendidikan']) ? $request->pendidikan : '';

        $join = DB::table('datainduk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
            ->leftJoin('md_pendidikan', 'md_pendidikan.kd_pendidikan', '=', 'datainduk.kd_pendidikan')

            ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
            ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
            ->where('datainduk.kd_pendidikan', 'like', '%' . $_SESSION['pendidikan'] . '%')
            ->paginate(1000);
        $join->withPath('/red_takmir/pendidikan?no_rt=&no_rw=&pendidikan=');

        $label = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->leftJoin('md_pendidikan', 'md_pendidikan.kd_pendidikan', '=', 'datainduk.kd_pendidikan')
        ->select(
            DB::raw('count(datainduk.kd_pendidikan) as jumlah'),
            'md_pendidikan.nama_jenjang'
        )
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('datainduk.kd_pendidikan', 'like', '%' . $_SESSION['pendidikan'] . '%')
        ->groupBy('datainduk.kd_pendidikan')
        ->orderBy('jumlah', 'desc')
        ->pluck('md_pendidikan.nama_jenjang');

        $values = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->leftJoin('md_pendidikan', 'md_pendidikan.kd_pendidikan', '=', 'datainduk.kd_pendidikan')
        ->select(
            DB::raw('count(datainduk.kd_pendidikan) as jumlah'),
        )
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('datainduk.kd_pendidikan', 'like', '%' . $_SESSION['pendidikan'] . '%')
        ->groupBy('datainduk.kd_pendidikan')
        ->orderBy('jumlah', 'desc')
        ->pluck('jumlah');

        // script dropdown filter
        $md_rt = DB::table('md_rt')->get();
        $md_rw = DB::table('md_rw')->get();
        $didik = DB::table('md_pendidikan')->get();

        return view('/red_takmir/pendidikan', [
            'pendidikan' => $join,
            'label' => $label,
            'values' => $values,
            'md_rt' => $md_rt,
            'md_rw' => $md_rw,
            'didik' => $didik
        ]);
    }

    public function agamatakmir(Request $request)
    {
        $_SESSION['no_rt'] = isset($_GET['no_rt']) ? $request->no_rt : '';
        $_SESSION['no_rw'] = isset($_GET['no_rw']) ? $request->no_rw : '';
        $_SESSION['waktu'] = isset($_GET['waktu']) ? $request->waktu : '';
        $_SESSION['jamaah'] = isset($_GET['jamaah']) ? $request->jamaah : '';
        $_SESSION['fitrah'] = isset($_GET['fitrah']) ? $request->fitrah : '';
        $_SESSION['mal'] = isset($_GET['mal']) ? $request->mal : '';
        $_SESSION['qurban'] = isset($_GET['qurban']) ? $request->qurban : '';
        $_SESSION['haji'] = isset($_GET['haji']) ? $request->haji : '';
        $_SESSION['umrah'] = isset($_GET['umrah']) ? $request->umrah : '';

        $join = DB::table('datainduk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
            ->leftJoin('md_agama', 'md_agama.kd_agama', '=', 'datainduk.kd_agama')

            ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
            ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
            ->where('datainduk.is_5waktu', 'like', '%' . $_SESSION['waktu'] . '%')
            ->where('datainduk.is_jamaah', 'like', '%' . $_SESSION['jamaah'] . '%')
            ->where('datainduk.is_zakat_fitrah', 'like', '%' . $_SESSION['fitrah'] . '%')
            ->where('datainduk.is_zakat_mal', 'like', '%' . $_SESSION['mal'] . '%')
            ->where('datainduk.is_qurban', 'like', '%' . $_SESSION['qurban'] . '%')
            ->where('datainduk.is_haji', 'like', '%' . $_SESSION['haji'] . '%')
            ->where('datainduk.is_umrah', 'like', '%' . $_SESSION['umrah'] . '%')
            ->paginate(1000);

        $join->withPath('/red_takmir/agama?no_rt=&no_rw=&waktu=&jamaah=&fitrah=&mal=&qurban=&haji=&umrah=');

        $chart = DB::table('datainduk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
            ->leftJoin('md_agama', 'md_agama.kd_agama', '=', 'datainduk.kd_agama')

            ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
            ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
            ->where('datainduk.is_5waktu', 'like', '%' . $_SESSION['waktu'] . '%')
            ->where('datainduk.is_jamaah', 'like', '%' . $_SESSION['jamaah'] . '%')
            ->where('datainduk.is_zakat_fitrah', 'like', '%' . $_SESSION['fitrah'] . '%')
            ->where('datainduk.is_zakat_mal', 'like', '%' . $_SESSION['mal'] . '%')
            ->where('datainduk.is_qurban', 'like', '%' . $_SESSION['qurban'] . '%')
            ->where('datainduk.is_haji', 'like', '%' . $_SESSION['haji'] . '%')
            ->where('datainduk.is_umrah', 'like', '%' . $_SESSION['umrah'] . '%')
            ->get();

        $waktu = 0;
        $jamaah = 0;
        $fitrah = 0;
        $mal = 0;
        $qurban = 0;
        $haji = 0;
        $umrah = 0;
        foreach ($chart as $data) {
            if ($data->is_5waktu == 'Ya') {
                $waktu += 1;
            }
            if ($data->is_jamaah == 'Ya') {
                $jamaah +=  1;
            }
            if ($data->is_zakat_fitrah == 'Ya') {
                $fitrah +=  1;
            }
            if ($data->is_zakat_mal == 'Ya') {
                $mal +=  1;
            }
            if ($data->is_qurban == 'Ya') {
                $qurban +=  1;
            }
            if ($data->is_haji == 'Ya') {
                $haji +=  1;
            }
            if ($data->is_umrah == 'Ya') {
                $umrah +=  1;
            }
        }

        $values = [$waktu, $jamaah, $fitrah, $mal, $qurban, $haji, $umrah];
        $values = json_encode($values);

        $md_rt = DB::table('md_rt')->get();
        $md_rw = DB::table('md_rw')->get();

        return view('/red_takmir/agama', [
            'agama' => $join,
            'md_rt' => $md_rt,
            'md_rw' => $md_rw,
            'values' => $values
        ]);
    }

    public function takmirkeahlian(Request $request)
    {
        // script untuk filter
        $_SESSION['no_rt'] = isset($_GET['no_rt']) ? $request->no_rt : '';
        // $_SESSION['no_rw'] = isset($_GET['no_rw']) ? $request->no_rw : '';
        $_SESSION['keahlian'] = isset($_GET['keahlian']) ? $request->keahlian : '';
        $_SESSION['level'] = isset($_GET['level']) ? $request->level : '';

        $keahlian =  DB::table('data_keahlian_warga')
            ->leftJoin('datainduk', 'datainduk.kd_induk', '=', 'data_keahlian_warga.kd_induk')
            ->leftJoin('md_keahlian', 'md_keahlian.kd_keahlian', '=', 'data_keahlian_warga.kd_keahlian')
            ->select(
                'data_keahlian_warga.id',
                'data_keahlian_warga.kd_keahlian',
                'datainduk.kd_induk',
                'datainduk.no_kk',
                'datainduk.kode_kk',
                'datainduk.no_ktp',
                'datainduk.kd_rt',
                'datainduk.kd_agama',
                'datainduk.nama',
                'datainduk.nm_panggilan',
                'md_keahlian.nama_keahlian',
                'data_keahlian_warga.is_sertifikat',
                'data_keahlian_warga.level_sertifikat',
                'data_keahlian_warga.deskripsi_sertifikat'
            )

            ->where('datainduk.kd_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
            ->where('data_keahlian_warga.kd_keahlian', 'like', '%' . $_SESSION['keahlian'] . '%')
            ->where('data_keahlian_warga.level_sertifikat', 'like', '%' . $_SESSION['level'] . '%')
            ->paginate(1000);
        // script untuk pagination biar ketika difilter masih bisa jalan paginationnya
        $keahlian->withPath('/red_takmir/keahlian?no_rt=&keahlian=&level=');


        // script chart
        $label =  DB::table('data_keahlian_warga')
        ->leftJoin('datainduk', 'datainduk.kd_induk', '=', 'data_keahlian_warga.kd_induk')
        ->leftJoin('md_keahlian', 'md_keahlian.kd_keahlian', '=', 'data_keahlian_warga.kd_keahlian')
        ->select(
            'data_keahlian_warga.kd_keahlian',
            'datainduk.kd_rt',
            'datainduk.kd_agama',
            'md_keahlian.nama_keahlian',
            'data_keahlian_warga.level_sertifikat'
        )
        ->where('datainduk.kd_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('data_keahlian_warga.kd_keahlian', 'like', '%' . $_SESSION['keahlian'] . '%')
        ->where('data_keahlian_warga.level_sertifikat', 'like', '%' . $_SESSION['level'] . '%')
        ->groupBy('data_keahlian_warga.kd_keahlian')
        ->pluck('md_keahlian.nama_keahlian');

        $values =  DB::table('data_keahlian_warga')
        ->leftJoin('datainduk', 'datainduk.kd_induk', '=', 'data_keahlian_warga.kd_induk')
        ->leftJoin('md_keahlian', 'md_keahlian.kd_keahlian', '=', 'data_keahlian_warga.kd_keahlian')
        ->select(
            DB::raw('count(data_keahlian_warga.kd_keahlian) as jumlah'),
            'data_keahlian_warga.kd_keahlian',
            'datainduk.kd_rt',
            'datainduk.kd_agama',
            'md_keahlian.nama_keahlian',
            'data_keahlian_warga.level_sertifikat'
        )
        ->where('datainduk.kd_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('data_keahlian_warga.kd_keahlian', 'like', '%' . $_SESSION['keahlian'] . '%')
        ->where('data_keahlian_warga.level_sertifikat', 'like', '%' . $_SESSION['level'] . '%')
        ->groupBy('data_keahlian_warga.kd_keahlian')
        ->pluck('jumlah');

        // script dropdown filter
        $md_rt = DB::table('md_rt')->get();
        $ahli = DB::table('md_keahlian')->get();
        $level = DB::table('data_keahlian_warga')->get();
        
        return view('/red_takmir/keahlian', [
            'keahlian' => $keahlian,
            'label' => $label,
            'values' => $values,
            'md_rt' => $md_rt,
            'ahli' => $ahli,
            'level' => $level,
        ]);
    }

    public function goldarahtakmir(Request $request)
    {
        // script untuk filter
        $_SESSION['no_rt'] = isset($_GET['no_rt']) ? $request->no_rt : '';
        $_SESSION['no_rw'] = isset($_GET['no_rw']) ? $request->no_rw : '';
        $_SESSION['gol_darah'] = isset($_GET['gol_darah']) ? $request->gol_darah : '';
        
        // script untuk table
        $table = DB::table('datainduk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
            ->leftJoin('data_kk', 'data_kk.kode_kk', '=', 'datainduk.kode_kk')
            ->select(
                'md_rt.no_rw', 
                'md_rt.no_rt',
                'data_kk.kd_rumah', 
                'datainduk.kd_rt', 
                'datainduk.nama', 
                'datainduk.nm_panggilan', 
                'datainduk.gol_darah'
            )

            ->where('md_rt.no_rt', 'like', '%'. $_SESSION['no_rt'] .'%')
            ->where('md_rt.no_rw', 'like', '%'. $_SESSION['no_rw'] .'%')
            ->where('datainduk.gol_darah', 'like', '%'. $_SESSION['gol_darah'] .'%')
            ->paginate(1000);

        // script untuk pagination biar ketika difilter masih bisa jalan paginationnya
        $table->withPath('/red_takmir/gol_darah?no_rt=&no_rw=');


        // script untuk chart
        $gol_darah = DB::table('datainduk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
            ->leftJoin('data_kk', 'data_kk.kode_kk', '=', 'datainduk.kode_kk')
            ->select(
                'md_rt.no_rw', 
                'md_rt.no_rt',
                'data_kk.kd_rumah', 
                'datainduk.kd_rt', 
                'datainduk.nama', 
                'datainduk.nm_panggilan', 
                'datainduk.gol_darah'
            )

            ->where('md_rt.no_rt', 'like', '%'. $_SESSION['no_rt'] .'%')
            ->where('md_rt.no_rw', 'like', '%'. $_SESSION['no_rw'] .'%')
            ->where('datainduk.gol_darah', 'like', '%' . $_SESSION['gol_darah'] . '%')
            ->groupBy('datainduk.gol_darah')
            ->get();

        $g = array();
        foreach ($gol_darah as $data) {
            if ($data->gol_darah == 'A') {
                $label =  'A';
            } elseif ($data->gol_darah == 'B') {
                $label =  'B';
            } elseif ($data->gol_darah == 'O') {
                $label =  'O';
            }elseif ($data->gol_darah == 'AB') {
                $label =  'AB';
            } else {
                $label =  'Belum Diisi';
            }
            $g[] = $label;
        }

        $label = json_encode($g);
        // dd($label);

        $values = DB::table('datainduk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
            ->leftJoin('data_kk', 'data_kk.no_kk', '=', 'datainduk.no_kk')
            ->select(
                DB::raw('count(datainduk.gol_darah) as jumlah'),
                'md_rt.no_rw', 
                'md_rt.no_rt',
                'data_kk.kd_rumah', 
                'datainduk.kd_rt', 
                'datainduk.nama', 
                'datainduk.nm_panggilan', 
                'datainduk.gol_darah'
            )

            ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
            ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
            ->where('datainduk.gol_darah', 'like', '%' . $_SESSION['gol_darah'] . '%')
            ->groupBy('datainduk.gol_darah')
            ->pluck('jumlah');
        $values = json_encode($values);


        // script dropdown filter
        $md_rt = DB::table('md_rt')->get();
        $md_rw = DB::table('md_rw')->get();
        $gol_darah_filter = DB::table('datainduk')->groupBy('gol_darah')->get();
            
        return view('/red_takmir/gol_darah', [
            'table' => $table,
            'label' => $label,
            'values' => $values,
            'md_rt' => $md_rt,
            'md_rw' => $md_rw,
            'gol_darah_filter' => $gol_darah_filter,
        ]);
    }

    public function bacatakmir(Request $request)
    {
        $_SESSION['no_rt'] = isset($_GET['no_rt']) ? $request->no_rt : '';
        $_SESSION['no_rw'] = isset($_GET['no_rw']) ? $request->no_rw : '';
        $_SESSION['latin'] = isset($_GET['latin']) ? $request->latin : '';
        $_SESSION['hijaiyah'] = isset($_GET['hijaiyah']) ? $request->hijaiyah : '';
        $_SESSION['iqra'] = isset($_GET['iqra']) ? $request->iqra : '';
        $_SESSION['quran'] = isset($_GET['quran']) ? $request->quran : '';

        $join = DB::table('datainduk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')

            ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
            ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
            ->where('datainduk.is_latin', 'like', '%' . $_SESSION['latin'] . '%')
            ->where('datainduk.is_hijaiyah', 'like', '%' . $_SESSION['hijaiyah'] . '%')
            ->where('datainduk.kd_agama', 1)  
            ->where('datainduk.is_iqra', 'like', '%' . $_SESSION['iqra'] . '%')
            ->where('datainduk.is_quran', 'like', '%' . $_SESSION['quran'] . '%')
            ->paginate(1000);
        $join->withPath('/red_takmir/baca?no_rt=&no_rw=&latin=&hijaiyah=&iqra=&quran=');

        $chart = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->where('datainduk.kd_agama', 1)
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('datainduk.is_latin', 'like', '%' . $_SESSION['latin'] . '%')
        ->where('datainduk.is_hijaiyah', 'like', '%' . $_SESSION['hijaiyah'] . '%')
        ->where('datainduk.is_iqra', 'like', '%' . $_SESSION['iqra'] . '%')
        ->where('datainduk.is_quran', 'like', '%' . $_SESSION['quran'] . '%')
        ->get();

        $latin = 0;
        $hijaiyah = 0;
        $iqra = 0;
        $quran = 0;
        foreach ($chart as $data) {
            if ($data->is_latin == 'Ya') {
                $latin += 1;
            }
            if ($data->is_hijaiyah == 'Ya') {
                $hijaiyah +=  1;
            }
            if ($data->is_iqra == 'Ya') {
                $iqra +=  1;
            } 
            if($data->is_quran == 'Ya'){
                $quran +=  1;
            }
        }

        $values = [$latin, $hijaiyah, $iqra, $quran];
        $values = json_encode($values);
        
        // script dropdown filter
        $md_rt = DB::table('md_rt')->get();
        $md_rw = DB::table('md_rw')->get();

        return view('/red_takmir/baca', [
            'pd' => $join,
            'md_rt' => $md_rt,
            'md_rw' => $md_rw,
            'values' => $values,
        ]);
    }

    public function edituser(Request $request){
        $datauser = DB::table('users')->get();

        return view('/red_takmir/user', ['datauser' => $datauser]);
    }

    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    
}
