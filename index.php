<title>Счетчик хитов</title>
<?php
$host = 'localhost'; // адрес сервера 
$database = 'hits_db'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль
 
//Подключение
$link = mysqli_connect($host, $user, $password, $database);
//Прибавление счётчика посещений 
$queryUpdate ="UPDATE hits_table SET hits=hits+1";
//Получение количества посещение
$querySelect ="SELECT * FROM hits_table";
//Выполнение запросов
mysqli_query($link, $queryUpdate); 
$result = mysqli_query($link, $querySelect); 
//Вывод ответа
if($result)
{
    $row = mysqli_fetch_row($result);
    echo ('Страница была загружена '.$row[0].' раз. Текущее время '. date('H:i').'.');
}
 
//Закрыть подключение
mysqli_close($link);
?>