<?php
  $polaczenie = @new mysqli('localhost','root','','ogloszenia');
  if(!$polaczenie->connect_errno){
    $id = $_GET['usun'];
    $zapytanie = "DELETE FROM `uzytkownik` WHERE `uzytkownik`.`id` = $id";
    $rezultat = $polaczenie->query($zapytanie);
    header('location: ./ogloszenia2.php');
  }else{
    header('location: ./ogloszenia2.php');
  }
?>
