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

?>
