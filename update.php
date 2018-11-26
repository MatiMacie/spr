<?php
$polaczenie = @new mysqli('localhost','root','','ogloszenia');
if(!$polaczenie->connect_errno){
  if(!empty($_POST['imie']) && !empty($_POST['nazwisko'])){
    $imie = $polaczenie->real_escape_string($_POST['imie']);
    $nazwisko = $polaczenie->real_escape_string($_POST['nazwisko']);
    $telefon = $polaczenie->real_escape_string($_POST['telefon']);
    $email = $polaczenie->real_escape_string($_POST['e-mail']);
    $id = $_POST['id'];
    //echo $imie,$nazwisko,$telefon,$email;
    $zapytanie = "UPDATE `uzytkownik` SET `imie`='$imie',`nazwisko`='$nazwisko',`telefon`='$telefon',`email`='$email' WHERE id = $id";
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
