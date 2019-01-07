<?php

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

 Route::get('/index', function () {
     return view('index');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/ceklaporan', function () {
    return view('ceklaporan');
});
Route::get('/instruksi', function () {
    return view('instruksi');
});
Route::get('/konfirmasi', function () {
    return view('konfirmasi');
});
Route::get('konfirmasidaerah', function () {
    return view('konfirmasidaerah');
});
Route::get('/konfirmasidinas', function () {
    return view('konfirmasidinas');
});
Route::get('/lacak', function () {
    return view('lacak');
});
Route::get('/laporan', function () {
    return view('laporan');
});
Route::get('/laporaninstruksi', function () {
    return view('laporaninstruksi');
});
Route::get('/manajerlaporan', function () {
    return view('manajerlaporan');
});
Route::get('/maps', function () {
    return view('maps');
});
Route::get('/masyarakat', function () {
    return view('masyarakat');
});
Route::get('/pesanlaporan', function () {
    return view('pesanlaporan');
});
Route::get('/rekap', function () {
    return view('rekap');
});
Route::get('/rekapitulasi', function () {
    return view('rekapitulasi');
});
Route::get('/rekapitulasiBPBD', function () {
    return view('rekapitulasiBPBD');
});
Route::get('/tabel', function () {
    return view('tabel');
});
Route::get('/tindaklanjut', function () {
    return view('tindaklanjut');	
});
Route::get('/tindaklanjutdinas', function () {
    return view('tindaklanjutdinas');
});
Route::get('/validasi', function () {
    return view('validasi');
});
Route::get('/validasibdpb', function () {
    return view('validasibdpb');
});
Route::get('/#about', function () {
    return view('#about');
});
// Route::get('/login', function () {
//     return view('login');
// });
Route::get('/profilbnpb', function () {
    return view('profilbnpb');
});
Route::get('/profilbdpb', function () {
    return view('profilbdpb');
});
Route::get('/profildinas', function () {
    return view('profildinas');
});
Route::get('/masuk', function () {
    return view('masuk');
});
Route::get('/cek_login', function () {
    return view('cek_login');
});
Route::get('/register', function()
{
    return View::make('register');
});
Route::get('/daftar', function()
{
    return View::make('daftar');
});
Route::post('/register', function()
{
    var_dump($_POST);
});
Route::get('/form-laporan', function()
{
    return View::make('form-laporan');
});
Route::get('/list-laporan', function()
{
    return View::make('list-laporan');
});
Route::get('/form2', function()
{
    return View::make('form2');
});
Route::get('/daftarbdpb', function()
{
    return View::make('daftarbdpb');
});
Route::get('/daftardinas', function()
{
    return View::make('daftardinas');
});
Route::get('cari', function()
{
    return View::make('cari');
});
Route::get('detail', function()
{
    return View::make('detail');
});
Route::get('rekapitulasidinas', function()
{
    return View::make('rekapitulasidinas');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
