<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::post('login', 'Api\LoginController@postLogin');
Route::get('dashboard', 'Api\DashboardController@getData');

// Route::put('profile', 'Api\ProfileController@putUpdatePassword');


// AJAX request
Route::get('ajax/kegiatan/{program}', 'Api\AjaxController@show_kegiatan_by_program');
Route::get('ajax/belanja/{kegiatan}', 'Api\AjaxController@show_belanja_by_kegiatan');
Route::post('ajax/sisa_anggaran', 'Api\AjaxController@show_sisa_anggaran');
Route::post('ajax/total_anggaran', 'Api\AjaxController@show_total_anggaran');
Route::post('ajax/golongan', 'Api\AjaxController@show_golongan_by_pangkat');
Route::get('ajax/dinasbop/tujuan/{irban}', 'Api\AjaxController@show_tujuan_bop');
Route::get('ajax/dinasbop/personil/{irban}', 'Api\AjaxController@show_personil_bop');
Route::get('ajax/dinasregular/tujuan/{irban}', 'Api\AjaxController@show_tujuan_regular');
Route::get('ajax/dinasregular/personil/{irban}', 'Api\AjaxController@show_personil_regular');
Route::post('ajax/totalhargabbm', 'Api\AjaxController@show_harga_bbm');

// irban
Route::get('irban', 'Api\IrbanController@get_data');
Route::get('irban/{id}', 'Api\IrbanController@show_data');
Route::post('irban', 'Api\IrbanController@post_data');
Route::put('irban', 'Api\IrbanController@put_data');
Route::delete('irban', 'Api\IrbanController@delete_data');

// irban - skpd
Route::get('irbanskpd', 'Api\IrbanSkpdController@get_data');
Route::get('irbanskpd/{id}', 'Api\IrbanSkpdController@show_data');
Route::post('irbanskpd', 'Api\IrbanSkpdController@post_data');
Route::put('irbanskpd', 'Api\IrbanSkpdController@put_data');
Route::delete('irbanskpd', 'Api\IrbanSkpdController@delete_data');

// irban - kabkota
Route::get('irbankabkota', 'Api\IrbanPerangkatKotaController@get_data');
Route::get('irbankabkota/{id}', 'Api\IrbanPerangkatKotaController@show_data');
Route::post('irbankabkota', 'Api\IrbanPerangkatKotaController@post_data');
Route::put('irbankabkota', 'Api\IrbanPerangkatKotaController@put_data');
Route::delete('irbankabkota', 'Api\IrbanPerangkatKotaController@delete_data');

// program
Route::get('program', 'Api\ProgramController@get_data');
Route::get('program/{id}', 'Api\ProgramController@show_data');
Route::post('program', 'Api\ProgramController@post_data');
Route::put('program', 'Api\ProgramController@put_data');
Route::delete('program', 'Api\ProgramController@delete_data');

// kegiatan
Route::get('kegiatan', 'Api\KegiatanController@get_data');
Route::get('kegiatan/{id}', 'Api\KegiatanController@show_data');
Route::post('kegiatan', 'Api\KegiatanController@post_data');
Route::put('kegiatan', 'Api\KegiatanController@put_data');
Route::delete('kegiatan', 'Api\KegiatanController@delete_data');

// belanja
Route::get('belanja', 'Api\BelanjaController@get_data');
Route::get('belanja/{id}', 'Api\BelanjaController@show_data');
Route::post('belanja', 'Api\BelanjaController@post_data');
Route::put('belanja', 'Api\BelanjaController@put_data');
Route::delete('belanja', 'Api\BelanjaController@delete_data');

// harian
Route::get('harian', 'Api\HarianController@get_data');
Route::get('harian/{id}', 'Api\HarianController@show_data');
Route::put('harian', 'Api\HarianController@put_data');

// akomodasi
Route::get('akomodasi', 'Api\AkomodasiController@get_data');
Route::get('akomodasi/{id}', 'Api\AkomodasiController@show_data');
Route::put('akomodasi', 'Api\AkomodasiController@put_data');

// bbm
Route::get('bbm', 'Api\BbmController@get_data');
Route::get('bbm/{id}', 'Api\BbmController@show_data');
Route::put('bbm', 'Api\BbmController@put_data');

