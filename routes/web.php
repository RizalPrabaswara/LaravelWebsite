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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');

Route::get('/mgame', [App\Http\Controllers\MGameController::class, 'lihatdata'])->name('mgame');

Route::get('/mplatform', [App\Http\Controllers\MPlatformController::class, 'lihatdata'])->name('mplatform');

Route::get('/msupplier', [App\Http\Controllers\MSupplierController::class, 'lihatdata'])->name('msupplier');

Route::get('/ttransaksi', [App\Http\Controllers\TTransaksi::class, 'lihatdata'])->name('tgame');

Route::get('/ttopup', [App\Http\Controllers\TTopup::class, 'lihatdata'])->name('ttopup');


Route::get('/formmgame', function () {
    return view('formmgame');
});

Route::get('/formmsupplier', function () {
    return view('formmsupplier');
});

Route::get('/formmplatform', function () {
    return view('formmplatform');
});

//Master Game
Route::get('formeditmgame/{id}','App\Http\Controllers\MGameController@editdata');

Route::post('prosesedit','App\Http\Controllers\MGameController@proseseditdata');

Route::post('prosestambah','App\Http\Controllers\MGameController@prosestambahdata');

Route::get('hapus/{id}','App\Http\Controllers\MGameController@hapusdata');

//Master Platform
Route::get('formeditmplatform/{id}','App\Http\Controllers\MPlatformController@editdata');

Route::post('prosesedit2','App\Http\Controllers\MPlatformController@proseseditdata');

Route::post('prosestambah2','App\Http\Controllers\MPlatformController@prosestambahdata');

Route::get('hapus2/{id}','App\Http\Controllers\MPlatformController@hapusdata');

//Master Supplier
Route::get('formeditmsupplier/{id}','App\Http\Controllers\MSupplierController@editdata');

Route::post('prosesedit3','App\Http\Controllers\MSupplierController@proseseditdata');

Route::post('prosestambah3','App\Http\Controllers\MSupplierController@prosestambahdata');

Route::get('hapus3/{id}','App\Http\Controllers\MSupplierController@hapusdata');

//transaksi game
 Route::get('formdetailttransaksi/{id}','App\Http\Controllers\TTransaksi@editdata');

// Route::post('prosesedit4/{id}','App\Http\Controllers\TTransaksi@proseseditdata');

Route::post('prosestambah4','App\Http\Controllers\TTransaksi@prosestambahdata');

Route::get('hapus4/{id}','App\Http\Controllers\TTransaksi@hapusdata');

//transaksi topup
Route::get('formdetailttopup/{id}','App\Http\Controllers\TTopup@editdata');

// Route::post('prosesedit4/{id}','App\Http\Controllers\TTopup@proseseditdata');

Route::post('prosestambah5','App\Http\Controllers\TTopup@prosestambahdata');

Route::get('hapus5/{id}','App\Http\Controllers\TTopup@hapusdata');