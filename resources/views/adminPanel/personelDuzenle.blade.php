@extends('adminPanel.app')
@section('kullanici_adi')
    admin
    @endsection
@section('sayfa_baslik')
    Personel Güncelle
    @endsection
@section('icerik')
    <?php
    //$yazdir = print_r($gPersonel[0],true);
    //    echo $yazdir;
    ?>
    <form role="form" method="post"  action="/admin/personelDuzenle">
        {{csrf_field()}}

        <input type="hidden" name="id" value="{{$gPersonel[0]->kullanicilar}}">
        <div class="col-md-12">

            <div class="box box-primary">

            </div>
            <div class="col-md-6">
                <div class="box-header with-border">
                    <h3 class="box-title">Personel Bilgisi</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="ePosta">Email Adresi</label>
                        <input type="email" class="form-control" name="ePosta" id="ePosta" placeholder="E-Mail" disabled="" value="{{$gPersonel[0]->ePosta}}">
                    </div>
                    <div class="form-group">
                        <label for="sifre">Şifre</label>
                        <input type="password" class="form-control" name="sifre" id="sifre" placeholder="Şifre" required>
                    </div>
                    <div class="form-group">
                        <label for="ad">İsim</label>
                        <input type="text" class="form-control" name="ad" id="ad" placeholder="İsim" disabled="" value="{{$gPersonel[0]->ad}}">
                    </div>
                    <div class="form-group">
                        <label for="soyad">Soyisim</label>
                        <input type="text" class="form-control" name="soyad" id="soyad" placeholder="Soyisim" disabled="" value="{{$gPersonel[0]->soyad}}">
                    </div>
                    <div class="form-group">
                        <label>Görev Departmanı</label>
                        <select class="form-control" name="departman"  id="departman" disabled="">
                            <?php
                                echo '<option value="'.$gPersonel[0]->departman_id.'">'.$gPersonel[0]->departmanAdi.'</option>';
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Görev Rolü</label>
                        <select class="form-control" name="rol"  id="rol" disabled="">
                            <?php
                                echo '<option value="'.$gPersonel[0]->rol_id.'">'.$gPersonel[0]->rolAdi.'</option>';
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box-header with-border">
                    <h3 class="box-title">Adres Bilgisi</h3>
                </div>
                <div class="box-body">
                    <!-- text input -->
                    <div class="form-group">
                        <label>İl</label>
                        <input type="text" class="form-control" name="il" id="il" placeholder="İl" disabled="" value="{{$gPersonel[0]->il}}">
                    </div>
                    <div class="form-group">
                        <label>İlçe</label>
                        <input type="text" class="form-control" name="ilce" id="Ilce" placeholder="İlçe" disabled="" value="{{$gPersonel[0]->ilce}}">
                    </div>
                    <!-- textarea -->
                    <div class="form-group">
                        <label>Açık Adres</label>
                        <textarea class="form-control" rows="3" name="acikAdres" id="acikAdres" placeholder="Açık Adres" disabled="" >{{$gPersonel[0]->acikAdres}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-info pull-right">Kayıt Et</button>
                </div>
            </div>
        </div>
    </form>
@endsection
