@extends('adminPanel.app')
@section('kullanici_adi')
    admin
    @endsection
@section('js')
    <script>
    </script>
    @endsection
@section('css')
    <style>
    </style>
@endsection
@section('sayfa_baslik')
    Departman Ekle
    @endsection
@section('icerik')

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Yönetici Personel Seç</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover" id="table">
                <tbody>
                <tr>
                    <th></th>
                    <th>Ad</th>
                    <th>Soyad</th>
                    <th>Departman</th>
                    <th>e-Mail</th>
                    <th></th>
                </tr>
                <?php
                foreach($gPersonel as $deger)
                {
                    echo "<tr>";
                    echo "<td>".$deger->personel_id."</td>";
                    echo "<td>".$deger->ad."</td>";
                    echo "<td>".$deger->soyad."</td>";
                    echo "<td>".$deger->departmanAdi."</td>";
                    echo "<td>".$deger->ePosta."</td>";
                    echo '<td><a  class="btn btn-block btn-primary" href="/admin/departmanEkle/'.$deger->personel_id.'""> <i class="fa fa-fw fa-edit"></i></a></td>';
                    echo "</tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>

@endsection