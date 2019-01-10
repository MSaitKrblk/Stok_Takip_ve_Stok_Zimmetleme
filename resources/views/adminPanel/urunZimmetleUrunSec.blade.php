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
                        <th>Stok Durumu</th>
                        <th>Resim</th>
                        <th></th>
                    </tr>

                    <?php
                    $sayac=1;
                    foreach($stokBilgi as $deger)
                    {
                        echo "<tr>";
                        echo "<td>".$sayac."</td>";
                        echo "<td>".$deger->marka."</td>";
                        echo "<td>".$deger->isim."</td>";
                        echo "<td>".$deger->miktar."</td>";
                        echo "<td><img src='/urunResim/".$deger->foto."' height='50px' width='50px'/> </td>";
                        if ($deger->miktar!=0)
                            echo '<td><a  class="btn btn-block btn-primary" href="/admin/urunZimmetle/'.$personel_id.'/'.$deger->id.'"> <i class="fa fa-fw fa-edit"></i></a></td>';
                        else
                            echo '<td><a  class="btn btn-block btn-primary" disabled=""> <i class="fa fa-fw fa-edit"></i></a></td>';
                        echo "</tr>";
                        $sayac++;
                    }
                    ?>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

    </div>

    @endsection
