<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 7</title>
  </head>
  <body>
    <?php
      $var1 = False;
      $var2 = True;
      //Nesta aula iremos ver sobre os operadores lógicos
      //E = &&
      //Neste caso só será aceito se os dois testes forem verdadeiros
      //if($var1 && $var2)
      //  echo "Verdade com E (&&)<br>";
      //OU = ||
      //Neste caso só será falso se as duas variaveis forem falsas
      //if($var1 || $var2)
      //  echo "Verdade com OU (||)<br>";

      //NOT
      //Inverte o valor lógico
      //Assim quando for True ele transforma em False. E quando for False vira True
      //if(!$var1)
      //  echo "Verdade com NOT";

      //XOR
      // No caso do XOR só será verdade quando as variaveis em comparação forem diferentes
      //Por exemplo se var1 = True e var2 = True, ele irá retornar falso,
      //Mas caso seja var1 = True e var2 = False, ele irá retornar verdadeiro.
      if($var1 XOR $var2)
        echo "Verdade (XOR)";
      else
        echo "Falso (XOR)";
    ?>
  </body>
</html>
