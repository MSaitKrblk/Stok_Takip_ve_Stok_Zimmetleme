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
            <h3 class="box-title">Departman Bilgileri</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" method="post"  action="/admin/departmanEkle">
            {{csrf_field()}}
            <div class="box-body">
                <div class="form-group">
                    <input type="hidden" name="personel_id" id="personel_id" value="{{$personel_id}}" required>
                    <label for="dAdi" class="col-sm-2 control-label">Departman Adı</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="dAdi" id="dAdi" placeholder="Departman Adı" maxlength="50" required>
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
