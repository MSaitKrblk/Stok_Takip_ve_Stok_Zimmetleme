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


Route::get('/', 'HomeGetController@get_index');
//Route::get('/home', 'HomeGetController@get_home');
Route::get('/cikis','HomeGetController@get_cikisYap');
Route::get('/giris','HomeGetController@get_girisYap');


route::group(['prefix'=>'admin', 'middleware'=>'Admin'],function (){
    Route::get('/', 'adminGetController@get_index');
    Route::get('/personelEkle', 'adminGetController@get_personelEkle');
    Route::post('/personelEkle', 'adminPostController@post_personelEkle');
    Route::get('/personelListele/{id?}', 'adminGetController@get_personelListele');
    Route::get('/personelDuzenle/{id}', 'adminGetController@get_personelDuzenle');
    Route::post('/personelDuzenle', 'adminPostController@post_personelDuzenle');
    Route::get('/departmanEklePersonelEkle/', 'adminGetController@get_departmanEklePersonelEkle');
    Route::get('/departmanEkle/{personel_id}', 'adminGetController@get_departmanEkle');
    Route::post('/departmanEkle/', 'adminPostController@post_departmanEkle');
});

route::group(['prefix'=>'admin', 'middleware'=>'SatinAlma'],function (){
    Route::get('/', 'adminGetController@get_index');
    Route::get('/departmanListele/', 'adminGetController@get_departmanListele');
    Route::get('/urunEkle/', 'adminGetController@get_urunEkle');
    Route::post('/urunEkle/', 'adminPostController@post_urunEkle');
    Route::get('/urunListele', 'adminGetController@get_urunListele');
    Route::get('/urunBilesenListele/{id}', 'adminGetController@get_urunBilesenListele');
    Route::get('/urunBilesenEkle/{id}', 'adminGetController@get_urunBilesenEkle');
    Route::post('/urunBilesenEkle/', 'adminPostController@post_urunBilesenEkle');
    Route::get('/tedarikciEkle','adminGetController@get_tedarikciEkle');
    Route::post('/tedarikciEkle','adminPostController@post_tedarikciEkle');
    Route::get('/tedarikciListele','adminGetController@get_tedarikciListele');
    Route::get('/satinAlmaUrunSec','adminGetController@get_satinAlmaUrunSec');
    Route::get('/satinAlmaTedarikciListele/{id}','adminGetController@get_satinAlmaTedarikciSec');
    Route::get('/satinAlmaEkle/{urun_id}/{tedarikci_id}','adminGetController@get_satinAlmaEkle');
    Route::post('/satinAlmaEkle','adminPostController@post_satinAlmaEkle');
    Route::get('/satinAlmaListele','adminGetController@get_satinAlmaListele');
    Route::get('/urunZimmetlePersonelSec','adminGetController@get_urunZimmetlePersonelSec');
    Route::get('/urunZimmetUrunSec/{id}','adminGetController@get_urunZimmetUrunSec');
    Route::get('/urunZimmetle/{personel_id}/{urun_id}','adminGetController@get_urunZimmetle');
    Route::get('/urunZimmetKaldir/{zimmet_id}/{urun_id}','adminGetController@get_urunZimmetKaldır');
});


route::group(['prefix'=>'admin', 'middleware'=>'PersonelSefi'],function (){
    Route::get('/', 'adminGetController@get_index');
    Route::get('/urunZimmetListesi/','adminGetController@get_urunZimmetListesi');
    Route::get('/depoListesi/','adminGetController@get_depoListesi');
    Route::get('/depoUrunStokListele/{depo_id}','adminGetController@get_depoUrunStokListele');
    Route::get('/404/','adminGetController@get_404');
});


Auth::routes();

