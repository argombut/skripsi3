<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Export\Test;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\JamaahController;
use App\Http\Controllers\TakmirController;
use App\Http\Controllers\KTController;
use App\Http\Controllers\MDController;
use App\Http\Controllers\PkkController;
use App\Http\Controllers\PostKeahlian;
use App\Http\Controllers\PostDataKK;
use App\Http\Controllers\PostDataInduk;
use App\Http\Controllers\RwController;
// use App\Http\Controllers\UserAuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Faker\Guesser\Name;
use Laravel\Socialite\Facades\Socialite;



/////////Debugging///////////
// Route::get('/DEBUG_LOGIN', function () {
//     Auth::loginUsingId(1);
//     return redirect('/home');
// });

use Illuminate\Support\Facades\DB;

use function PHPSTORM_META\type;


Route::get('/export', [Test::class, 'export'])->name('export');

function NToS($before)
{
    if ($before === 1) {
        return "001";
    } else if ($before === 2) {
        return "002";
    } else if ($before === 13) {
        return "013";
    }
    dd($before);
}

Route::get('/transfer_db', function () {
    $data_kk = DB::table('data_kk')->get();

    foreach ($data_kk as $data) :
        DB::table('sementara')->insert([
            "no_kk"             => $data->no_kk,
            "no_rt"             => NToS($data->no_rt),
            "no_rw"             => NToS($data->no_rw),
            "nm_kk"             => $data->nm_kk,
            "kd_rumah"          => $data->kd_rumah,
            "kd_level_ekonomi"  => $data->kd_level_ekonomi,
            "keterangan"        => $data->keterangan
        ]);
    endforeach;
    return 'Transfer db';
});
Route::get('/inspect_db', function () {
    dd(DB::table('datainduk')->first());
});

Route::get('/db_data_keahlian_warga', function () {
    $data_kk = DB::table('data_keahlian_warga')->get();
    foreach ($data_kk as $data) :
        DB::table('sementara_data_keahlian_warga')->insert([
            "id"                    => $data->id,
            "kd_induk"              => $data->kd_induk,
            "kd_keahlian"           => $data->kd_keahlian,
            "is_sertifikat"         => $data->is_sertifikat,
            "deskripsi_sertifikat"  => $data->deskripsi_sertifikat,
            "level_sertifikat"      => $data->level_sertifikat,
            "keterangan"            => $data->keterangan
        ]);
    endforeach;
    return 'db_data_keahlian_warga';
});
Route::get('/insert_db_data_keahlian_warga_insert', function () {
    $data_kk = DB::table('sementara_data_keahlian_warga')->get();
    foreach ($data_kk as $data) :
        DB::table('data_keahlian_warga')->insert((array) $data);
    endforeach;
    return 'insert_db_data_keahlian_warga_insert';
});
Route::get('/db_datainduk', function () {
    $data_kk = DB::table('datainduk')->get();
    foreach ($data_kk as $data) :
        $data->kd_rt = NToS($data->kd_rt);
        DB::table('sementara_datainduk')->insert((array) $data);
    endforeach;
    return 'db_datainduk -> sementara_db_datainduk';
});
Route::get('/insert_db_datainduk', function () {
    $data_kk = DB::table('sementara_datainduk')->get();
    foreach ($data_kk as $data) :
        DB::table('datainduk')->insert((array) $data);
    endforeach;
    return 'sementara_datainduk -> insert_db_datainduk';
});
Route::get('/db_data_kk', function () {
    $data_kk = DB::table('data_kk')->get();
    foreach ($data_kk as $data) :
        DB::table('sementara_data_kk')->insert([
            "no_kk"             => $data->no_kk,
            "no_rt"             => NToS($data->no_rt),
            "no_rw"             => NToS($data->no_rw),
            "nm_kk"             => $data->nm_kk,
            "kd_rumah"          => $data->kd_rumah,
            "kd_level_ekonomi"  => $data->kd_level_ekonomi,
            "keterangan"        => $data->keterangan
        ]);
    endforeach;
    return 'db_data_kk -> sementara_data_kk';
});
Route::get('/insert_db_data_kk', function () {
    $data_kk = DB::table('sementara_data_kk')->get();
    foreach ($data_kk as $data) :
        DB::table('data_kk')->insert((array) $data);
    endforeach;
    return 'sementara_db_data_kk -> db_data_kk';
});


