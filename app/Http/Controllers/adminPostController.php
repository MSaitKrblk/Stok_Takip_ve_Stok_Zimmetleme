<?php

namespace App\Http\Controllers;

use App\departman;
use App\personel;
use App\adres;
use App\satinAlma;
use App\tedarikci;
use App\urun;
use App\urunBilesen;
use App\kullanicilar;
use App\stok;
use App\User;
use mysql_xdevapi\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


class adminPostController extends adminController
{
    public function  post_personelEkle(Request $request){
        try{
            $yeniAdres=new adres();
            if ($request->input("il")==null){
            }
            $yeniAdres->il=$request->input("il");
            $yeniAdres->ilce=$request->input("ilce");
            $yeniAdres->acikAdres=$request->input("acikAdres");
            if ($yeniAdres->save()){
                $yeniPersonel=new personel();
                $yeniPersonel->ad=$request->input("ad");
                $yeniPersonel->soyad=$request->input("soyad");
                $yeniPersonel->departman_id=$request->input("departman");
                $yeniPersonel->adres_id=$yeniAdres->id;
                if ($yeniPersonel->save()){
                    $yeniUser=new kullanicilar();
                    $yeniUser->personel_id=$yeniPersonel->id;
                    $yeniUser->sifre=bcrypt($request->input("sifre"));
                    $yeniUser->ePosta=$request->input("ePosta");
                    $yeniUser->rol_id=$request->input("rol");
                    if ($yeniUser->save()){
                        User::create([
                            'name' => $request->input("ad"),
                            'email' => $request->input("ePosta"),
                            'password' => bcrypt($request->input("sifre")),
                            'yetki' =>$request->input("rol"),
                        ]);
                        return redirect('admin/personelListele');
                    }
                }
            }
        }
        catch (Exception $e){
            return view('adminPanel.personelEkle')->with('status',false);
        }
    }
    public function post_personelDuzenle(Request $request){
        echo $request->get('id');
        $gUser=kullanicilar::find($request->get('id'));
        $gUser->sifre=md5($request->get('sifre'));
        if ($gUser->save()){
            return redirect('admin/personelListele');
        }
    }
    public function post_departmanEkle(Request $request){
        $yDepartman=new departman();
        $yDepartman->departmanAdi=$request->input("dAdi");
        $yDepartman->yonetici_id=$request->input("personel_id");
        if ($yDepartman->save()){
            return redirect('admin/departmanListele');
        }
        echo $request;
    }

    public function post_urunEkle(Request $request){
        $validator=Validator::make($request->all(),[
            'uResim'=>'mimes:jpg,jpeg,png,gif',//'uResim'=>'required|mimes:jpg,jpeg,png,gif'
        ]);
        if (!$validator->fails()){
            if ($request->hasFile('uResim')) {
                $file = $request->file('uResim');
                $name = time() . $file->getClientOriginalName();
                $file->move(public_path() . '/urunResim/', $name);
            }
            $yUrun=new urun();
            $yUrun->marka=$request->input('uMarka');
            $yUrun->isim=$request->input('uModel');
            $yUrun->foto="$name";
            if ($yUrun->save()){
                return redirect('admin/urunListele');
            }
        }
        else{
            $url='/admin/urunEkle';
            return view('adminPanel.hataliGiris',['url'=>$url]);
        }
    }


    public function post_tedarikciEkle(Request $request){
        try{
            $yeniAdres=new adres();
            $yeniAdres->il=$request->input("il");
            $yeniAdres->ilce=$request->input("ilce");
            $yeniAdres->acikAdres=$request->input("acikAdres");
            if ($yeniAdres->save()){
                $yeniTedarikci=new tedarikci();
                $yeniTedarikci->unvan=$request->input("unvan");
                $yeniTedarikci->adres_id=$yeniAdres->id;
                if ($yeniTedarikci->save()){
                    return redirect('admin/tedarikciListele');
                }
            }
        }
        catch (Exception $e){
            return view('adminPanel.personelEkle')->with('status',false);
        }
    }
    public function post_urunBilesenEkle(Request $request){
        $yUrunBilesen=new urunBilesen();
        $yUrunBilesen->marka=$request->input('uMarka');
        $yUrunBilesen->isim=$request->input('uModel');
        $yUrunBilesen->urun_id=$request->input('urun_id');
        if ($yUrunBilesen->save()){
            return redirect('admin/urunBilesenListele/'.$request->input('urun_id'));
        }
    }
    public function post_satinAlmaEkle(Request $request){
        $ySatinAlma=new satinAlma();
        $ySatinAlma->urun_id=$request->input('urun_id');
        $ySatinAlma->tedarikci_id=$request->input('tedarikci_id');
        $ySatinAlma->miktar=$request->input('miktar');
        $ySatinAlma->fiyat=$request->input('tutar');
        if ($ySatinAlma->save()){
            $yStok=stok::updateOrCreate([
                    'urun_id'=>$request->input('urun_id'),
                    'depo_id'=>'1'],[
                ]
            );
            $yStok->miktar+=$request->input('miktar');
            if($yStok->save()){
               return redirect('admin/satinAlmaListele');

            }
        }
    }
}
