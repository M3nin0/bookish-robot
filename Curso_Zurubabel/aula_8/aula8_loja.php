<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 8</title>
  </head>
  <body>
    <?php
      //Aula sobre switch-case.
      //Esta aula esta nomeada 8, porém nos vídeos ela seria a aula 9.Beleza =D
      //O contexto para o exercício:
      /*Em uma loja de um jogo de RPG, você tem 4 opções:
      * 1 - Comprar;
      * 2 - Vender;
      * 3 - Trocar;
      * 4 - Sair;
      Como a escolha dessas opções pode ser feita em PHP? Com Switch case, veja:
      */
    ?>
    <h3>Escolha uma opção: </h3>
    <ol>
      <li>Comprar</li>
      <li>Vender</li>
      <li>Trocar</li>
      <li>Sair</li>
    </ol>
    <form method="post">
      <input type="text" name="escolha">
      <input type="submit">
    </form>
    <?php
      $opcao = $_POST['escolha'];
      if($opcao != NULL){
        switch ($opcao) {
          case '1':
            echo "<br>Você irá comprar....<br>";
            break;
          case 2:
            echo "<br>Você irá vender....<br>";
            break;
          case 3:
            echo "<br>Você irá trocar....<br>";
            break;
          case 4:
            echo "<br>Tchau! Até mais<br>";
            break;
          default:
            echo "<br>Opção invalida!<br>";
            break;
        }
    }
    ?>
  </body>
</html
