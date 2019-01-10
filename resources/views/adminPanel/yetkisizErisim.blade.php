@extends('adminPanel.app')
@section('kullanici_adi')
    admin
    @endsection
@section('sayfa_baslik')
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
    <?php header("Refresh: 10; url=".$url); ?>
    <section class="content">
        <div class="error-page">
            <h2 class="headline text-yellow"> Ooops ! </h2>

            <div class="error-content">
                <h3><i class="fa fa-warning text-yellow"></i> Galiba yanlış bişey yaptın.</h3>

                <p>
                    Hatalı bir değer yada uygun formatta olmayan bişeyler girdin. Anasayfaya dönemek için <a href="/admin">bana tıkla.</a>
                    Yada 10 saniye içerisinde sen biz kaldığın yere yönlendireceğiz. :D
                </p>


            </div>
            <!-- /.error-content -->
        </div>
        <!-- /.error-page -->
    </section>
    @endsection
