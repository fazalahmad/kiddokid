<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kiddo Kid</title>
    <link rel=”icon” href=”/kiddokid/assets/img/icon.png”>

    <!-- Bootstrap -->
    <link href="/kiddokid/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/kiddokid/assets/css/m_style.css" rel="stylesheet">

  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html">
        <img alt="Brand" class="img-circle" src="/kiddokid/assets/img/icon.png" style="width: 30px; height: 25px;"> </a>
      <a href="#" class="navbar-brand">Kiddo Kid</a>

    </div>
    <!--<br><br><br>-->
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
      <ul class="nav navbar-nav">
        <li> <a href="#"><span class="glyphicon glyphicon-home" aria-hidden="true" style="padding:0px;"></span>Home</a> </li>
        <li> <a href="#"><span class="glyphicon glyphicon-book" aria-hidden="true" style="padding:0px;"></span>Majalah</a> </li>
        <li> <a href="#"><span class="glyphicon glyphicon-camera" aria-hidden="true" style="padding:0px;"></span>Video</a> </li>
        <li> <a href="#"><span class="glyphicon glyphicon-paperclip" aria-hidden="true" style="padding:0px;"></span>Komik</a> </li>
        <li> <a href="#"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true" style="padding:0px;"></span>Event</a> </li>
        <li> <a href="#"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true" style="padding:0px;"></span>Tentang</a> </li>
      </ul>

      <ul class="nav navbar-nav f-right">
        <li> <a href="/kiddokid/views\user\login.php">Login</a> </li>
        <li> <a href="/kiddokid/views\user\daftar.php">Daftar</a> </li>
        <li id="togleuser"><img src="https://smkn1pts.files.wordpress.com/2009/11/pas-photo-baru.jpg" alt="" class="user-profile cart-pointer">
        </li>

      </ul>
      <div class="overlay-user">
        <div class="header-cart">
          <small style="display:block">Hello,</small>
          <b>Fazal Ahmad</b>
        </div>
        <div class="content-cart">
          <ul style="list-style: none; padding-left:16px;">
            <li class="text-pad"><a href="#" class="text-link">Halaman Profile</a></li>
            <li class="text-pad"><a href="#" class="text-link">Lapak Saya</a></li>
            <li class="text-pad"><a href="#" class="text-link">Logout</a></li>
          </ul>
        </div>
      </div>

      <ul class="nav navbar-nav f-right">
        <li class="cart" id="cart-dropdown"> <a class="cart-pointer" > <img src="/kiddokid/assets\img\shopping-cart.png" alt="" width="25" > </a>
            <span class="sum-barang">12</span>
          <div class="overlay card-area">
            <div class="header-cart">
                <b>Total : 0 Barang</b>
            </div>
            <div class="content-cart">

              <div class="flex-row cart-box">
                <div class="cart-img-box">
                  <img src="https://i.ytimg.com/vi/jXjVdIgIw8c/maxresdefault.jpg" alt="" class="img-card-box">
                </div>
                  <div class="box-cart">
                      <strong class="box-judul">Nama Barang  Nama Barang  </strong>
                      <div class="box-sum">
                        1 Barang
                      </div>
                  </div>
              </div>
              <div class="flex-row cart-box">
                <div class="cart-img-box">
                  <img src="https://i.ytimg.com/vi/jXjVdIgIw8c/maxresdefault.jpg" alt="" class="img-card-box">
                </div>
                  <div class="box-cart">
                      <strong class="box-judul">Nama Barang  Nama Barang  </strong>
                      <div class="box-sum">
                        1 Barang
                      </div>
                  </div>
              </div>

            </div>
            <a href="#" class="footer-cart" >
                  <b>Lihat Keranjang</b>
            </a>
          </div>
        </li>

      </ul>
    </div><!-- /.navbar-collapse -->

  </div><!-- /.container-fluid -->
</nav>
