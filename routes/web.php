<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('create-admin',function(){
    \DB::table('users')->insert([
        'role'=>1,
        'name'=>'admin',
        'nisn'=>'1',
        'email'=>'admin@binusian.com',
        'id_registrasi'=>'-',
        'password'=>bcrypt('admin')
    ]);
});

Route::get('/', function () {
    $title = 'Binusians | STUDENT RECRUITMENT';
    return view('welcome', compact('title'));
});

Route::get('/pmb', 'App\Http\Controllers\PmbController@index');
Route::post('/pmb', 'App\Http\Controllers\PmbController@store');

Auth::routes();
Route::get('/home', function() {
    return redirect('dashboard');
});

Route::group(['middleware'=>'auth'],function() {
    Route::get('dashboard','App\Http\Controllers\Dashboard\Berandacontroller@index');

    Route::get('biodata','App\Http\Controllers\Dashboard\BiodataController@index');
    Route::post('biodata/{users}','App\Http\Controllers\Dashboard\BiodataController@store');
    Route::put('biodata/{users}','App\Http\Controllers\Dashboard\BiodataController@update');

    // cetak biodata
    Route::get('cetak-biodata','App\Http\Controllers\Dashboard\BiodataController@cetak');
    
    // verifikasi peserta
    Route::get('verifikasi','App\Http\Controllers\Dashboard\VerifikasiController@index');
    Route::post('verifikasi','App\Http\Controllers\Dashboard\VerifikasiController@verifikasi');

     // Data peserta
    Route::get('peserta','App\Http\Controllers\Dashboard\PesertaController@index');
    Route::get('peserta/verifikasi','App\Http\Controllers\Dashboard\PesertaController@diverifikasi');
    Route::get('peserta/belum-verifikasi','App\Http\Controllers\Dashboard\PesertaController@belum_verifikasi');

    Route::get('peserta/{id}','App\Http\Controllers\Dashboard\PesertaController@edit');
    Route::put('peserta/{id}','App\Http\Controllers\Dashboard\PesertaController@update');
    Route::delete('peserta/{id}','App\Http\Controllers\Dashboard\PesertaController@delete');
    Route::get('peserta/{id}/lulus','App\Http\Controllers\Dashboard\PesertaController@lulus');
    
    // profile kampus
    Route::get('profile-kampus','App\Http\Controllers\Dashboard\ProfileKampusController@index');
    Route::put('profile-kampus','App\Http\Controllers\Dashboard\ProfileKampusController@update');

    // pesan
    Route::get('pesan','App\Http\Controllers\Dashboard\PesanController@index');
    Route::get('pesan/add','App\Http\Controllers\Dashboard\PesanController@add');
    Route::post('pesan/add','App\Http\Controllers\Dashboard\PesanController@store');

    Route::get('pesan/{id}','App\Http\Controllers\Dashboard\PesanController@detail');

});

Route::get('keluar',function()
{
    \Auth::logout();
    return redirect('/');
});
