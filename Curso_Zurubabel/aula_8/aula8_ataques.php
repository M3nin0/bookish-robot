<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 8 - Ataques em um jogo de RPG</title>
  </head>
  <body>
    <form method="post">
      <input type="text" name="ataque">
      <input type="submit" value="Atacar">
    </form>
    <?php
      //Simulando ataques que causam dano
      //O inimigo tem fraqueza a ataques de fogo, gelo, vento, terra
      //Mas não sofre dano de Escuridão, magia e dano físico

      $seu_ataque = strtolower($_POST['ataque']);
      if($seu_ataque != NULL){
        switch($seu_ataque){
          case 'fogo':
            echo "<h2>Seu ataque de ". $seu_ataque . " causou dano!!!</h2>";
            break;
          case 'gelo':
            echo "<h2>Seu ataque de ". $seu_ataque . " causou dano!!!</h2>";
            break;
          case 'vento':
            echo "<h2>Seu ataque de ". $seu_ataque . " causou dano!!!</h2>";
            break;
          case 'terra':
            echo "<h2>Seu ataque de ". $seu_ataque . " causou dano!!!</h2>";
            break;
          case 'escuridão' || 'escuridao':
            echo "<h2>Seu ataque de ". $seu_ataque . " não causou dano!!!</h2>";
            break;
          case 'magia':
            echo "<h2>Seu ataque de ". $seu_ataque . " não causou dano!!!</h2>";
            break;
          case 'físico' || 'fisico':
            echo "<h2>Seu ataque de ". $seu_ataque . " não causou dano!!!</h2>";
            break;
          default:
            echo "Você deve atacar direito!!!";
            break;
        }
      }

    ?>

  </body>
</html>
