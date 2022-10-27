<?php
session_start();
require_once ('recaptchalib.php');
require_once('connect.php');

 $secret = "-";
 $response = null;
 // comprueba la clave secreta
 $reCaptcha = new ReCaptcha($secret);

 if ($_POST["g-recaptcha-response"]) {
     $response = $reCaptcha->verifyResponse(
     $_SERVER["REMOTE_ADDR"],
     $_POST["g-recaptcha-response"]
     );
  }
 

 if ($response != null && $response->success) {
    // Si el código es correcto, seguimos procesando el formulario como siempre
		if(isset($_POST) & !empty($_POST)){
			$username = mysqli_real_escape_string($connection, $_POST['username']);
			$password = md5($_POST['password']);

			$sql = "SELECT * FROM `login` WHERE username='$username' AND password='$password'";
			$result = mysqli_query($connection, $sql);
			$count = mysqli_num_rows($result);
			if($count == 1){
				$_SESSION['username'] = $username;

			$sql2 = "INSERT INTO `logs` (usuario,accion) VALUES ('$username', 'incio de sesion')";
			$result = mysqli_query($connection, $sql2);

		}
		if(isset($_SESSION['username'])){
			$smsg = "User already logged in";
			 header("Location: index.php");

		}
}


  } else {
    // Si el código no es válido, lanzamos mensaje de error al usuario
  	

  }


?>
<!DOCTYPE html>
<html>
<head>
	<title>User Login in PHP & MySQL</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

	<link rel="stylesheet" type="text/css" href="styles.css">
	<script src='https://www.google.com/recaptcha/api.js'></script>

</head>
<body>
<div class="container">
      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
      <form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Please Register</h2>
        <div class="input-group">
		  <span class="input-group-addon" id="basic-addon1">@</span>
		  <input type="text" name="username" class="form-control" placeholder="Username" required>
		</div>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        <a class="btn btn-lg btn-primary btn-block" href="#">Register</a>
        <div class="g-recaptcha" data-sitekey=""></div>



      </form>
</div>
</body>
</html>