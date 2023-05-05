<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;


class MDController extends Controller
{
    public function formUser()
    {
        return view('/md/md_user/form_user');
    }

    public function addPostUser()
    {
        return view('add-post-user');
    }

    public function savePostUser(Request $request)
    {
        DB::table('users')->insert([
            
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt('12345678'),
            'role' => $request->role,
        ]);
        return redirect('md_user');
    }

    public function editUser($id){
        $edit = DB::table('users')->where('id', $id)->first();
        return view('/md/md_user/edit_user', compact('edit'));
    }

    public function updateUser(Request $request)
    {
        DB::table('users')->where('id', $request->id)->update(
            [
                'id' => $request->id,
                'name' => $request->name,
                'email' => $request->email,
                'role' => $request->role,
            ]
        );
        $post = DB::table('users')->where('id', $request->id)->first();
        return redirect('md_user');
    }

    public function deleteUser($id)
    {
        DB::table('users')->where('id', $id)->delete();
        // return back()->with('post_delete', 'Data Berhasil Dihapus');
        return redirect('/md_user');
    }

    //===================================================================================================================//
    public function formRT()
    {
        return view('/md/md_rt/form_rt');
    }


    public function addPostRT()
    {
        return view('add-post-rt');
    }

    public function savePostRT(Request $request)
    {
        DB::table('md_rt')->insert([
            'kd_rt' => $request->kd_rt,
            'no_rt' => $request->no_rt,
            'no_rw' => $request->no_rw,
            'nm_pejabat' => $request->nm_pejabat,
            'nm_bu_pejabat' => $request->nm_bu_pejabat,
            'keterangan' => $request->keterangan,
        ]);
        return redirect('md_rt');
    }

    public function editRT($kd_rt)
    {
        $edit = DB::table('md_rt')->where('kd_rt', $kd_rt)->first();
        return view('/md/md_rt/edit_rt', compact('edit'));
    }

    public function updateRT(Request $request)
    {
        DB::table('md_rt')->where('kd_rt', $request->id)->update(
            [
                'kd_rt' => $request->kd_rt,
                'no_rt' => $request->no_rt,
                'no_rw' => $request->no_rw,
                'nm_pejabat' => $request->nm_pejabat,
                'nm_bu_pejabat' => $request->nm_bu_pejabat,
                'keterangan' => $request->keterangan,
            ]
        );
        $post = DB::table('md_rt')->where('kd_rt', $request->kd_rt)->first();
        return redirect('md_rt');
    }

    public function deleteRT($kd_rt)
    {
        DB::table('md_rt')->where('kd_rt', $kd_rt)->delete();
        // return back()->with('post_delete', 'Data Berhasil Dihapus');
        return redirect('/md_rt');
    }

    //========================================================================================================================//

    public function formRW()
    {
        return view('/md/md_rw/form_rw');
    }

    public function addPostRW()
    {
        return view('add-post-rw');
    }

    public function savePostRW(Request $request)
    {
        DB::table('md_rw')->insert([
            'no_rw' => $request->no_rw,
            'nm_pejabat' => $request->nm_pejabat,
            'nm_bu_pejabat' => $request->nm_bu_pejabat,
            'keterangan' => $request->keterangan,
            'nm_dusun' => $request->nm_dusun,
            'nm_desa' => $request->nm_desa,
            'nm_kecamatan' => $request->nm_kecamatan,
            'nm_kabupaten' => $request->nm_kabupaten,
        ]);
        return redirect('md_rw');
    }

    public function editRW($no_rw)
    {
        $edit = DB::table('md_rw')->where('no_rw', $no_rw)->first();
        return view('/md/md_rw/edit_rw', compact('edit'));
    }

    public function updateRW(Request $request)
    {
        DB::table('md_rw')->where('no_rw', $request->id)->update(
            [
                'no_rw' => $request->no_rw,
                'nm_pejabat' => $request->nm_pejabat,
                'nm_bu_pejabat' => $request->nm_bu_pejabat,
                'keterangan' => $request->keterangan,
                'nm_dusun' => $request->nm_dusun,
                'nm_desa' => $request->nm_desa,
                'nm_kecamatan' => $request->nm_kecamatan,
                'nm_kabupaten' => $request->nm_kabupaten,
            ]
        );
        $post = DB::table('md_rw')->where('no_rw', $request->no_rw)->first();
        return redirect('md_rw');
    }

