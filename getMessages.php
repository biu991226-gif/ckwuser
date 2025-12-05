<?php
session_start();

$email = $_SESSION["email"];
$to = $_POST["to"];
$content = $_POST["content"];




$link = mysqli_connect("mysql3101.db.sakura.ne.jp", "mzx991226_zhixin", "mzx991226", "mzx991226_zhixin");

$sql ="SELECT `from`,`content` FROM `message` 
WHERE 
(`from`='$email' and `to`= '$to') or (`to`='$email' and `from`= '$to')";






$data = [];
$sender = [];
$res = mysqli_query($link, $sql);
while($row = mysqli_fetch_assoc($res)){
	$data[] = $row["content"];
	$sender[] = $row["from"];
}


$html = '';
for ($i=0; $i < count($data); $i++) { 
	$html = $html . $sender[$i]." : ".$data[$i]."<br>";
}

echo $html;






?>