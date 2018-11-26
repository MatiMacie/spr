<?php
$polaczenie = @new mysqli('localhost','root','','ogloszenia');
if(!$polaczenie->connect_errno){
  if(!empty($_POST['imie']) && !empty($_POST['nazwisko'])){
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $telefon = $_POST['telefon'];
    $email = $_POST['e-mail'];
    //echo $imie,$nazwisko,$telefon,$email;
    $zapytanie = "INSERT INTO `uzytkownik`(`imie`, `nazwisko`, `telefon`, `email`) VALUES ('$imie','$nazwisko','$telefon','$email')";
    $rezultat = $polaczenie->query($zapytanie);
    header('location: ./ogloszenia2.php');
  }
  else {
    header('location: ./ogloszenia2.php');
  }
}else{
  header('location: ./ogloszenia2.php');
}
?>
