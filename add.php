<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<form method="post" action="add.php">
	<fieldset>	
		<legend>Личные данные</legend>
			<p><label>Login<input type="text" name="login"></label></p>
			<p><label>Password<input type="password" name="password"></label></p>
	</fieldset>

	<fieldset>
		<legend>Ваш email адрес</legend>
		<p><label>Email<input type="text" name="email"></label></p>
	</fieldset>

	<fieldset>
		<legend>Ваш возраст</legend>
		<p><label>Age<input type="text" name="age"></label></p><br><br>
	</fieldset>

	<p><input type="image" src="img/add.png" name="add"></p>
	<p><input type="image" src="img/reset.png" name="reset"></p>

</form>

<?php  

include_once("include.php");


$login = strip_tags(trim($_POST['login']));
$password = strip_tags(trim($_POST['password']));
$email = strip_tags(trim($_POST['email']));
$age = strip_tags(trim($_POST['age']));

$q = mysqli_query( $link, "INSERT INTO user (login, password, email, age ) VALUES ('$login', '$password', '$email', '$age' )" );


?>

</body>
</html>