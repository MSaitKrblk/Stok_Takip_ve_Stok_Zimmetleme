<?php

namespace App\Http\Controllers;

use App\stok;
use App\urunBilesen;
use App\urunEmanet;
use Illuminate\Http\Request;
use App\adres;
use App\personel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class adminGetController extends adminController
{

    public function  get_index(){
        return view('adminPanel.index');
    }
    public function  get_personelEkle(){
        $departman=DB::select('select * from departman ');
        $rol=DB::select('select * from rol ');
        return view('adminPanel.personelEkle',['departman'=>$departman],['rol'=>$rol]);
    }
    public function get_personelListele(){
        $gPersonel =  DB::table('kullanicilar')
            ->join('personel', 'kullanicilar.personel_id', '=', 'personel.id')
            ->join('adres', 'adres.id', '=', 'personel.adres_id')
            ->join('departman', 'departman.id', '=', 'personel.departman_id')
            ->join('rol', 'kullanicilar.rol_id', '=', 'rol.id')
            ->select('kullanicilar.*', 'personel.*', 'adres.*','rol.*','departman.*')
            ->get();
        return view('adminPanel.personelListele',['personelBilgi'=>$gPersonel]);
    }
    public function get_personelDuzenle($id){
        $gPersonel =  DB::table('kullanicilar')
            ->join('personel', 'kullanicilar.personel_id', '=', 'personel.id')
            ->join('adres', 'adres.id', '=', 'personel.adres_id')
            ->join('departman', 'departman.id', '=', 'personel.departman_id')
            ->join('rol', 'kullanicilar.rol_id', '=', 'rol.id')
            ->select('kullanicilar.*','kullanicilar.id as kullanicilar', 'personel.*', 'adres.*','rol.*','departman.*')
            ->where('personel.id','=',$id)
            ->get();
        return view('adminPanel.personelDuzenle',['gPersonel'=>$gPersonel]);
    }
    public function get_departmanEklePersonelEkle(){
        $gPersonel =  DB::table('kullanicilar')
            ->join('personel', 'kullanicilar.personel_id', '=', 'personel.id')
            ->join('adres', 'adres.id', '=', 'personel.adres_id')
            ->join('departman', 'departman.id', '=', 'personel.departman_id')
            ->join('rol', 'kullanicilar.rol_id', '=', 'rol.id')
            ->select('kullanicilar.*', 'personel.*', 'adres.*','rol.*','departman.*')
            ->get();
        return view('adminPanel.departmanEklePersonelSec',['gPersonel'=>$gPersonel]);
    }
    public function get_departmanEkle($personel_id){
        return view('adminPanel.departmanEkle',['personel_id'=>$personel_id]);
    }
    public function get_departmanListele(){
        $gPersonel =  DB::table('departman')
            ->join('personel', 'departman.yonetici_id', '=', 'personel.id')
            ->select('personel.*','departman.*')
            ->get();
        return view('adminPanel.departmanListele',['personelBilgi'=>$gPersonel]);
    }
    public function get_urunEkle(){
        return view('adminPanel.urunEkle');
    }
    public function get_urunListele(){
        $gUrun =  DB::table('urun')
            ->select('urun.*')
            ->get();
        return view('adminPanel.urunListele',['urunBilgi'=>$gUrun]);
    }
    public function get_urunBilesenListele($id){
        $gUrunBilesen =  DB::table('urunbilesen')
            ->select('urunbilesen.*')
            ->where('urun_id','=',$id)
            ->get();
        return view('adminPanel.urunBilesenListele',['urunBilesenListesi'=>$gUrunBilesen],['urun_id'=>$id]);
    }
    public function get_urunBilesenEkle($id){
        return view('adminPanel.urunBilesenEkle',['urun_id'=>$id]);
    }
    public function get_tedarikciEkle(){
        return view('adminPanel.tedarikciEkle');
    }
    public function get_tedarikciListele(){
        $gTedarikci =  DB::table('tedarikci')
            ->join('adres', 'adres.id', '=', 'tedarikci.adres_id')
            ->select( 'tedarikci.*','adres.*')
            ->get();
        return view('adminPanel.tedarikciListele',['tedarikciBilgi'=>$gTedarikci]);
    }
    public function get_satinAlmaUrunSec(){
        $gUrun =  DB::table('urun')
            ->select('urun.*')
            ->get();
        return view('adminPanel.satinAlmaUrunListesi',['urunBilgi'=>$gUrun]);
    }
    public function get_satinAlmaTedarikciSec($id){
        $gTedarikci =  DB::table('tedarikci')
            ->join('adres', 'adres.id', '=', 'tedarikci.adres_id')
            ->select( 'tedarikci.*','adres.il')
            ->get();
        return view('adminPanel.satinAlmaTedarikciListesi',['tedarikciBilgi'=>$gTedarikci],['urun_id'=>$id]);
    }
    public function get_satinAlmaEkle($urun_id,$tedarikci_id){
        return view('adminPanel.satinAlmaEkle',['tedarikci_id'=>$tedarikci_id],['urun_id'=>$urun_id]);
    }
    public function get_satinAlmaListele(){
        $gSatinAlma =  DB::table('satinalma')
            ->join('tedarikci', 'satinalma.tedarikci_id', '=', 'tedarikci.id')
            ->join('urun', 'urun.id', '=', 'satinalma.urun_id')
            ->select('satinalma.*', 'tedarikci.*','urun.*')
            ->get();
        return view('adminPanel.satinAlmaListele',['gSatinAlma'=>$gSatinAlma]);
    }
    public function get_urunZimmetlePersonelSec(){
        $gPersonel =  DB::table('kullanicilar')
            ->join('personel', 'kullanicilar.personel_id', '=', 'personel.id')
            ->join('adres', 'adres.id', '=', 'personel.adres_id')
            ->join('departman', 'departman.id', '=', 'personel.departman_id')
            ->join('rol', 'kullanicilar.rol_id', '=', 'rol.id')
            ->select('kullanicilar.*', 'personel.*', 'adres.*','rol.*','departman.*')
            ->get();
        return view('adminPanel.urunZimmetlePersonelSec',['personelBilgi'=>$gPersonel]);
    }
    public function get_urunZimmetUrunSec($id){
        $gStok =DB::table('stok')
            ->join('urun','urun.id','=','stok.urun_id')
            ->select('urun.*','stok.miktar')
            ->where('depo_id','=','1')
            ->get();
        return view('adminPanel.urunZimmetleUrunSec',['stokBilgi'=>$gStok],['personel_id'=>$id]);
    }
    public function get_urunZimmetle($personel_id, $urun_id){
        $yUrunEmanet=new urunEmanet();
        $yUrunEmanet->personel_id=$personel_id;
        $yUrunEmanet->urun_id=$urun_id;
        $yUrunEmanet->save();
        $yStok=stok::updateOrCreate([
            'urun_id'=>$urun_id,
            'depo_id'=>'1'],[
            ]
        );
        $yStok->miktar-=1;
        if($yStok->save()){
            return redirect('/admin/urunZimmetListesi');
        }
    }
    public function get_urunZimmetListesi(){
        $zStok =DB::table('urunemanet')
            ->join('urun','urun.id','=','urunemanet.urun_id')
            ->join('personel','personel.id','=','urunemanet.personel_id')
            ->select('urun.*','urunemanet.*','personel.ad')
            ->get();
        return view('adminPanel.urunZimmetListesi',['zimmetBilgi'=>$zStok]);
    }
    public function get_urunZimmetKaldır($zimmet_id,$urun_id){
        $yStok=stok::updateOrCreate([
            'urun_id'=>$urun_id,
            'depo_id'=>'2'],[
            ]
        );
        $yStok->miktar+=1;
        if($yStok->save()){
            $yUrunEmanet=urunEmanet::find($zimmet_id);
            $yUrunEmanet->delete();
            echo "tamam tamam";
            return redirect('admin/urunZimmetListesi');

        }
    }
    public function get_depoListesi(){
        $gDepo =DB::table('depo')
            ->select('depo.*')
            ->get();
        return view('adminPanel.depoListele',['gDepo'=>$gDepo]);
    }
    public function get_depoUrunStokListele($depo_id){
        $gStok =DB::table('stok')
            ->join('urun','urun.id','=','stok.urun_id')
            ->select('urun.*','stok.miktar')
            ->where('depo_id','=',$depo_id)
            ->get();
        return view('adminPanel.depoUrunListele',['stokBilgi'=>$gStok]);
    }
    public function get_404(){
        return view('adminPanel.yetkisizErisim');
    }


    public function get_cikisYap(){
        //Auth::logut();
        return redirect('admin/girisYap');
    }
    public function  get_girisYap(){
        return view('adminPanel.login');
    }
}