// hargabbm
Route::get('hargabbm', 'Api\HargaBbmController@show_data');
Route::put('hargabbm', 'Api\HargaBbmController@put_data');

// bop
Route::get('bop', 'Api\BopController@get_data');
Route::get('bop/{id}', 'Api\BopController@show_data');
Route::put('bop', 'Api\BopController@put_data');

// pegawai
Route::get('pegawai', 'Api\PegawaiController@get_data');
Route::get('pegawai/{id}', 'Api\PegawaiController@show_data');
Route::post('pegawai', 'Api\PegawaiController@post_data');
Route::put('pegawai', 'Api\PegawaiController@put_data');
Route::delete('pegawai', 'Api\PegawaiController@delete_data');

// user
Route::get('user', 'Api\UserController@get_data');
Route::get('user/{id}', 'Api\UserController@show_data');
Route::post('user', 'Api\UserController@post_data');
Route::put('user', 'Api\UserController@put_data');
Route::delete('user', 'Api\UserController@delete_data');

// perangkat daerah
Route::get('perangkatdaerah', 'Api\PerangkatDaerahController@get_data');
Route::get('perangkatdaerah/{id}', 'Api\PerangkatDaerahController@show_data');
Route::post('perangkatdaerah', 'Api\PerangkatDaerahController@post_data');
Route::put('perangkatdaerah', 'Api\PerangkatDaerahController@put_data');
Route::delete('perangkatdaerah', 'Api\PerangkatDaerahController@delete_data');

// anggaran
Route::get('anggaran', 'Api\AnggaranController@get_data');
Route::get('anggaran/{belanja}/{tahun}', 'Api\AnggaranController@get_data_detail');
Route::get('anggaran/{id}', 'Api\AnggaranController@show_data');
Route::post('anggaran', 'Api\AnggaranController@post_data');
Route::put('anggaran', 'Api\AnggaranController@put_data');
Route::delete('anggaran', 'Api\AnggaranController@delete_data');

// dinas BOP
Route::get('dinasbop', 'Api\DinasBopController@get_data');
Route::get('dinasbop/{id}', 'Api\DinasBopController@show_data');
Route::get('dinasbop/print/sp/{id}', 'Api\DinasBopController@get_print_sp');
Route::get('dinasbop/print/spd/{id}', 'Api\DinasBopController@get_print_spd');
Route::get('dinasbop/print/rbpd/{id}', 'Api\DinasBopController@get_print_rbpd');
Route::get('dinasbop/print/personil/{id}', 'Api\DinasBopController@get_print_personil');
Route::get('dinasbop/print/personil/all/{id}', 'Api\DinasBopController@get_print_personil_all');
Route::get('dinasbop/print/dpbo/{id}', 'Api\DinasBopController@get_print_dpbo');
Route::post('dinasbop', 'Api\DinasBopController@post_data');
Route::put('dinasbop', 'Api\DinasBopController@put_data');
Route::delete('dinasbop', 'Api\DinasBopController@delete_data');
Route::post('dinasbop/tim/{dinasbop}', 'Api\DinasBopController@post_tim_data');
Route::post('dinasbop/tim/{dinasbop}/{id}', 'Api\DinasBopController@put_tim_data');
Route::delete('dinasbop/tim/{dinasbop}/{id}', 'Api\DinasBopController@delete_tim_data');

// dinas regular
Route::get('dinasregular', 'Api\DinasRegularController@get_data');
Route::get('dinasregular/{id}', 'Api\DinasRegularController@show_data');
Route::post('dinasregular', 'Api\DinasRegularController@post_data');
Route::put('dinasregular', 'Api\DinasRegularController@put_data');
Route::put('dinasregular/transportasi', 'Api\DinasRegularController@put_transportasi_data');
Route::delete('dinasregular', 'Api\DinasRegularController@delete_data');
Route::get('dinasregular/print/sp/{id}', 'Api\DinasRegularController@get_print_sp');
Route::get('dinasregular/print/spd/{id}', 'Api\DinasRegularController@get_print_spd');
Route::get('dinasregular/print/rbpd/{id}', 'Api\DinasRegularController@get_print_rbpd');
Route::get('dinasregular/print/personil/{id}', 'Api\DinasRegularController@get_print_personil');
Route::get('dinasregular/print/dpbo/{id}', 'Api\DinasRegularController@get_print_dpbo');