////////////////

/////////AUTENTIKASI///////////
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');
Route::get('/', [LoginController::class, 'login']);
Route::get('login', [LoginController::class, 'login']);

// Route::middleware(['auth'])->group(function () {
Route::middleware(['admin'])->group(function () {

    /////////HOME///////////
    Route::get('/home', [PagesController::class, 'home']);

    

    /////////DATA WARGA KK///////////
    Route::get('data_kk', [PagesController::class, 'datakk']);
    Route::get('data_kk', [JamaahController::class, 'datakk']);
    Route::get('formkk', [PagesController::class, 'formdatakk']);

    Route::get('edit_transaksi/{kd_induk}', [JamaahController::class, 'editTransaksi'])->name('edit.transaksi');
    Route::post('edit_transaksi/', [JamaahController::class, 'simpanEditTransaksi'])->name('simpan.transaksi');

    /////////DATA WARGA INDUK///////////
    Route::get('/data_induk', [PagesController::class, 'data_induk']);
    Route::get('/data_induk', [JamaahController::class, 'datainduk']);
    Route::get('/datainduk', [JamaahController::class, 'data_induk']);
    Route::get('/ibadah', [JamaahController::class, 'ibadah']);


    // Route::get('/keahlian', [JamaahController::class, 'joinkj'])->name('JamaahController.joinkj');

    Route::get('/keahlian', [JamaahController::class, 'keahlian']);
    Route::get('/form_keahlian', [PagesController::class, 'formkeahlian']);
    Route::post('/add-post-keahlian', [PostKeahlian::class, 'savePostKeahlian'])->name('keahlian.save');
    Route::get('/add-post-keahlian', [PostKeahlian::class, 'addPostKeahlian'])->name('keahlian.add');
    Route::get('/edit_keahlian/{id}', [PostKeahlian::class, 'editPost'])->name('postkeahlian.edit');
    Route::post('/update-post-keahlian', [PostKeahlian::class, 'updatePost'])->name('updatekeahlian.post');
    Route::get('/delete_data_keahlian/{id}', [PostKeahlian::class, 'deletePost'])->name('post.delete');

    /////////TAMPIL DATA///////////
    Route::get('/md_agama', [MDController::class, 'agama']);
    Route::get('/form_agama', [MDController::class, 'formAgama']);
    Route::get('/add-post-agama', [MDController::class, 'addPostAgama'])->name('agama.add');
    Route::post('/add-post-agama', [MDController::class, 'savePostAgama'])->name('agama.save');
    Route::get('/edit_agama/{kd_agama}', [MDController::class, 'editAgama'])->name('postagama.edit');
    Route::post('/update-post-agama', [MDController::class, 'updateAgama'])->name('updateagama.post');
    Route::get('/delete_mdagama/{kd_agama}', [MDController::class, 'deleteAgama'])->name('post.delete');


    Route::get('/md_pekerjaan', [MDController::class, 'mdp']);
    Route::get('/form_pekerjaan', [MDController::class, 'formPekerjaan']);
    Route::get('/add-post-pekerjaan', [MDController::class, 'addPostPekerjaan'])->name('pekerjaan.add');
    Route::post('/add-post-pekerjaan', [MDController::class, 'savePostPekerjaan'])->name('pekerjaan.save');
    Route::get('/edit_pekerjaan/{kd_pekerjaan}', [MDController::class, 'editPekerjaan'])->name('postpekerjaan.edit');
    Route::post('/update-post-pekerjaan', [MDController::class, 'updatePekerjaan'])->name('updatepekerjaan.post');
    Route::get('/delete_pekerjaan/{kd_pekerjaan}', [MDController::class, 'deletePekerjaan'])->name('post.delete');


    Route::get('/md_pendidikan', [MDController::class, 'mdPendidikan']);
    Route::get('/form_pendidikan', [MDController::class, 'formPendidikan']);
    Route::get('/add-post-pendidikan', [MDController::class, 'addPostPendidikan'])->name('pendidikan.add');
    Route::post('/add-post-pendidikan', [MDController::class, 'savePostPendidikan'])->name('pendidikan.save');
    Route::get('/edit_pendidikan/{kd_pendidikan}', [MDController::class, 'editPendidikan'])->name('postpendidikan.edit');
    Route::post('/update-post-pendidikan', [MDController::class, 'updatePendidikan'])->name('updatependidikan.post');
    Route::get('/delete_pendidikan/{kd_pendidikan}', [MDController::class, 'deletePendidikan'])->name('post.delete');

    Route::get('/md_ekonomi', [MDController::class, 'mdEkonomi']);
    Route::get('/form_ekonomi', [MDController::class, 'formEkonomi']);
    Route::get('/add-post-ekonomi', [MDController::class, 'addPostEkonomi'])->name('ekonomi.add');
    Route::post('/add-post-ekonomi', [MDController::class, 'savePostEkonomi'])->name('ekonomi.save');
    Route::get('/edit_ekonomi/{kd_level_ekonmi}', [MDController::class, 'editEkonomi'])->name('postekonomi.edit');
    Route::post('/update-post-ekonomi', [MDController::class, 'updateEkonomi'])->name('updateekonomi.post');
    Route::get('/delete_ekonomi/{kd_level_ekonomi}', [MDController::class, 'deleteEkonomi'])->name('post.delete');

    Route::get('/md_keahlian', [MDController::class, 'mdKeahlian']);
    Route::get('/form_mdkeahlian', [MDController::class, 'fk']);
    Route::get('/add-post-mdkeahlian', [MDController::class, 'addPostMDKeahlian'])->name('mdkeahlian.add');
    Route::post('/add-post-mdkeahlian', [MDController::class, 'savePostMDKeahlian'])->name('mdkeahlian.save');
    Route::get('/edit_mdkeahlian/{kd_keahlian}', [MDController::class, 'editMDKeahlian'])->name('postMdKeahlian.edit');
    Route::post('/update-post-mdkeahlian', [MDController::class, 'updateMDKeahlian'])->name('updateMdKeahlian.post');
    Route::get('/delete_mdkeahlian/{kd_keahlian}', [MDController::class, 'deleteMDKeahlian'])->name('post.delete');


    Route::get('/md_rumah', [JamaahController::class, 'mdrumah']);
    Route::get('/form_rumah', [MDController::class, 'formRumah']);
    Route::get('/form_rumah', [MDController::class, 'formInputRumah']);
    Route::get('/add-post-rumah', [MDController::class, 'addPostRumah'])->name('rumah.add');
    Route::post('/add-post-rumah', [MDController::class, 'savePostRumah'])->name('rumah.save');
    Route::get('/edit_mdrumah/{kd_rumah}', [MDController::class, 'editRumah'])->name('postrumah.edit');
    Route::post('/update-post-rumah', [MDController::class, 'updateRumah'])->name('updaterumah.post');
    Route::get('/delete_mdrumah/{no_rumah}', [MDController::class, 'deleteRumah'])->name('post.delete');

    Route::get('/md_rw', [JamaahController::class, 'mdrw']);
    Route::get('/form_rw', [MDController::class, 'formRW']);
    Route::get('/add-post-rw', [MDController::class, 'addPostRW'])->name('rw.add');
    Route::post('/add-post-rw', [MDController::class, 'savePostRW'])->name('rw.save');
    Route::get('/edit_mdrw/{no_rw}', [MDController::class, 'editRW'])->name('postrw.edit');
    Route::post('/update-post-rw', [MDController::class, 'updateRW'])->name('updaterw.post');
    Route::get('/delete_mdrw/{no_rw}', [MDController::class, 'deleteRW'])->name('post.delete');

    Route::get('/md_rt', [JamaahController::class, 'mdrt']);
    Route::get('/form_rt', [MDController::class, 'formRT']);
    Route::get('/add-post-rt', [MDController::class, 'addPostRT'])->name('rt.add');
    Route::post('/add-post-rt', [MDController::class, 'savePostRT'])->name('rt.save');
    Route::get('/edit_mdrt/{kd_rt}', [MDController::class, 'editRT'])->name('postrt.edit');
    Route::post('/update-post-rt', [MDController::class, 'updateRT'])->name('updatert.post');
    Route::get('/delete_mdrt/{kd_rt}', [MDController::class, 'deleteRT'])->name('post.delete');

    Route::get('/md_user', [JamaahController::class, 'mduser']); //done
    // Route::get('red_takmir/user', [JamaahController::class, 'edituser']);
    Route::get('/form_user', [MDController::class, 'formUser']); //done
    Route::get('/add-post-user', [MDController::class, 'addPostUser'])->name('user.add'); //done
    Route::post('/add-post-user', [MDController::class, 'savePostUser'])->name('user.save'); //done
    Route::get('/edit_user/{id}', [MDController::class, 'editUser'])->name('postuser.edit'); //done
    Route::post('/update-post-user', [MDController::class, 'updateUser'])->name('updateuser.post'); //done
    Route::get('/delete_user/{id}', [MDController::class, 'deleteUser'])->name('post.delete');


    Route::get('transaksi', [JamaahController::class, 'transaksi_datakk']);
    Route::get('transaksi', [PagesController::class, 'transaksi'])->name('transaksi');
    Route::get('transaksi', [JamaahController::class, 'joindkdi'])->name('JamaahController.joindkdi');
    Route::get('transaksi/{no_kk}', [PostDataKK::class, 'tampilTransaksi']);

    Route::get('/data_keahlian', [PagesController::class, 'data_keahlian']);
    Route::get('/data_keahlian', [JamaahController::class, 'joinkj'])->name('JamaahController.joinkj');

    Route::get('/golongan_darah', [PagesController::class, 'golongan_darah']);
    Route::get('/golongan_darah', [JamaahController::class, 'joingd'])->name('JamaahController.joingd');

    Route::get('/pekerjaan', [PagesController::class, 'pekerjaan']);
    Route::get('/pekerjaan', [JamaahController::class, 'joinpk'])->name('JamaahController.joinpk');

    Route::get('/pendidikan', [PagesController::class, 'pendidikan']);
    Route::get('/pendidikan', [JamaahController::class, 'joinpd'])->name('JamaahController.joinpd');

    Route::get('/baca', [JamaahController::class, 'baca']);

    Route::get('/form_datakk', [PagesController::class, 'form_datakk']);
    Route::get('/form_datainduk', [PagesController::class, 'form_datainduk']);

    ///FORMULIR///
    Route::get('/add-post-di', [PostDataInduk::class, 'addPostDI'])->name('postdi.add');
    Route::post('/add-post-di', [PostDataInduk::class, 'savePostDI'])->name('savedi.post');

    Route::get('/add-post-dkk', [PostDataKK::class, 'addPostDKK'])->name('postdkk.add');
    Route::post('/add-post-dkk', [PostDataKK::class, 'savePostDKK'])->name('savedkk.post');

    Route::get('/edit_data_induk/{kd_induk}', [PostDataInduk::class, 'editPost'])->name('postdi.edit');
    Route::post('/update-post-di', [PostDataInduk::class, 'updatePost'])->name('updatedi.post');
    Route::get('/delete_data_induk/{kd_induk}', [PostDataInduk::class, 'deletePost'])->name('post.delete');

    Route::get('/edit_dkk/{no_kk}', [PostDataKK::class, 'editPost'])->name('postdkk.edit');
    Route::post('/update-post-dkk', [PostDataKK::class, 'updatePost'])->name('updatedkk.post');
    Route::get('/delete_data_kk/{no_kk}', [PostDataKK::class, 'deletePost'])->name('post.delete');

    // Route::get('/tambah-anggota/{no_kk}', [PostDataKK::class, 'tambahAnggota'])->name('tambah.post');
    Route::get('transaksi_datainduk/{no_kk}', [PostDataKK::class, 'transaksi_datainduk']);
    Route::post('tambah-anggota', [PostDataKK::class, 'saveTambahAnggota'])->name('save.tambah');

    Route::get('red_takmir', [JamaahController::class, 'hometakmir']);
    Route::get('red_takmir/warga', [JamaahController::class, 'wargatakmir']);
    Route::get('red_takmir/datakk', [JamaahController::class, 'datakktakmir']);
    Route::get('red_takmir/usia', [JamaahController::class, 'usiatakmir']);
    Route::get('red_takmir/ekonomi', [JamaahController::class, 'ekonomitakmir']);
    Route::get('red_takmir/pekerjaan', [JamaahController::class, 'pekerjaantakmir']);
    Route::get('red_takmir/pendidikan', [JamaahController::class, 'pendidikantakmir']);
    Route::get('red_takmir/agama', [JamaahController::class, 'agamatakmir']);
    Route::get('red_takmir/keahlian', [JamaahController::class, 'takmirkeahlian']);
    Route::get('red_takmir/gol_darah', [JamaahController::class, 'goldarahtakmir']);
    Route::get('red_takmir/baca', [JamaahController::class, 'bacatakmir']);
    Route::get('red_takmir/user', [JamaahController::class, 'edituser']);
    //Route::get('/takmir/detail', [TakmirController::class, 'detail'])
    //Route::get('/takmir/detail2', [TakmirController::class, 'detail2']);
    //Route::get('/takmir/detail13', [TakmirController::class, 'detail13']);

    Route::get('red_rw', [JamaahController::class, 'home']);
    Route::get('red_rw/warga', [JamaahController::class, 'warga']);
    Route::get('red_rw/datakk', [JamaahController::class, 'data_kk']);
    Route::get('red_rw/ekonomi', [JamaahController::class, 'ekonomi']);
    Route::get('red_rw/pekerjaan', [JamaahController::class, 'pekerjaan']);
    Route::get('red_rw/pendidikan', [JamaahController::class, 'pendidikan']);
    Route::get('red_rw/agama', [JamaahController::class, 'agama']);
    Route::get('red_rw/keahlian', [JamaahController::class, 'rwkeahlian']);
    Route::get('red_rw/gol_darah', [JamaahController::class, 'goldarah']);


    Route::get('red_pkk', [JamaahController::class, 'homepkk']);
    Route::get('red_pkk/warga', [JamaahController::class, 'wargapkk']);
    Route::get('red_pkk/pekerjaan', [JamaahController::class, 'pekerjaanpkk']);
    Route::get('red_pkk/keahlian', [JamaahController::class, 'keahlianpkk']);


    Route::get('red_kt', [JamaahController::class, 'homekt']);
    Route::get('red_kt/warga', [JamaahController::class, 'wargakt']);
    Route::get('red_kt/laki', [JamaahController::class, 'laki']);
    Route::get('red_kt/perempuan', [JamaahController::class, 'perempuan']);
    Route::get('red_kt/karangtaruna', [JamaahController::class, 'anggotakt']);
    Route::get('red_kt/keahlian', [JamaahController::class, 'keahliankt']);
});

