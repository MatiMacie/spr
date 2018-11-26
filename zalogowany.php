<?php
session_start();
  //echo $_POST['login'],$_POST['pass'];
  if (isset($_GET['wyloguj'])) {
    session_destroy();
    header('location: login.php?wylogowany=');
  }
  if (isset($_POST['przycisk']) || $_SESSION['login']) {
    if (isset($_SESSION['login']) || $_POST['login'] == 'jan' && $_POST['pass'] == 'tajne') {
      //prawidłowo zalogowany użytkownik
      if (!isset($_SESSION['login'])) {
        $_SESSION['login'] = $_POST['login'];
      }
      if (isset($_SESSION['blad'])){
        unset($_SESSION['blad']); //kasowanie zmiennej blad po dobrym logowaniu
      }
      echo " dzienboberek panie ",$_SESSION['login'],"ie<br>";


      echo '<a href="./zalogowany.php?wyloguj=">Wloguj się</a>';
    }else {
      //błędny login lub hasło, nie podał wszystkich danych
      if (empty($_POST['login']) || empty($_POST['pass'])) {
        //nie wprowadzono loginu lub hasła
        $_SESSION['blad'] = "Uzupełnij wszystkie pola";
        header('location: ./login.php');
      }else {
        //złe hasło lub login
        $_SESSION['blad'] = "Błędny login lub hasło";
        header('location: ./login.php');
      }
    }
  }else {
    header('location: ./login.php');
  }
 ?>
