<?php
$file = file_get_contents("file/1.txt");
echo nl2br($file)."<br><br>";

$arrayFile = file('file/1.txt');
dumpArray($arrayFile); echo "<br><br>";

$f = fopen('file/1.txt', "rt")or die("Ошибка!");
$s = fread($f, filesize("file/1.txt"));
fclose($f);
echo nl2br($s), "<br><br>";

$f1 = fopen('file/1.txt', "r+")or die("Ошибка");
while(!feof($f1)){
    $s1 = fgets($f1);
    echo $s1."<br>";}
fclose($f1);
    //Запись
file_put_contents("file/2.txt", "Всем большой привет!!!\nМы
записываем файл!\n\n<br>");

$f2 = fopen("file/2.txt", "at")or die("Ошибка");
$s2="hvgftft";
fputs($f2, $s2);
fclose($f2);
file_put_contents("file/2.txt", $s2, FILE_APPEND);


//$text = file_get_contents("file/2.txt");
//echo $text;



$ar = ["name" => "Иван",
       "surname" => "Ivanov",
       "age" => 15];
// $s3 = json_encode($ar, JSON_UNESCAPED_UNICODE);
// //$s3 = json_encode($ar);
// file_put_contents("file/3.json", $s3, FILE_APPEND);

$s4 = file_get_contents("file/3.json");
$ar1 = json_decode($s4, true);
var_dump($ar1);



?>