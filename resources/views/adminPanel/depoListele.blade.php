@extends('adminPanel.app')
@section('kullanici_adi')
    admin
    @endsection
@section('sayfa_baslik')
    Depo
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
                <h3 class="box-title">Depo Listesi</h3>

                <div class="box-tools">

                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody>
                    <tr>
                        <th></th>
                        <th>Depo Adi</th>
                        <th>Depo Türü</th>
                        <th></th>
                    </tr>

                    <?php
                    $sayac=1;
                    foreach($gDepo as $deger)
                    {
                        echo "<tr>";
                        echo "<td>".$sayac."</td>";
                        echo "<td>".$deger->depoAdi."</td>";
                        echo "<td>".$deger->depoTuru."</td>";
                        echo '<td><a  class="btn btn-block btn-primary" href="/admin/depoUrunStokListele/'.$deger->id.'""> <i class="fa fa-fw fa-edit"></i></a></td>';
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
