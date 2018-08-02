<?php
    ob_start();
    include('../../controllers/user/class_login.php');
    $dbConn = new Controllers_Login();
    session_start();
    if (isset($_SESSION['Email'])) {
      header("location: ../../index.php");
    }
 ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Form Login</title>
      <link rel="stylesheet" href="../../assets/css/style_daf.css">
</head>

<body>

<form  method="post">
  <h2>Login</h2>
  <p>
		<p>
			<label for="Email" class="floatLabel">Email</label>
			<input id="Email" name="email" type="text">
		</p>
		<p>
			<label for="password" class="floatLabel">Password</label>
			<input id="password" name="password" type="password">

		</p>

		<p>
			<input type="submit" value="Create My Account" id="submit" name="login">
		</p>
	</form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <!-- <script src="../../assets/js/js_daf.js"></script> -->

</body>
</html>

<?php
if (isset($_POST['login'])) {
  $data = null;
  $data[0] = $_POST['email'];
  $data[1] = md5($_POST['password']);
  $sukses = $dbConn->post_login($data);


}

 ?>
