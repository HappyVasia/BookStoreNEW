<?php
$hostname="localhost";
	$username="root";
	$password="";
	$dbname="bookstore1";
	$link = mysqli_connect($hostname, $username, 
	$password, $dbname) 
         or die("Ошибка " . mysqli_error($link));
	mysqli_set_charset($link,'utf8');


$query = "SELECT * FROM книги";
$result = $link->query($query);
if (!$result) die($link->error); 
$knigi = array();
$rows = $result->num_rows; 
 for ($i = 0 ; $i < $rows ; ++$i){
	$result->data_seek($i);  //выбор строки
$row = $result->fetch_row(); //получение строки
$knigi[] = $row;
 }
echo json_encode($knigi);

/*
$query = "SELECT DISTINCT автор
           FROM книги ORDER BY автор ";
$result = $link->query($query);
if (!$result) die($link->error); 
$rows = $result->num_rows; 
echo '<div class = "otbor">';
echo '<div class = "otbor1"> АВТОРЫ 
<i class="arrow down"></i>    ';
echo '<div class = "otbor2">';
 for ($i = 0 ; $i < $rows ; ++$i){
	$result->data_seek($i);  //выбор строки
$row = $result->fetch_row(); //получение строки
print<<< _HTML_

*/


/*
$otbor = $_GET['otbor3'];
$query = "SELECT картинка, книга_id, автор, название, 
жанр, издательство, город_издания, год_издания, 
стоимость_продажи
           FROM книги WHERE автор = '$otbor' ";
$result = $link->query($query);
if (!$result) die($link->error); 
$rows = $result->num_rows; 

*/









?>