Route::middleware(['karangtaruna'])->group(function () {
    Route::get('/kt', [KTController::class, 'home']);
    Route::get('/kt/warga', [KTController::class, 'warga']);
    Route::get('/kt/laki', [KTController::class, 'laki']);
    Route::get('/kt/perempuan', [KTController::class, 'perempuan']);
    Route::get('/kt/karangtaruna', [KTController::class, 'anggota']);
    Route::get('/kt/keahlian', [KTController::class, 'keahliankt']);

    //detail
    Route::get('/kt/detail', [KTController::class, 'detail']);
    Route::get('/kt/detail2', [KTController::class, 'detail2']);
    Route::get('/kt/detail13', [KTController::class, 'detail13']);
});

Route::middleware(['pkk'])->group(function () {
    Route::get('/pkk', [PkkController::class, 'home']);
    Route::get('/pkk/warga', [PkkController::class, 'warga']);
    Route::get('/pkk/pkk', [PkkController::class, 'pkk']);
    Route::get('/pkk/kwt', [PkkController::class, 'kwt']);
    Route::get('/pkk/pekerjaan', [PkkController::class, 'pekerjaan']);
    Route::get('/pkk/keahlian', [PkkController::class, 'keahlian']);
    Route::get('/pkk/detail', [PkkController::class, 'detail']);
    Route::get('/pkk/detail2', [PkkController::class, 'detail2']);
    Route::get('/pkk/detail13', [PkkController::class, 'detail13']);
});

