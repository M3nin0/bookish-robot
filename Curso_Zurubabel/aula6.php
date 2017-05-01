<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 6</title>
  </head>
  <body>
    <?php
      //Aula sobre operadores de comparação =D

      $num1 = 90;
      $num2 = 45;

      //Comparação de igualdade
      if($num1 == $num2)
        echo "Os números " . $num1 . " é igual a " . $num2;

      //Comparação de diferença
      if($num1 != $num2)
        echo "<br>Os números são diferentes<br>";

      //Comparação de menor
      if($num1 < $num2)
        echo "<br>O primeiro número é menor que o segundo<br>";
      if($num1 > $num2)
        echo "<br>O segundo número é menor que o primeiro<br>";

      //Comparação de menor/igual
      if($num1 >= $num2)
        echo "<br>O primeiro número é maior ou igual ao segundo<br>";
      if($num2 >= $num1)
        echo "<br> O segundo número é maior ou igual ao primeiro<br>";

      //Comparação de igual
      // == Este reconhece apenas o conteudo e não o tipo
      // === Este reconhece o tipo e o conteúdo
      //if('1' == 1)
      //  echo "<br>São iguais, porém não verifiquei o tipo<br>";
      //if('1' === 1)
      //  echo "<br>São iguais, e eu verifiquei o tipo e o conteúdo<br>";
      //else
      //  echo "<br>Não são iguais<br>";

      //Comparação de não-iguais
      if(1 !== 1) //Verifica tipo
        echo "<br>Não são iguais  1 !== 1<br>";
      if("1" !== 1) //Verifica tipo
      echo "<br>Não são iguais<br> '1' !== 1";
    ?>

  </body>
</html>
