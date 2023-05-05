<?php

namespace App\Http\Controllers;

use App\Models\Data_kk;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Cast\Array_;

use function PHPUnit\Framework\callback;

class RwController extends Controller
{
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



        return view('/rw/home', [
            
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
    
        $warga->withPath('/rw/warga?no_rt=&no_rw=&kelamin=&mukim='); //Link untuk URI Pagination dapat dibuat sesuai dengan keinginan dengan memanfaatkan method withPath

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

        return view('/rw/warga', [
            'warga' => $warga,
            'md_rt' => $md_rt,
            'md_rw' => $md_rw,
            'label' => $label,
            'values' => $values,
            'laki' => $laki,
            'pr' => $pr,
        ]);
    }

    public function datakk(Request $request)
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

        $kk->withPath('/rw/datakk?no_rt=&no_rw=&level_ekonomi=');

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
        
        return view('/rw/datakk', [
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
        $ekonomi->withPath('/rw/ekonomi?no_rt=&no_rw=&level_ekonomi=&mukim=');

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

        return view('/rw/ekonomi', [
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

        $join->withPath('/rw/pekerjaan?no_rt=&no_rw=&pekerjaan=&level_ekonomi=');

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

        return view('/rw/pekerjaan', [
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
        $join->withPath('/rw/pendidikan?no_rt=&no_rw=&pendidikan=');

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

        return view('/rw/pendidikan', [
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
        $join->withPath('/rw/agama?no_rt=&no_rw=&agama=');

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

        return view('/rw/agama', [
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
        $keahlian->withPath('/rw/keahlian?no_rt=&keahlian=&level=');


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
        
        return view('/rw/keahlian', [
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
        $table->withPath('/rw/gol_darah?no_rt=&no_rw=');


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
            
        return view('/rw/gol_darah', [
            'table' => $table,
            'label' => $label,
            'values' => $values,
            'md_rt' => $md_rt,
            'md_rw' => $md_rw,
            'gol_darah_filter' => $gol_darah_filter,
        ]);


        
    }


    #Method helper
    public function birthCounter($dt)
    {
        $dt_born = Carbon::parse($dt);
        $dt_now = Carbon::now();
        $dt_age = $dt_born->diffInYears($dt_now);
        return $dt_age;
    }

    public function ageCategory($age)
    {
        if ($age <= 12) :
            return 'Anak-anak';
        elseif ($age <= 25) :
            return 'Remaja';
        elseif ($age <= 55) :
            return 'Dewasa';
        else :
            return 'Manula';
        endif;
    }
}
