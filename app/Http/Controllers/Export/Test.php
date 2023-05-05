<?php

namespace App\Http\Controllers\Export;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Rap2hpoutre\FastExcel\FastExcel;

class Test extends Controller
{
    public function export()
    {
        $data = DB::table('datainduk')
            ->leftJoin('md_agama', 'md_agama.kd_agama', '=', 'datainduk.kd_agama')
            ->leftJoin('md_pendidikan', 'md_pendidikan.kd_pendidikan', '=', 'datainduk.kd_pendidikan')
            ->leftJoin('md_pekerjaan', 'md_pekerjaan.kd_pekerjaan', '=', 'datainduk.kd_pekerjaan')

            ->get();

        return (new FastExcel($data))->download('datainduk ' . Carbon::now()->isoFormat('YYYY-MM-DD HH-mm-ss') . '.xlsx');
    }
}
