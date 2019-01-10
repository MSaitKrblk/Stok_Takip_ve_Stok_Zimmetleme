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
                <h3 class="box-title">Tedarikci Listesi</h3>

                <div class="box-tools">

                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover" id="table">
                    <tbody>
                    <tr>
                        <th></th>
                        <th>Unvan</th>
                        <th>İl</th>
                        <th></th>
                    </tr>

                    <?php
                    foreach($tedarikciBilgi as $deger)
                    {
                        echo "<tr>";
                        echo "<td>".$deger->id."</td>";
                        echo "<td>".$deger->unvan."</td>";
                        echo "<td>".$deger->il."</td>";
                        echo '<td><a  class="btn btn-block btn-primary" href="/admin/satinAlmaEkle/'.$urun_id.'/'.$deger->id.'" > <i class="fa fa-fw fa-edit"></i></a></td>';
                        echo "</tr>";
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