    public function deleteRW($no_rw)
    {
        DB::table('md_rw')->where('no_rw', $no_rw)->delete();
        // return back()->with('post_delete', 'Data Berhasil Dihapus');
        return redirect('/md_rw');
    }

    //=====================================================================================================//
    public function formRumah()
    {
        return view('/md/md_rumah/form_rumah');
    }
    public function formInputRumah()
    {
        $join = DB::table('md_rumah')
            ->rightJoin('data_kk', 'data_kk.no_kk', '=', 'md_rumah.no_kk')
            ->get();
        $j = DB::table('md_rumah')
            ->rightJoin('md_rt', 'md_rt.kd_rt', '=', 'md_rumah.kd_rt')
            ->get();
        return view('/md/md_rumah/form_rumah', ['join' => $join, 'j' => $j]);
    }
    public function inputRumah()
    {
        $j = DB::table('md_rumah')
            ->leftJoin('md_rt', 'md_rt.kd_rt', '=', 'md_rumah.kd_rt')
            ->get();
        return view('/md/md_rumah/form_rumah', ['j' => $j]);
    }



    public function addPostRumah()
    {
        return view('add-post-rumah');
    }

    public function savePostRumah(Request $request)
    {
        if (empty($request->no_kk)) {
            $request->jml_kk = 0;
            $request->jml_penghuni = 0;
        } else {
            $request->jml_kk = DB::table('data_kk')->where('kd_rumah', '=', $request->kd_rumah)->count();
            $request->jml_penghuni = DB::table('datainduk')
                ->rightJoin('data_kk', 'data_kk.no_kk', '=', 'datainduk.no_kk')
                ->where('kd_rumah', '=', $request->kd_rumah)
                ->select('kd_rumah')
                ->count();
        }
        // dd([
        //     'kd_rumah' => $request->kd_rumah,
        //     'no_rumah' => $request->no_rumah,
        //     'no_kk' => $request->no_kk,
        //     'kd_rt' => $request->kd_rt,
        //     'jml_kk' => $request->jml_kk,
        //     'jml_penghuni' => $request->jml_penghuni,
        //     'nm_kk' => $request->nm_kk,
        //     'keterangan' => $request->keterangan,
        //     'is_kontrakan' => $request->is_kontrakan,
        //     'status' => $request->status,
        //     'latitude' => $request->latitude,
        //     'longitude' => $request->longitude,
        // ]);
        DB::table('md_rumah')->insert([
            'kd_rumah' => $request->kd_rumah,
            'no_rumah' => $request->no_rumah,
            'no_kk' => $request->no_kk,
            'kd_rt' => $request->kd_rt,
            'jml_kk' => $request->jml_kk,
            'jml_penghuni' => $request->jml_penghuni,
            'nm_kk' => $request->nm_kk,
            'keterangan' => $request->keterangan,
            'is_kontrakan' => $request->is_kontrakan,
            'status' => $request->status,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
        ]);
        return redirect('md_rumah');
    }

    public function editRumah($kd_rumah)
    {
        $edit = DB::table('md_rumah')->where('kd_rumah', $kd_rumah)->first();
        return view('/md/md_rumah/edit_rumah', compact('edit'));
    }

    public function updateRumah(Request $request)
    {
        DB::table('md_rumah')->where('kd_rumah', $request->id)->update(
            [
                'kd_rumah' => $request->kd_rumah,
                'no_rumah' => $request->no_rumah,
                'no_kk' => $request->no_kk,
                'kd_rt' => $request->kd_rt,
                'jml_kk' => $request->jml_kk,
                'jml_penghuni' => $request->jml_penghuni,
                'nm_kk' => $request->nm_kk,
                'keterangan' => $request->keterangan,
                'is_kontrakan' => $request->is_kontrakan,
                'status' => $request->status,
                'latitude' => $request->latitude,
                'longitude' => $request->longitude,
            ]
        );
        $post = DB::table('md_rumah')->where('kd_rumah', $request->kd_rumah)->first();
        return redirect('md_rumah');
    }

    public function deleteRumah($kd_rumah)
    {
        DB::table('md_rumah')->where('kd_rumah', $kd_rumah)->delete();
        // return back()->with('post_delete', 'Data Berhasil Dihapus');
        return redirect('/md_rumah');
    }



