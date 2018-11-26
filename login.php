<?php
session_start();
if (isset($_SESSION['login'])) {
  header('location: ./zalogowany.php');
}

?>

<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>system logowania</title>
  <link rel="stylesheet" href="./style.css">
  </head>
  <body>
    <?php
    if (isset($_GET['wylogowany'])) {
      echo '<div class="niebieski">','Wylogowałeś się',"<hr>";
    }
    if (isset($_SESSION['blad'])) {
      echo '<div class="czerwony">',$_SESSION['blad'],"<hr>";
    }
    ?>
    <form action="zalogowany.php" method="post">
      <input type="text" name="login" placeholder="login"><br>
      <input type="password" name="pass" placeholder="haslo"><br>
      <input type="submit" name="przycisk" value="zaloguj sie">


    </form>
  </body>
</html>
