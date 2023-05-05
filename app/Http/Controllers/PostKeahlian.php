<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostKeahlian extends Controller
{
    public function addPostKeahlian()
    {
        return view('add-post-keahlian');
    }
    public function savePostKeahlian(Request $request)
    {
        // dd($request->all());
        DB::table('data_keahlian_warga')->insert([

            'kd_induk' => $request->kd_induk,
            'kd_keahlian' => $request->kd_keahlian,
            'is_sertifikat' => $request->sertifikat,
            'deskripsi_sertifikat' => $request->deskripsi,
            'level_sertifikat' => $request->level,
            'keterangan' => $request->keterangan,

        ]);

        return redirect('/keahlian');
        // return back()->with('post_add_dkk', 'Data berhasil ditambahkan');
    }


    public function editPost($id)
    {
        $edit = DB::table('data_keahlian_warga')->where('id', $id)->first();
        $k = DB::table('data_keahlian_warga')
            ->rightJoin('md_keahlian', 'md_keahlian.kd_keahlian', '=', 'data_keahlian_warga.kd_keahlian')
            ->select('data_keahlian_warga.kd_keahlian', 'md_keahlian.nama_keahlian')
            ->get();
        return view('edit_keahlian', ['k' => $k], compact('edit'));
    }


    public function updatePost(Request $request)
    {


        DB::table('data_keahlian_warga')->where('id', $request->id)->update(

            [
                'kd_induk' => $request->kd_induk,
                'kd_keahlian' => $request->kd_keahlian,
                'is_sertifikat' => $request->sertifikat,
                'deskripsi_sertifikat' => $request->deskripsi,
                'level_sertifikat' => $request->level,
                'keterangan' => $request->keterangan,
            ]

        );
        $post = DB::table('data_keahlian_warga')->where('id', $request->id)->first();
        // return view('edit_keahlian', compact('post'))->with('post_updatedk', 'Data Updated');
        return redirect('keahlian');
    }

    public function deletePost($id)
    {
        DB::table('data_keahlian_warga')->where('id', $id)->delete();
        return redirect('keahlian');
    }
}
