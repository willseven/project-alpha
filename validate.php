<?php
include("config.php");
mysqli_connect();
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$captcha = $_POST['txtcaptcha'];

// $options = [
//     'cost' => 11,
// ];

// $hashedPasswordFromDB = "SELECT username FROM users WHERE username = '$username';";
// $hash = password_hash($passwordFromPost, PASSWORD_BCRYPT, $options);

$existe = "SELECT llaves.Id, captcha FROM `llaves` WHERE captcha = '$captcha' and llaves.Id = 1;";
$asd = $mysqli->query($existe);
// $row = mysqli_fetch_assoc($asd);

if($asd->num_rows == 0) 
{	
	// alert('Gracias por tu contacto! en breves nos estaremos comunicando 1');
	// 		window.location='index.php?page=otrapagina'
	// 	  </script>"; 
	// echo $captcha;
	echo ("<script>alert('codigo incorrecto!');</script>");
	header('Location: error.php'); 
	// mysqli_close();
}else {
	
	$hash = sha1($password);
	
	$query = "SELECT username, password FROM users WHERE username = '$username' and password = '$hash';";
	
	$result = $mysqli->query($query);
	
	if($result->num_rows == 1) 
	{
		$_SESSION['user'] = $username;
		header('Location: home.php');  
	}
	else{ 
		header('Location:login.html');
		// echo $hash;
	}
}



// if($hashedPasswordFromDB->num_rows == 1) 
// {
// 	header('Location: index.html');  
// }
// else{ 
// 	$_SESSION['user'] = $username;
// 	header('Location: home.php');
// }

// if (password_verify($passwordFromPost, $row['password'])) {
//     // echo $row['password'] + "  -----  " +  $password;
//     echo   $var;
// 	// $_SESSION['user'] = $username;
// 	// header('Location: home.php');
// } else {
//     echo $row['password'];
// 	// header('Location: home.php');
// }

// $password = $_POST['password'];
 

// $username = $mysqli->real_escape_string($username);
 
// $query = "SELECT username, password FROM users WHERE username = '$username' AND password='$password';";
// $result = $mysqli->query($query);
 
// if($result->num_rows == 1) 
// {
// 	$_SESSION['user'] = $username;
// 	header('Location: home.php');  
// }
// else{ 
// 	header('Location: login.html');
// }
?>