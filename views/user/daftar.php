<?php
    include('../../controllers/user/class_daftar.php');
    $dbConn = new daftar();
    session_start();
    if (isset($_SESSION['Email'])) {
      header("location: ../../index.php");
    }
 ?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Form Pendaftaran</title>
      <link rel="stylesheet" href="../../assets/css/style_daf.css">
</head>

<body>

<form  method="POST">
  <h2>Pendaftaran</h2>
  <p>
    <label for="namalengkap" class="floatLabel">Nama Lengkap</label>
    <input id="namalengkap" name="namalengkap" type="text" placeholder="NamaLengkap">
  </p>
  <p>
		<p>
			<label for="Email" class="floatLabel">Email</label>
			<input id="Email" name="email" type="text" placeholder="Email">
		</p>
		<p>
			<label for="password" class="floatLabel">Password</label>
			<input id="password" name="password" type="password" placeholder="Password">

		</p>
    <p>
			<!-- <label for="level" class="floatLabel">Level</label> -->
      <input type="hidden" name="level" value="pelapak">
      <!-- <select class="" name="level">
          <option value="">Pilih Akses</option>
          <option value="admin">Admin</option>
          <option value="pelapak">Pelapak</option>
      </select> -->

		</p>

		<p>
			<input type="submit" value="Create My Account" id="submit" name="daftar">
		</p>
	</form>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src=".../.../assets/js/js_daf.js"></script>

</body>
</html>

<?php
if (isset($_POST['daftar'])) {
  $data = null;
  $data[0] = $_POST['namalengkap'];
  $data[1] = $_POST['email'];
  $data[2] = md5($_POST['password']);
  $data[3] = $_POST['level'];
  $sukses = $dbConn->register($data);


}
 ?>
