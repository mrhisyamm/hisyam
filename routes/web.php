<?php

//use App\http\Controllers\Pesanan_DetailController;

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
Route::get('downloadd', function(){

    $filePath = 'Petunjuk_admin.pdf';

    if (Storage::exists("public/{$filePath}")) {
        return response()->download(storage_path("app/public/${filePath}"));
    }else{
        abort(404,'File Not Found');
    }
});
//route login user
// Auth::routes();
// Route::get('/Login', 'LoginController@index');
// Route::post('/Login', 'LoginController@authenticate')->name('Login');
// Route::post('/Login', [App\Http\Controllers\LoginController::class,'authenticate'])->middleware('guest');
//route register user
// Route::get('/Register', 'RegisterController@index');
// Route::post('/Register', 'RegisterController@store');
// });



Route::get('/customer/login', 'CustomerController@login')->name('customer.login');
Route::post('/customer/login', 'CustomerController@authenticate')->name('customer.authenticate');
Route::post('/customer/logout', 'CustomerController@logout')->name('customer.logout');
Route::get('/customer/register', 'CustomerController@index')->name('customer.register');
Route::post('/customer/register', 'CustomerController@register')->name('customer.register');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/customer', 'CustomerController@index');

Route::resource('barangs', 'BarangController');

Route::resource('Slide_Show', 'Slide_ShowController');

Route::resource('Profile', 'ProfileController');

Route::resource('kategori', 'KategoriController');


Route::resource('detailPenjualans', 'Detail_penjualanController');

Route::resource('penjualans', 'PenjualanController');

Route::resource('pembelians', 'PembelianController');

Route::resource('detailPembelians', 'Detail_pembelianController');

Route::resource('supliers', 'SuplierController');

Route::resource('users', 'UserController');

Route::resource('detailPenjualans', 'Detail_penjualanController');

Route::resource('detailPembelians', 'Detail_pembelianController');

Route::resource('detailPembelians', 'detail_pembelianController');

Route::resource('detailPenjualans', 'Detail_PenjualanController');

Route::resource('gaji_karyawan', 'Gaji_KaryawanController');

Route::resource('pembayaran_listrik', 'Pembayaran_ListrikController');

Route::resource('pembayaran_air', 'Pembayaran_AirController');


Route::get('laporan','LaporanController@index');


Route::get('laporan-tanggal','LaporanController@tanggal');
Route::get('chart');


Route::get('laporanp','Laporan_PembelianController@index');
Route::get('laporan-tanggal1','Laporan_PembelianController@tanggal');

Route::get('chart');



Route::get('laporanp','Laporan_PembelianController@index');
// Route::get('/cetak1', [App\Http\Controllers\cetakController::class,'cetak1'])->name('cetak1');
Route::get('laporan-bulanp','LaporanBulanPembelianController@Bulan');
// Route::get('/cetak1','Pesanan_DetailController@cetak1')->name('cetak1');
Route::get('chart');

Route::resource('returns', 'ReturnController');

Route::resource('detailRetunsPembelians', 'Detail_retuns_pembeliansController');

Route::resource('returnsPembelians', 'Returns_pembeliansController');

Route::resource('detailReturnsPenjualans', 'Detail_returns_penjualansController');

Route::resource('detailretunspenjualans', 'DetailretunspenjualanController');

Route::resource('retunspenjualans', 'RetunspenjualanController');

Route::resource('pembelianrs', 'PembelianrsController');

Route::resource('penjualanrs', 'PenjualanrsController');

Route::resource('detailpembelianrs', 'DetailpembelianrsController');

Route::resource('detailPembelianrs', 'Detail_pembelianrsController');

Route::resource('pembelianReturns', 'Pembelian_returnController');

Route::resource('detailReturns', 'Detail_returnController');

Route::resource('pembelian1s', 'Pembelian1Controller');

Route::resource('detailPembelian1s', 'Detail_pembelian1Controller');

Route::resource('pembelian12s', 'Pembelian12Controller');

Route::resource('detailPembelian1s', 'Detail_pembelian1Controller');

Route::resource('detailPembelian1s', 'Detail_pembelian1Controller');

Route::resource('penjualan1s', 'Penjualan1Controller');

Route::resource('detailPenjualan1s', 'Detail_penjualan1Controller');

Route::resource('beban', 'BebanController');

Route::get('/nota/{id}', 'PenjualanController@pdf');

// Route::get('/', 'PenjualanController@pdf');

Route::get('laporanps.cetak', [App\Http\Controllers\Laporan_PembelianController::class,'cetak'])->name('laporanps.cetak');

Route::get('/cetak', [App\Http\Controllers\LaporanController::class,'cetak'])->name('laporans.cetak');