    public function jumlahpenghuni()
    {
        $jumlah = '';
        return $jumlah;
    }
    //===============================================================================================//

    public function agama()
    {
        $agama = DB::table('md_agama')
            ->get();
        return view('/md/md_agama/md_agama', ['agama' => $agama]);
    }

    public function formAgama()
    {
        return view('/md/md_agama/form_agama');
    }

    public function addPostAgama()
    {
        return view('add-post-agama');
    }

    public function savePostAgama(Request $request)
    {
        DB::table('md_agama')->insert([
            'kd_agama' => $request->kd_agama,
            'nama_agama' => $request->nama_agama,
            'keterangan' => $request->keterangan,
        ]);
        return redirect('md_agama');
    }

    public function editAgama($kd_agama)
    {
        $edit = DB::table('md_agama')->where('kd_agama', $kd_agama)->first();
        return view('/md/md_agama/edit_agama', compact('edit'));
    }

    public function updateAgama(Request $request)
    {
        DB::table('md_agama')->where('kd_agama', $request->id)->update(
            [
                'kd_agama' => $request->kd_agama,
                'nama_agama' => $request->nama_agama,
                'keterangan' => $request->keterangan,
            ]
        );
        $post = DB::table('md_agama')->where('kd_agama', $request->kd_agama)->first();
        return redirect('md_agama');
    }

    public function deleteAgama($kd_agama)
    {
        DB::table('md_agama')->where('kd_agama', $kd_agama)->delete();
        return redirect('/md_agama');
    }

    //======================================================================================//

    public function mdp()
    {
        $pekerjaan = DB::table('md_pekerjaan')->get();
        return view('/md/md_pekerjaan/md_pekerjaan', ['pekerjaan' => $pekerjaan]);
    }

    public function formPekerjaan()
    {
        return view('/md/md_pekerjaan/form_pekerjaan');
    }

    public function addPostPekerjaan()
    {
        return view('add-post-pekerjaan');
    }

    public function savePostPekerjaan(Request $request)
    {
        DB::table('md_pekerjaan')->insert([
            'kd_pekerjaan' => $request->kd_pekerjaan,
            'nama_pekerjaan' => $request->nama_pekerjaan,
            'keterangan' => $request->keterangan,
            'status' => $request->status,
        ]);
        return redirect('md_pekerjaan');
    }

    public function editPekerjaan($kd_pekerjaan)
    {
        $edit = DB::table('md_pekerjaan')->where('kd_pekerjaan', $kd_pekerjaan)->first();
        return view('/md/md_pekerjaan/edit_pekerjaan', compact('edit'));
    }

    public function updatePekerjaan(Request $request)
    {
        DB::table('md_pekerjaan')->where('kd_pekerjaan', $request->id)->update(
            [
                'kd_pekerjaan' => $request->kd_pekerjaan,
                'nama_pekerjaan' => $request->nama_pekerjaan,
                'keterangan' => $request->keterangan,
                'status' => $request->status,
            ]
        );
        $post = DB::table('md_pekerjaan')->where('kd_pekerjaan', $request->kd_pekerjaan)->first();
        return redirect('md_pekerjaan');
    }

    public function deletePekerjaan($kd_pekerjaan)
    {
        DB::table('md_pekerjaan')->where('kd_pekerjaan', $kd_pekerjaan)->delete();
        return redirect('/md_pekerjaan');
    }

    //======================================================================================================================//

    public function mdPendidikan()
    {
        $pendidikan = DB::table('md_pendidikan')->get();
        return view('/md/md_pendidikan/md_pendidikan', ['pendidikan' => $pendidikan]);
    }

    public function formPendidikan()
    {
        return view('/md/md_pendidikan/form_pendidikan');
    }

    public function addPostPendidikan()
    {
        return view('add-post-pendidikan');
    }

    public function savePostPendidikan(Request $request)
    {
        DB::table('md_pendidikan')->insert([
            'kd_pendidikan' => $request->kd_pendidikan,
            'nama_jenjang' => $request->nama_jenjang,
            'keterangan' => $request->keterangan,
        ]);
        return redirect('md_pendidikan');
    }

    public function editPendidikan($kd_pendidikan)
    {
        $edit = DB::table('md_pendidikan')->where('kd_pendidikan', $kd_pendidikan)->first();
        return view('/md/md_pendidikan/edit_pendidikan', compact('edit'));
    }

