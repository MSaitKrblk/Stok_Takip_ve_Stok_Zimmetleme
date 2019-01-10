@extends('adminPanel.app')
@section('kullanici_adi')
    admin
    @endsection
@section('sayfa_baslik')
    Index
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
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Urun Bilgileri</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" method="post"  action="/admin/satinAlmaEkle">
            {{csrf_field()}}
            <input type="hidden" name="urun_id" id="urun_id" value="{{$urun_id}}" required>
            <input type="hidden" name="tedarikci_id" id="tedarikci_id" value="{{$tedarikci_id}}" required>
            <div class="box-body">
                <div class="form-group">
                    <label for="dAdi" class="col-sm-2 control-label">Adet Miktarı</label>
                    <div class="col-sm-10">
                        <input type="number" min="1" max="1047483" class="form-control" name="miktar" id="miktar" placeholder="Adet Miktarı" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="dAdi" class="col-sm-2 control-label">Tutar</label>
                    <div class="col-sm-10">
                        <input type="number" min="1" max="2147483647" class="form-control" name="tutar" id="tutar" placeholder="Tutar" required/>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Kaydet</button>
            </div>
            <!-- /.box-footer -->
        </form>
    </div>
    @endsection
