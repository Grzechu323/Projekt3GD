<?php

$db_user ='s149654';
$db_password ='?vQ3Hm5SbA5C';

try{
	$connection = new PDO('mysql:host=localhost;dbname=s149654',$db_user, $db_password);
}catch (PDOException $exception){
	echo 'Błąd łączenia z bazą danych.';
}
?>