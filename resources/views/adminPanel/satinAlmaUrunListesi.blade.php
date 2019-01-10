@extends('adminPanel.app')
@section('kullanici_adi')
    admin
    @endsection
@section('sayfa_baslik')
    Satın Alma Ürün Seç
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
                <table class="table table-hover" id="table">
                    <tbody>
                    <tr>
                        <th></th>
                        <th>Marka</th>
                        <th>Model</th>
                        <th>Resim</th>
                        <th></th>
                    </tr>

                    <?php
                    $sayac=1;
                    foreach($urunBilgi as $deger)
                    {
                        echo "<tr>";
                        echo "<td>".$sayac."</td>";
                        echo "<td>".$deger->marka."</td>";
                        echo "<td>".$deger->isim."</td>";
                        echo "<td><img src='/urunResim/".$deger->foto."' height='50px' width='50px'/> </td>";
                        echo '<td><a  class="btn btn-block btn-primary" href="/admin/satinAlmaTedarikciListele/'.$deger->id.'"> <i class="fa fa-fw fa-edit"></i></a></td>';
                        echo "</tr>";
                        $sayac++;
                    }
                    ?>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">

            </div>
        </div>
        <!-- /.box -->
    </div>
    @endsection
