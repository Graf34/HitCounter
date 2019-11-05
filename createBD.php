<?php
$host = 'localhost'; // адрес сервера 
$database = 'hits_db'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль
 
//Подключение
$link = mysqli_connect($host, $user, $password);
$queryCreateBD ="CREATE DATABASE $database";
$queryCreateTable ="CREATE TABLE $database.hits_table ( hits INT NOT NULL )";
$queryInsert ="INSERT INTO `hits_table` (`hits`) VALUES ('0');";
mysqli_query($link, $queryCreateBD); 
mysqli_query($link, $queryCreateTable); 
$link = mysqli_connect($host, $user, $password,$database);
$res=mysqli_query($link, $queryInsert); 
if ($res){
    echo('База данных успешно создана!');
}
//Закрыть подключение
mysqli_close($link);
?>