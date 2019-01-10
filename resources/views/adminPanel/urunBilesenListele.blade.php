@extends('adminPanel.app')
@section('kullanici_adi')
    admin
    @endsection
@section('sayfa_baslik')
    Urun Bileşen Listesi
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
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Ürun Listesi</h3>

                <div class="box-tools">

                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody>
                    <tr>
                        <th></th>
                        <th>Marka</th>
                        <th>Model</th>
                        <th></th>
                    </tr>

                    <?php
                    $sayac=1;
                    foreach($urunBilesenListesi as $deger)
                    {
                        echo "<tr>";
                        echo "<td>".$sayac."</td>";
                        echo "<td>".$deger->marka."</td>";
                        echo "<td>".$deger->isim."</td>";
                        echo "</tr>";
                        $sayac++;
                    }
                    ?>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <div class="col-sm-12">
                    <a class="btn btn-info pull-right" href="/admin/urunBilesenEkle/{{$urun_id}}">Yeni Bileşen Ekle</a>
                </div>
            </div>
        </div>
        <!-- /.box -->
    </div>
    @endsection
