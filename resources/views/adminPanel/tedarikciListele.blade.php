@extends('adminPanel.app')
@section('kullanici_adi')
    admin
    @endsection
@section('sayfa_baslik')
    Tedarikci Listele
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
                        <th>Unvan</th>
                        <th>İl</th>
                        <th>İlce</th>
                        <th></th>
                    </tr>

                    <?php
                    $sayac=1;
                    foreach($tedarikciBilgi as $deger)
                    {
                        echo "<tr>";
                        echo "<td>".$sayac."</td>";
                        echo "<td>".$deger->unvan."</td>";
                        echo "<td>".$deger->il."</td>";
                        echo "<td>".$deger->ilce." </td>";
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