Route::middleware(['rw'])->group(function () {
    Route::get('/rw', [RwController::class, 'home']);
    Route::get('/rw/warga', [RwController::class, 'warga']);
    Route::get('/rw/datakk', [RwController::class, 'datakk']);
    Route::get('/rw/usia', [RwController::class, 'usia']);
    Route::get('/rw/ekonomi', [RwController::class, 'ekonomi']);
    Route::get('/rw/pekerjaan', [RwController::class, 'pekerjaan']);
    Route::get('/rw/pendidikan', [RwController::class, 'pendidikan']);
    Route::get('/rw/agama', [RwController::class, 'agama']);
    Route::get('/rw/keahlian', [RwController::class, 'rwkeahlian']);
    Route::get('/rw/gol_darah', [RwController::class, 'goldarah']);
    Route::get('/rw/detail', [RwController::class, 'detail']);
    Route::get('/rw/detail2', [RwController::class, 'detail2']);
    Route::get('/rw/detail13', [RwController::class, 'detail13']);
});

Route::middleware(['takmir'])->group(function () {
    Route::get('/takmir', [TakmirController::class, 'home']);
    Route::get('/takmir/warga', [TakmirController::class, 'warga']);
    Route::get('/takmir/datakk', [TakmirController::class, 'datakk']);
    Route::get('/takmir/usia', [TakmirController::class, 'usia']);
    Route::get('/takmir/ekonomi', [TakmirController::class, 'ekonomi']);
    Route::get('/takmir/pekerjaan', [TakmirController::class, 'pekerjaan']);
    Route::get('/takmir/pendidikan', [TakmirController::class, 'pendidikan']);
    Route::get('/takmir/agama', [TakmirController::class, 'agama']);
    Route::get('/takmir/keahlian', [TakmirController::class, 'keahlian']);
    Route::get('/takmir/gol_darah', [TakmirController::class, 'goldarah']);
    Route::get('/takmir/baca', [TakmirController::class, 'baca']);
    Route::get('/takmir/user', [TakmirController::class, 'edituser']);
    Route::get('/takmir/detail', [TakmirController::class, 'detail']);
    Route::get('/takmir/detail2', [TakmirController::class, 'detail2']);
    Route::get('/takmir/detail13', [TakmirController::class, 'detail13']);
    Route::get('/md_user', [TakmirController::class, 'mduser']); 
    Route::get('/form_user', [MDController::class, 'formUser']); 
    Route::get('/add-post-user', [MDController::class, 'addPostUser'])->name('user.add'); 
    Route::post('/add-post-user', [MDController::class, 'savePostUser'])->name('user.save'); 
    Route::get('/edit_user/{id}', [MDController::class, 'editUser'])->name('postuser.edit'); 
    Route::post('/update-post-user', [MDController::class, 'updateUser'])->name('updateuser.post'); 
    Route::get('/delete_user/{id}', [MDController::class, 'deleteUser'])->name('post.delete');
});

    // x = counter['anak', 'remaja', 'manula']
    // get x

// // Route::middleware(['takmir'])->group(function () {
     // Route::get('/takmir', [TakmirController::class, 'home']);
     
     //Route::get('/takmir/jeniskelamin', 'App\Http\Controllers\RwController@jeniskelamin');
// });



Route::get('/logout', [GoogleController::class, 'logout'])->name('logout');
