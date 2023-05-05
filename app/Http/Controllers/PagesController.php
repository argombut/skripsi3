<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Driver\Selector;

class PagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function home()
    {
        return view('home');
    }

    public function form_datakk()
    {
        // dd(DB::table('md_level_ekonomi')->get());
        $rw = DB::table('md_rw')->select('no_rw')->get();
        $rt = DB::table('md_rt')->select('no_rt')->get();
        $le = DB::table('md_level_ekonomi')->get();
        // $le = DB::table('data_kk')
        //     ->rightJoin('md_level_ekonomi', 'md_level_ekonomi.kd_level_ekonomi', '=', 'data_kk.kd_level_ekonomi')
        //     ->select('md_level_ekonomi.nama_level', 'data_kk.kd_level_ekonomi')
        //     ->get();
        return view('form_datakk', ['rw' => $rw, 'rt' => $rt, 'le' => $le]);
    }
    public function form_datainduk()
    {
        $kk = DB::table('data_kk')->get();
        $ag = DB::table('md_agama')->get();
        $pd = DB::table('md_pendidikan')->get();
        $pk = DB::table('md_pekerjaan')->get();
        $le = DB::table('md_level_ekonomi')->get();
        $rt = DB::table('md_rt')->get();

        return view('form_datainduk', ['kk' => $kk, 'ag' => $ag, 'pd' => $pd, 'pk' => $pk, 'le' => $le, 'rt' => $rt]);
    }

    public function table()
    {
        return view('table');
    }
    public function data_induk()
    {
        return view('data_induk');
    }
    public function data_kk()
    {
        return view('data_kk');
    }
    public function data_keahlian()
    {
        return view('data_keahlian');
    }
    public function golongan_darah()
    {
        return view('golongan_darah');
    }
    public function pekerjaan()
    {
        return view('pekerjaan');
    }
    public function pendidikan()
    {
        return view('pendidikan');
    }

    public function formdatakk()
    {
        return view('form_kk');
    }

    public function formkeahlian()
    {
        $join = DB::table('data_keahlian_warga')
            ->rightJoin('datainduk', 'datainduk.kd_induk', '=', 'data_keahlian_warga.kd_induk')
            ->get();
        $k = DB::table('data_keahlian_warga')
            ->rightJoin('md_keahlian', 'md_keahlian.kd_keahlian', '=', 'data_keahlian_warga.kd_keahlian')
            ->get();
        return view('form_keahlian', ['join' => $join, 'k' => $k]);
    }
    public function editkeahlian()
    {
        $join = DB::table('data_keahlian_warga')
            ->rightJoin('datainduk', 'datainduk.kd_induk', '=', 'data_keahlian_warga.kd_induk')
            ->get();
        $k = DB::table('data_keahlian_warga')
            ->rightJoin('md_keahlian', 'md_keahlian.kd_keahlian', '=', 'data_keahlian_warga.kd_keahlian')
            ->get();
        return view('edit_keahlian/{kd_induk}', ['join' => $join, 'k' => $k]);
    }

    public function transaksi()
    {
        $data = DB::table('data_induk')
            ->leftJoin('data_kk', 'data_kk.no_kk', '=', 'data_induk.no_kk')
            ->get();


        return view('transaksi', compact('data'));
    }
}
