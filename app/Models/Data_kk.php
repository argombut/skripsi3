<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Data_kk extends Model
{
    protected $table = 'data_kk';
    protected $appends = ['jml_anggota'];

    
    public function getJmlAnggotaAttribute(){
        $total = DB::table('datainduk')
                    ->select(DB::raw('COUNT(no_kk) as total_anggota'))
                    ->where('no_kk', $this->no_kk)
                    ->groupBy('no_kk');

        return $total->count() === 0 ? 0 : $total->get()[0]->total_anggota;
    }
    
    public function datainduk(){
        return $this->hasMany(Datainduk::class, 'no_kk');
    }
}
