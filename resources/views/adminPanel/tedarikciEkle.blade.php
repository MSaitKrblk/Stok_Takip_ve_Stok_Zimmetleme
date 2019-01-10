@extends('adminPanel.app')
@section('kullanici_adi')
    admin
    @endsection
@section('sayfa_baslik')
    Tedarikci Ekle
    @endsection
@section('js')
    <script>

    </script>
    @endsection
@section('css')
    <style>

    </style>
    @endsection
@section('icerik')
    <form role="form" method="post"  action="/admin/tedarikciEkle">
        {{csrf_field()}}
        <div class="col-md-12">
            <div class="box box-primary">

            </div>
            <div class="col-md-6">
                <div class="box-header with-border">
                    <h3 class="box-title">Tedarikci Bilgisi</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="ad">Ünvan</label>
                        <input type="text" class="form-control" name="unvan" id="unvan" placeholder="Ünvan" maxlength="50" required>
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
                        <input type="text" class="form-control" name="il" id="il" placeholder="İl" maxlength="50" required>
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
