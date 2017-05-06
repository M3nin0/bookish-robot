<!DOCTYPE html>

<?php

    $nome = $_POST['nome'];
    $email = $_POST['email'];

    if(isset($nome) && !empty($nome)){
      echo "Seu nome é " . $nome . "<br>";
    }
    if(isset($email) && !empty($email)){
      echo "Seu email é " . $email;
    }
?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Página inicial</title>
  </head>
  <body>
    <form method="post">
      Nome:<br>
        <input required type="text" name="nome"><br>

      Email:<br>
        <input required type="text" name="email"><br>

        <input type="submit"><br>
    </form>

  </body>

</html>
