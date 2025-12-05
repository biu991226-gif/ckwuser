<?php
session_start();


$from = $_SESSION["email"];
$to = $_POST["to"];
$content = $_POST["content"];


$link = mysqli_connect("mysql3101.db.sakura.ne.jp", "mzx991226_zhixin", "mzx991226", "mzx991226_zhixin");

$sql ="INSERT INTO `message`(`from`, `to`, `content`) VALUES ('$from','$to', '$content')";

$res = mysqli_query($link, $sql);




?>