// Laporan Laba
Route::get('Laporan_laba',[App\Http\Controllers\Laporan_labaController::class,'laba'])->name('Laporan_laba.laba');
Route::post('Laporan_laba/laba/cari',[App\Http\Controllers\Laporan_labaController::class,'laba_cari'])->name('Laporan_laba.laba_cari');
Route::get('Laporan_laba/print',[App\Http\Controllers\Laporan_labaController::class,'print'])->name('Laporan_laba.print');

Route::get('/profilep', [App\Http\Controllers\User\ProfilepController::class,'index'])->name('user.profilep.index');
Route::post('/profilep', [App\Http\Controllers\User\ProfilepController::class,'update']);

Route::get('/ongkir', 'OngkirController@index')->name('user.ongkir.index');
Route::get('/ongkir/getprovince', 'OngkirController@getprovince');
Route::get('/ongkir/getCities', 'OngkirController@getCities');
// Route::get('/pesan', 'PesanController@Pesan');
Route::post('ongkir/prosesongkir', 'OngkirController@submit')->name('user.ongkir.prosesongkir');
// Route::get('getCity/ajax/{id}', 'OngkirController@ajax');

Route::get('/pesan/{id}', [App\Http\Controllers\User\PesanController::class,'index'])->name('user.pesan.index');
Route::post('/pesan/{id}', [App\Http\Controllers\User\PesanController::class,'pesan'])->name('user.pesan.pesan');
Route::get('/check_out', [App\Http\Controllers\User\PesanController::class,'check_out'])->name('user.pesan.check_out');
Route::delete('/check_out/{id}', [App\Http\Controllers\User\PesanController::class,'delete'])->name('user.pesan.delete');
Route::get('/konfirmasi_check_out', [App\Http\Controllers\User\PesanController::class,'konfirmasi'])->name('user.pesan.konfirmasi');

Route::get('/history', [App\Http\Controllers\User\HistoryController::class,'index'])->name('user.history.index');
Route::get('/history', [App\Http\Controllers\User\HistoryController::class,'index'])->name('user.history.details');
Route::get('/cetak1/{id}', [App\Http\Controllers\Pesanan_DetailController::class,'cetak1'])->name('user.history.cetak1');
// Route::get('/cetak1', [App\Http\Controllers\cetakController::class,'cetak1'])->name('cetak1');
// Route::get('/cetak', [App\Http\Controllers\LaporanController::class,'cetak'])->name('laporans.cetak');

Route::get('/pesanan', [App\Http\Controllers\Pesanan_DetailController::class,'index'])->name('pesanan_detail.index');
Route::get('/pesanan/{id}', [App\Http\Controllers\Pesanan_DetailController::class,'details'])->name('pesanan_detail.details');
Route::get('/pesanan_detail/profile/{id}', [App\Http\Controllers\PesananController::class,'profile'])->name('pesanan_detail.profile');
//Route::get('/pesanan/{id}', [App\Http\Controllers\Pesanan_DetailController::class,'update'])->name('pesanan_detail.update');
// Route::get('/pesanan', [App\Http\Controllers\User\PesananController::class,'cart']);

Route::resource('pesanan_details', 'Pesanan_DetailController');
//Route::get('pesanan_details','Pesanan_DetailController@tgl');
//Route::get('pesanan_details-tanggal1','Pesanan_DetailController@tanggal');
Route::get('pesanan_details-tanggal1','Pesanan_DetailController@tanggal');
Route::put('pesanan_details/status/{id}', [App\Http\Controllers\Pesanan_DetailController::class,'status'])->name('pesanan_details.status');
//pilih layanan Kurir
Route::put('pesanan_details/layanan/{id}', [App\Http\Controllers\Pesanan_DetailController::class,'layanan'])->name('pesanan_details.layanan');

Route::get('/history/{id}', [App\Http\Controllers\User\HistoryController::class,'detail'])->name('user.history.detail');
//Route::get('/history/{id}', [App\Http\Controllers\User\HistoryController::class,'update'])->name('user.history.update');

Route::get('/barang/{id}', [App\Http\Controllers\User\BarangController::class,'kategori_barang'])->name('user.barang.kategori');

Route::get('/barang', [App\Http\Controllers\User\BarangController::class,'index'])->name('user.barang.index');
Route::get('/galeri', [App\Http\Controllers\User\GaleriController::class,'index'])->name('user.galeri.index');
Route::get('/slide_show', [App\Http\Controllers\User\Slide_ShowController::class,'index'])->name('user.slide_show.index');
//Route::get('/kategori_barang', [App\Http\Controllers\User\Kategori_BarangController::class,'index'])->name('user.kategori_barang.index');
Route::get('/profile', [App\Http\Controllers\User\ProfileController::class,'index'])->name('user.profile.index');

Route::get('about',[App\Http\Controllers\aboutcontroller::class,'index'])->name('about.index');

