<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo($myrow['name']);?></title><!-- Выведет титл страницы из базы -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<?php
require_once 'connection.php'; // подключаем скрипт
 
// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
 
// выполняем операции с базой данных
//  $query ="select full_name from Soldat where id in (select soldat_id from Mashine WHERE model = 'su-26')";
//  $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
//  if($result) 
//  {
//      $res = mysqli_fetch_assoc($result);
//     var_dump($res);
//  }

// закрываем подключение
mysqli_close($link);
?>



<form method="post">
 <p><input  class = "btn-soldat" type="button" value=" вывести таблицу солдат "></p>
 <div class = "soldat" style = "display: none;" >
 <?php
 require_once 'connection.php'; // подключаем скрипт

 $link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));

 $query ="select * from Soldat"; //выводим таблицу солдат
 $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
 if($result)
 {
    
    while ($row = mysqli_fetch_assoc($result)) {
        echo 
            $row['id'] . ' ' .
            $row['full_name'] . ' ' .
            $row['team_id'] . ' ' .
            $row['rank_id'] . ' ' .
        '<br>';
    }
    
}
 mysqli_close($link);
 ?>
 </div>
</form>

<form method="post">
 <p><input  class = "btn-mashine" type="button" value=" вывести таблицу машин "></p>
 <div class = "mashine" style = "display: none;" >
 <?php
 require_once 'connection.php'; // подключаем скрипт

 $link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));

 $query ="select * from Mashine"; //выводим таблицу машин
 $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
 if($result)
 {
    
    while ($row = mysqli_fetch_assoc($result)) {
        echo 
            $row['id'] . ' ' .
            $row['model'] . ' ' .
            $row['soldat_id'] . ' ' .
            $row['hangar_id'] . ' ' .
        '<br>';
    }
     
}
 mysqli_close($link);
 ?>
 </div>
</form>

<form method="post">
 <p><input class = "btn-tanks" type="button" value=" вывести таблицу танков "></p>
 <div class = "tanks" style = "display: none;"> 
 <?php
 require_once 'connection.php'; // подключаем скрипт

 $link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));

$query ="select * from Tanks"; // выводим таблицу танков
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
     while ($row = mysqli_fetch_assoc($result)) {
        echo 
            $row['id_Mashine'] . ' ' .
            $row['team_id'] . ' ' .
            $row['caliber'] . ' ' .
        '<br>';
    }
}
 mysqli_close($link);
 ?>
 </div>
</form>

<form method="post">
 <p><input class = "btn-aircrafts" type="button" value=" вывести таблицу самолетов "></p>
 <div class = "aircrafts" style = "display: none;"> 
 <?php
 require_once 'connection.php'; // подключаем скрипт

 $link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));

$query ="select * from Aircrafts"; // выводим таблицу самолетов
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
     while ($row = mysqli_fetch_assoc($result)) {
        echo 
            $row['id_Mashine'] . ' ' .
            $row['rockets'] . ' ' .
        '<br>';
    }
}
 mysqli_close($link);
 ?>
 </div>
</form>

</body>
<script src="visible.js"></script>
</html>