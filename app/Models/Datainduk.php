<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Datainduk extends Model
{
    protected $table = 'datainduk';

    protected $appends = ['jml_anggota'];

    public function getJmlAnggotaAttribute(){
        // dd($this->get()->toArray());
        $total = DB::table('datainduk')
                    ->select(DB::raw('COUNT(no_kk) as total_anggota'))
                    ->where('no_kk', '=', $this->no_kk)
                    ->groupBy('no_kk');
        return $total->count() === 0 ? 0 : $total->get()[0]->total_anggota;
    }

    public function data_kk(){
        return $this->belongsTo(Data_kk::class, 'no_kk');
    }
}
