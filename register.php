<?php
include("config.php");
include("session.php");

$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$birthdate = $_POST['birthdate'];
$username = $_POST['username'];
$password = $_POST['password'];

// $options = [
//     'cost' => 11,
// ];
// Get the password from post

$hash = sha1($password);

$sql = "INSERT INTO users(firstname, middlename, lastname, birthdate, username, password) 
VALUES('$firstname', '$middlename', '$lastname', '$birthdate', '$username', '$hash')";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Nuevo usuario agregado");';
	echo 'window.location="users.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Usuario duplicado!");';
	echo 'window.location="registration.php";';
	echo '</script>';
}
?>