<?php
session_start();


$from = $_SESSION["email"];
$to = $_POST["to"];
$content = $_POST["content"];


$link = mysqli_connect("43.206.154.211", "user", "Password123!", "mzx991226_zhixin");

$sql ="INSERT INTO `message`(`from`, `to`, `content`) VALUES ('$from','$to', '$content')";

$res = mysqli_query($link, $sql);




?>