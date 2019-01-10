@extends('adminPanel.app')
@section('kullanici_adi')
    admin
    @endsection
@section('sayfa_baslik')
    Personel Ekle
    @endsection
@section('icerik')
    <?php

    ?>
    <form role="form" method="post"  action="/admin/personelEkle">
        {{csrf_field()}}
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
                        <input type="email" class="form-control" name="ePosta" id="ePosta" placeholder="E-Mail" required>
                    </div>
                    <div class="form-group">
                        <label for="sifre">Şifre</label>
                        <input type="password" class="form-control" name="sifre" id="sifre" placeholder="Şifre" maxlength="50" required>
                    </div>
                    <div class="form-group">
                        <label for="ad">İsim</label>
                        <input type="text" class="form-control" name="ad" id="ad" placeholder="İsim" maxlength="50" required>
                    </div>
                    <div class="form-group">
                        <label for="soyad">Soyisim</label>
                        <input type="text" class="form-control" name="soyad" id="soyad" placeholder="Soyisim" maxlength="50" required>
                    </div>
                    <div class="form-group">
                        <label>Görev Departmanı</label>
                        <select class="form-control" name="departman"  id="departman" required>
                            <?php
                                foreach ($departman as $d){
                                    echo '<option value="'.$d->id.'">'.$d->departmanAdi.'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Görev Rolü</label>
                        <select class="form-control" name="rol"  id="rol" required>
                            <?php
                            foreach ($rol as $r){
                                echo '<option value="'.$r->id.'">'.$r->rolAdi.'</option>';
                            }
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
                            <input type="text" class="form-control" name="il" id="il" placeholder="İl" maxlength="50"  required>
                        </div>
                        <div class="form-group">
                            <label>İlçe</label>
                            <input type="text" class="form-control" name="ilce" id="Ilce" placeholder="İlçe" maxlength="50" required>
                        </div>
                        <!-- textarea -->
                        <div class="form-group">
                            <label>Açık Adres</label>
                            <textarea class="form-control" rows="3" name="acikAdres" id="acikAdres" placeholder="Açık Adres" maxlength="250" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-info pull-right">Kayıt Et</button>
                </div>
            </div>
        </div>
    </form>
@endsection
