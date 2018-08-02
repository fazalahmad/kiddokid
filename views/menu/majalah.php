<?php

  ob_start();
  session_start();
  include('../../controllers/pelapak/class_jual_majalah.php');
  $dbConn_majalah = new Controllers_Majalah();

  include('../../controllers/pelapak/class_jual_komik.php');
  $dbConn_komik = new Controllers_Komik();
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kiddo Kid</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel=”icon” href=”../../assets/img/icon.png”>

    <!-- Bootstrap -->
    <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="../../assets/css/m_style.css" rel="stylesheet">

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
        <img alt="Brand" class="img-circle" src="../../assets/img/icon.png" style="width: 30px; height: 25px;"> </a>
      <a href="#" class="navbar-brand">Kiddo Kid</a>

    </div>
    <!--<br><br><br>-->
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
      <ul class="nav navbar-nav">
        <li> <a href="../../index.php"><span class="glyphicon glyphicon-home" aria-hidden="true" style="padding:0px;"></span>Home</a> </li>
        <li> <a href="majalah.php"><span class="glyphicon glyphicon-book" aria-hidden="true" style="padding:0px;"></span>Majalah</a> </li>
        <li> <a href="video.php"><span class="glyphicon glyphicon-camera" aria-hidden="true" style="padding:0px;"></span>Video</a> </li>
        <li> <a href="komik.php"><span class="glyphicon glyphicon-paperclip" aria-hidden="true" style="padding:0px;"></span>Komik</a> </li>
      </ul>

      <?php
        if (empty($_SESSION['Level'])) {
          ?>
          <ul class="nav navbar-nav f-right">
            <li> <a href="../user/login.php">Login</a> </li>
            <li> <a href="../user/daftar.php">Daftar</a> </li>
          </ul>

          <ul class="nav navbar-nav f-right">
            <li class="cart" id="cart-dropdown"> <a class="cart-pointer" > <img src="../../assets/img/shopping-cart.png" alt="" width="25" > </a>
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
          <?php
        }else {
          if (empty($_SESSION['Email'])) {
            header('location: views/user/login.php');
          } else {
            ?>
          <ul class="nav navbar-nav f-right">
            <li> <a ></a> </li>
            <li id="togleuser"><img src="../../public/gambar_user/user.svg" alt="" class="user-profile cart-pointer"></li>
          </ul>
            <div class="overlay-user">
              <div class="header-cart">
                <small style="display:block">Hello,</small>
                <b><?php echo $_SESSION['NamaLengkap']; ?></b>
              </div>
              <div class="content-cart">
                <ul style="list-style: none; padding-left:16px;">
                  <li class="text-pad"><a href="#" class="text-link">Halaman Profile</a></li>
                  <li class="text-pad"><a href="../penjual/jual_majalah.php" class="text-link">Lapak Saya</a></li>
                  <li class="text-pad"><a href="../user/logout.php" class="text-link">Logout</a></li>
                </ul>
              </div>
            </div>

            <ul class="nav navbar-nav f-right">
              <li class="cart" id="cart-dropdown"> <a class="cart-pointer" > <img src="../../assets/img/shopping-cart.png" alt="" width="25" > </a>
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
            <?php
          }
        }
      ?>

      <?php

       ?>

    </div><!-- /.navbar-collapse -->

  </div><!-- /.container-fluid -->
</nav>

<!--body-start-->

<?php
$tampil = $dbConn_majalah->tampil();

if ($tampil != null) {
  ?>
    <div class="container-fluid">
      <br><br>
      <h2>Majalah</h2>
      <hr>
      <div class="row" align="center">
        <?php

            if (isset($tampil)) {
              foreach ($tampil as $tampil) {
                ?>
                <div class="col-6 col-md-4">
                  <a href="#">
                    <div class="k-card t-cart">
                    <img style="background-image:url('../../public/gambar_barang/<?php echo $tampil['Foto_Majalah']; ?>');" class="img-card">
                    <!-- <img src="http://sales-jasatama.890m.com/wp-content/uploads/2016/09/10584-majalah-bobo-edisi-terbaru-15-terbit-21-juli-2016.jpg" alt="" class="img-card"> -->
                      <div class="k-card-body">
                        <h4> <?php echo $tampil['Nama_Majalah']; ?></h4>
                      </div>
                      <div class="k-card-footer">
                        <small> <?php echo $tampil['NamaLengkap']; ?></small>
                        <strong class="f-right">IDR <?php echo $tampil['Harga']; ?></strong>
                      </div>
                      <div class="k-cart-add">
                        <button type="button" name="button" class="btn-add">Tambah ke Keranjang</button>
                      </div>
                    </div>
                  </a>
                </div>
                <?php
              }
            }
         ?>

      </div>
        <center><button class="btn btn-info btn-lg" style="margin-top:2%;">More</button></center>
    </div>
  <?php
}
 ?>


<!--body-end-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- <script src="assets/js/bootstrap.min.js"></script> -->
<script src="../../assets/js/m_javascript.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