    public function updatePendidikan(Request $request)
    {
        DB::table('md_pendidikan')->where('kd_pendidikan', $request->id)->update(
            [
                'kd_pendidikan' => $request->kd_pendidikan,
                'nama_jenjang' => $request->nama_jenjang,
                'keterangan' => $request->keterangan,
            ]
        );
        $post = DB::table('md_pendidikan')->where('kd_pendidikan', $request->kd_pendidikan)->first();
        return redirect('md_pendidikan');
    }

    public function deletePendidikan($kd_pendidikan)
    {
        DB::table('md_pendidikan')->where('kd_pendidikan', $kd_pendidikan)->delete();
        return redirect('/md_pendidikan');
    }

    //=======================================================================================================================//

    public function mdEkonomi()
    {
        $ekonomi = DB::table('md_level_ekonomi')->get();
        return view('/md/md_ekonomi/md_ekonomi', ['ekonomi' => $ekonomi]);
    }

    public function formEkonomi()
    {
        return view('/md/md_ekonomi/form_ekonomi');
    }

    public function addPostEkonomi()
    {
        return view('add-post-ekonomi');
    }

    public function savePostEkonomi(Request $request)
    {
        DB::table('md_level_ekonomi')->insert([
            'kd_level_ekonomi' => $request->kd_level_ekonomi,
            'nama_level' => $request->nama_level,
            'keterangan' => $request->keterangan,
        ]);
        return redirect('md_ekonomi');
    }

    public function editEkonomi($kd_level_ekonomi)
    {
        $edit = DB::table('md_level_ekonomi')->where('kd_level_ekonomi', $kd_level_ekonomi)->first();
        return view('/md/md_ekonomi/edit_ekonomi', compact('edit'));
    }

    public function updateEkonomi(Request $request)
    {
        DB::table('md_level_ekonomi')->where('kd_level_ekonomi', $request->id)->update(
            [
                'kd_level_ekonomi' => $request->kd_level_ekonomi,
                'nama_level' => $request->nama_level,
                'keterangan' => $request->keterangan,
            ]
        );
        $post = DB::table('md_level_ekonomi')->where('kd_level_ekonomi', $request->kd_level_ekonomi)->first();
        return redirect('md_ekonomi');
    }

    public function deleteEkonomi($kd_level_ekonomi)
    {
        DB::table('md_level_ekonomi')->where('kd_level_ekonomi', $kd_level_ekonomi)->delete();
        return redirect('/md_ekonomi');
    }

    //=============================================================================================================================================//

    public function mdKeahlian()
    {
        $keahlian = DB::table('md_keahlian')->get();
        return view('/md/md_keahlian/md_keahlian', ['keahlian' => $keahlian]);
    }

    public function fk()
    {
        return view('/md/md_keahlian/form_mdkeahlian');
    }

    public function addPostMDKeahlian()
    {
        return view('add-post-mdkeahlian');
    }

    public function savePostMDKeahlian(Request $request)
    {
        DB::table('md_keahlian')->insert([
            'kd_keahlian' => $request->kd_keahlian,
            'nama_keahlian' => $request->nama_keahlian,
            'deskripsi' => $request->deskripsi,
            'keterangan' => $request->keterangan,
        ]);
        return redirect('md_keahlian');
    }

    public function editMDKeahlian($kd_keahlian)
    {
        $edit = DB::table('md_keahlian')->where('kd_keahlian', $kd_keahlian)->first();
        return view('/md/md_keahlian/edit_mdkeahlian', compact('edit'));
    }

    public function updateMDKeahlian(Request $request)
    {
        DB::table('md_keahlian')->where('kd_keahlian', $request->id)->update(
            [
                'kd_keahlian' => $request->kd_keahlian,
                'nama_keahlian' => $request->nama_keahlian,
                'deskripsi' => $request->deskripsi,
                'keterangan' => $request->keterangan,
            ]
        );
        $post = DB::table('md_keahlian')->where('kd_keahlian', $request->kd_keahlian)->first();
        return redirect('md_keahlian');
    }

    public function deleteMDKeahlian($kd_keahlian)
    {
        DB::table('md_keahlian')->where('kd_keahlian', $kd_keahlian)->delete();
        return redirect('/md_keahlian');
    }
}
