<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Psy\Command\WhereamiCommand;

class KTController extends Controller
{
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

    public function home()
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
        ->orWhere('tgl_lahir', '<=', Carbon::now()->subYear(16)->toDateString())
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
        ->orWhere('tgl_lahir', '<=', Carbon::now()->subYear(16)->toDateString())
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


       

        return view('/kt/home', [
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

    public function warga(Request $request)
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
        $data_induk->withPath('/kt/warga?no_rt=&no_rw=&skawin=');

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
        ->orWhere('tgl_lahir', '<=', Carbon::now()->subYear(16)->toDateString())
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('datainduk.status_kawin', 'like', $_SESSION['skawin'] . '%')
        ->groupBy('datainduk.status_kawin')
        ->pluck('datainduk.status_kawin');

        $valueskawin = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->where('tgl_lahir', '>=', Carbon::now()->subYear(30)->toDateString())
        ->orWhere('tgl_lahir', '<=', Carbon::now()->subYear(16)->toDateString())
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
        ->orWhere('tgl_lahir', '<=', Carbon::now()->subYear(16)->toDateString())
        ->where('md_rt.no_rt', 'like', '%' . $_SESSION['no_rt'] . '%')
        ->where('md_rt.no_rw', 'like', '%' . $_SESSION['no_rw'] . '%')
        ->where('datainduk.status_kawin', 'like', $_SESSION['skawin'] . '%')
        ->groupBy('datainduk.j_kelamin')
        ->pluck('datainduk.j_kelamin');

        $valuesgender = DB::table('datainduk')
        ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
        ->where('tgl_lahir', '>=', Carbon::now()->subYear(30)->toDateString())
        ->orWhere('tgl_lahir', '<=', Carbon::now()->subYear(16)->toDateString())
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

        return view('/kt/warga', [
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

        return view('/kt/laki', ['data_induk' => $data_induk]);
    }


    public function perempuan()
    {
        $data_induk = DB::table('datainduk')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'datainduk.kd_rt')
            ->where('j_kelamin', '=', 'Perempuan')
            ->where('tgl_lahir', '>=', Carbon::now()->subYear(30)->toDateString())
            ->where('tgl_lahir', '<=', Carbon::now()->subYear(16)->toDateString())
            ->get();

        return view('/kt/perempuan', ['data_induk' => $data_induk]);
    }


    public function anggota()
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

        return view('/kt/karangtaruna', ['data_induk' => $data_induk]);
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
        $keahlian->withPath('/kt/keahlian?no_rt=&keahlian=&level=');


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
}
