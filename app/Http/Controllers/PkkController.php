<?php

namespace App\Http\Controllers;

use App\Models\Data_kk;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PkkController extends Controller
{
    public function home()
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


            return view('/pkk/home', [
                'countkeahlian' => $countkeahlian,
                'countperempuan' => $countperempuan,

                'label' => $label,
                'values' => $values,
                

                
            ]);
    }



    public function warga(Request $request)
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
        $pk->withPath('/pkk/warga?no_rt=&no_rw=&kawin=&hub=');

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

        

        return view('/pkk/warga', [
                'pk' => $pk,

                'md_rt' => $md_rt,
                'md_rw' => $md_rw,

                'labelkawin' => $labelkawin,
                'valueskawin' => $valueskawin,

                'labelhubungan' => $labelhubungan,
                'valueshubungan' => $valueshubungan,

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
            ->where('datainduk.j_kelamin', '=', "Perempuan") //edited
            ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
            ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
            ->where('md_pekerjaan.nama_pekerjaan', 'like', '%' . $_SESSION['pekerjaan'] . '%')
            ->where('md_level_ekonomi.kd_level_ekonomi', 'like', '%' . $_SESSION['level_ekonomi'] . '%')
            ->paginate(1000);

        $join->withPath('/pkk/pekerjaan?no_rt=&no_rw=&pekerjaan=&level_ekonomi=');

        $label = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->leftJoin('md_pekerjaan', 'md_pekerjaan.kd_pekerjaan', '=', 'datainduk.kd_pekerjaan')
        ->leftJoin('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'datainduk.kd_level_ekonomi')
        
        ->select(
            DB::raw('count(md_pekerjaan.nama_pekerjaan) as jumlah'),
            'md_pekerjaan.nama_pekerjaan'
        )
        ->where('datainduk.j_kelamin', '=', "Perempuan") //edited
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
        ->where('datainduk.j_kelamin', '=', "Perempuan") //edited
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
        ->where('datainduk.j_kelamin', '=', "Perempuan") //edited
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
        ->where('datainduk.j_kelamin', '=', "Perempuan") //edited
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

        return view('/pkk/pekerjaan', [
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


    public function keahlian(Request $request)
    {
        // script untuk filter
        $_SESSION['no_rt'] = isset($_GET['no_rt']) ? $request->no_rt : '';
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
        $keahlian->withPath('/pkk/keahlian?no_rt=&keahlian=&level=');


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
        
        return view('/pkk/keahlian', [
            'keahlian' => $keahlian,
            'label' => $label,
            'values' => $values,
            'md_rt' => $md_rt,
            'ahli' => $ahli,
            'level' => $level,
        ]);

    }

    public function detail()
    {
        $join = DB::table('datainduk')
            ->leftJoin('data_kk', 'data_kk.no_kk', '=', 'datainduk.no_kk')
            ->where('datainduk.j_kelamin', '=', "Perempuan")
            ->where('datainduk.kd_rt', '=', 1)
            ->get();
        return view('/pkk/detail', ['detail' => $join]);
    }

    public function detail2()
    {
        $join = DB::table('datainduk')
            ->leftJoin('data_kk', 'data_kk.no_kk', '=', 'datainduk.no_kk')
            ->where('datainduk.j_kelamin', '=', "Perempuan")
            ->where('datainduk.kd_rt', '=', 2)
            ->get();
        return view('/pkk/detail2', ['detail2' => $join]);
    }

    public function detail13()
    {
        $join = DB::table('datainduk')
            ->leftJoin('data_kk', 'data_kk.no_kk', '=', 'datainduk.no_kk')
            ->where('datainduk.j_kelamin', '=', "Perempuan")
            ->where('datainduk.kd_rt', '=', 13)
            ->get();
        return view('/pkk/detail13', ['detail13' => $join]);
    }
}
