@extends('adminPanel.app')
@section('kullanici_adi')
    admin
    @endsection
@section('sayfa_baslik')
    Ürün Ekle
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
            <h3 class="box-title">Ürün Bilgileri</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" method="post"  action="/admin/urunEkle" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="box-body">
                <div class="form-group">
                    <label for="uMarka" class="col-sm-2 control-label">Marka</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="uMarka" id="uMarka" placeholder="Marka" maxlength="50" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="uModel" class="col-sm-2 control-label">Model</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="uModel" id="uModel" placeholder="Model" maxlength="50" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="uResim">Ürün Resimi</label>
                    <div class="col-sm-8">
                        <input type="file" name="uResim" id="uResim" required>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-info pull-right">Kayıt Et</button>
                </div>
            </div>
            <!-- /.box-footer -->
        </form>
    </div>
    @endsection
