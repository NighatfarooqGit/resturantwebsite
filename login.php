<!DOCTYPE html>

<html>

<head>

<title>LOGIN</title>

<link rel="stylesheet" type="text/css" href="style.css">


</head>

<body>

<form action="loginaction.php" method="post">

<h2>user login</h2>
  
<?php if (isset($_GET['error'])) { ?>

<p class="error"><?php echo $_GET['error']; ?></p>

<?php } ?>

<label>User Name</label>

<input type="text" name="uname" placeholder="User Name"><br>

<label>Password</label>

<input type="password" name="upassword" placeholder="Password"><br>

<button type="submit">Login</button>

</form>

</body>

</html>