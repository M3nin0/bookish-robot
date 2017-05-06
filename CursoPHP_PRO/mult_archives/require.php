<!DOCTYPE html>

<?php

  require "recebedor.php" ;

  //require_once Importa apenas uma vez o arquivo, ou seja se mais a frente do código houver uma importação ela não será feita
  //include -> importa o código e caso o código importado tenha problema, apenas avisa (Não para o script)
  //require -> Faz a mesma coisa que o include, porém caso o códgo esteja com erro, para a execução

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
