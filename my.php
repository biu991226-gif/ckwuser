<?php
session_start();

$email = $_SESSION["email"];

$link = mysqli_connect("mysql3101.db.sakura.ne.jp", "mzx991226_zhixin", "mzx991226", "mzx991226_zhixin");

$sql ="SELECT email, password FROM `users` 
WHERE 
email='$email'";


$res = mysqli_query($link, $sql);

$row=mysqli_fetch_assoc($res);


$email = $row["email"];
$password = $row["password"];


if(isset($_POST["save"])){
	$emailw = $_POST["email"];
	$passwordw = $_POST["password"];
	$sql ="UPDATE `users` SET `email`='$emailw',`password`='$passwordw' WHERE email = '$email'";
	$res = mysqli_query($link, $sql);
	$email = $emailw;
	$password = $passwordw;
	$_SESSION["email"] = $emailw;

}




include("my.html");




?>