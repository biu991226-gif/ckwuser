<?php
session_start();

$email = $_SESSION["email"];


$link = mysqli_connect("mysql3101.db.sakura.ne.jp", "mzx991226_zhixin", "mzx991226", "mzx991226_zhixin");

$sql1 ="SELECT `to` FROM `friend` 
WHERE 
`from`='$email'";
$sql2 ="SELECT `from` FROM `friend` 
WHERE 
`to`='$email'";


$data = [];
$res1 = mysqli_query($link, $sql1);
while($row1 = mysqli_fetch_assoc($res1)){
	$data[] = $row1["to"];
}
$res2 = mysqli_query($link, $sql2);
while($row2 = mysqli_fetch_assoc($res2)){
	$data[] = $row2["from"];

}

$html = '';
for ($i=0; $i < count($data); $i++) { 
	$html = $html . "<a href='message.html?email=".$data[$i]."'>".$data[$i]."</a><br>";
}

echo $html;


?>