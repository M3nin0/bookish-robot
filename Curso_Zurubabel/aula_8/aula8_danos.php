<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <title> Aula 8 - Tipos de dados</title>
  </head>
  <body>
    <form method="post">
      <input type="text" name="tipo_ataque">
      <input type="submit" value="Atacar">
    </form>

    <?php
      $opcao = strtolower($_POST['tipo_ataque']);

      if($opcao != NULL){
        switch($opcao){
          case 'fogo':
          case 'gelo':
          case 'escuridao':
          case 'terra':
            echo "Dano duplo!";
            break;
          case 'vento':
          case 'agua':
          case 'fisico':
            echo "Dano normal";
            break;
        }
      }
    ?>

  </body>

</html>
