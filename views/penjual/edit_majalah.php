<?php
    include('../../controllers/pelapak/class_jual_majalah.php');
    $dbConn_majalah = new Controllers_Majalah();
    session_start();
    if (!isset($_SESSION['Email'])) {
      header("location: ../../index.php");
    }
 ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kiddo Kid</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
    <link rel=”icon” href=”../../assets/img/icon.png”>

    <!-- Bootstrap -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
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
        <li> <a href="#"><span class="glyphicon glyphicon-home" aria-hidden="true" style="padding:0px;"></span>Home</a> </li>
        <li> <a href="#"><span class="glyphicon glyphicon-book" aria-hidden="true" style="padding:0px;"></span>Majalah</a> </li>
        <li> <a href="#"><span class="glyphicon glyphicon-camera" aria-hidden="true" style="padding:0px;"></span>Video</a> </li>
        <li> <a href="#"><span class="glyphicon glyphicon-paperclip" aria-hidden="true" style="padding:0px;"></span>Komik</a> </li>
        <li> <a href="#"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true" style="padding:0px;"></span>Event</a> </li>
        <li> <a href="#"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true" style="padding:0px;"></span>Tentang</a> </li>
      </ul>

      <?php
        if (empty($_SESSION['Level'])) {
          ?>
          <ul class="nav navbar-nav f-right">
            <li> <a href="views/user/login.php">Login</a> </li>
            <li> <a href="views/user/daftar.php">Daftar</a> </li>
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
                  <li class="text-pad"><a href="#" class="text-link">Lapak Saya</a></li>
                  <li class="text-pad"><a href="../../views/user/logout.php" class="text-link">Logout</a></li>
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

    </div><!-- /.navbar-collapse -->

  </div><!-- /.container-fluid -->
</nav>

<!--body-start-->

<div class="container-fluid">
  <div class="panel panel-default">
    <div class="panel-heading"><h2>Update Barang</h2></div>
    <div class="panel-body">

      <form  action="" method="post" enctype="multipart/form-data" >
        <div class="row">
          <?php
              // $tampil = $dbConn_majalah->edit_majalah($id);
              var_dump($dbConn_majalah->edit_majalah($id)); die();
              foreach ($tampil as $tampil) {
                ?>
                <div class="col-xs-12 col-md-4">
                  <div class="panel panel-default">
                    <div class="panel-heading"><h3>Gambar Barang</h3></div>
                    <div class="panel-body">
                      <input type="file" id="file" name="foto_barang" value="<?php echo $tampil['Foto_Majalah']; ?>" />

                    </div>
                  </div>
                </div>

                <div class="col-xs-6 col-md-7 col-md-offset-1">
                  <div class="panel panel-default">
                    <div class="panel-heading"><h3>Data Barang</h3></div>
                    <div class="panel-body">

                      <div class="form-group">
                        <label for="exampleInputEmail1">Kategori Barang</label>
                        <select name="kategori" class="form-control">
                          <option value="pilih_kategori">Pilih Kategori</option>
                          <option value="video">Video</option>
                          <option value="komik">Komik</option>
                          <option value="majalah" selected>Majalah</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" id="exampleInputEmail1" placeholder="Nama Barang" value="<?php echo $tampil['Nama_Majalah']; ?>">
                      </div>


                      <div class="form-group">
                        <label for="exampleInputEmail1">Edisi</label>
                        <input type="number" min="1" name="edisi" class="form-control" placeholder="Edisi Majalah" style="width:150px;" value="<?php echo $tampil['Edisi_Majalah']; ?>">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Harga</label>
                        <div class="input-group" style="width:300px;">
                          <span class="input-group-addon">Rp</span>
                          <input type="text" name="harga" class="form-control" aria-label="Amount (to the nearest dollar)" value="<?php echo $tampil['Harga']; ?>">
                          <span class="input-group-addon">.00</span>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" rows="10"><?php echo $tampil['Deskripsi_Majalah']; ?></textarea>
                      </div>


                      <!-- <div class="form-group">
                        <label for="exampleInputEmail1">Email Pengiriman</label>
                        <input type="text" name="email" class="form-control" placeholder="Email Pengiriman">
                      </div> -->

                      <div class="form-group">
                        <button type="submit" name="update_majalah"class="btn btn-primary" style="width:150px; float:right;">Edit Barang</button>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
              }
           ?>

        </div>
      </form>

    </div>
    </div>

</div>
<!--body-end-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../../assets/js/bootstrap.min.js"></script>
<script src="../../assets/js/m_javascript.js"></script>
<script type="text/javascript">
    $('#myTabs a').click(function (e) {
    e.preventDefault()
    $(this).tab('show')
    })

    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>

<?php
  if(isset($_POST['update_majalah'])){
      $data_update = null;
      $data_update[0] = $tampil['id_majalah'];
      $data_update[1] = $_POST['nama_barang'];
      $data_update[2] = $_POST['kategori'];
      $data_update[3] = $_POST['harga'];
      $data_update[4] = $_POST['deskripsi'];
      $data_update[5] = $_POST['foto_barang'];
      $data_update[6] = $_POST['edisi'];
      var_dump($data_update); die();
      $dbConn_majalah->delete_majalah($data_update);
      header('location: jual_majalah.php');
  }
 ?>
