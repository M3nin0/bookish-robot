<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 3 - Funções</title>
  </head>
  <body>
    <?php
      //Veremos como definir variaveis em php =D
      function soma(){
        echo "1 + 1 = " . (1 + 1) . "<br>";
      }
      function somaArgs($num1, $num2){
        echo "$num1 + $num2 = " . ($num1 + $num2). "<br>";
      }

      $f = 0;
      function retorna($var1, $var2){
        return $var1 + $var2;
      }

      soma();
      somaArgs(3,5);

      echo "Var antes do return = $f<br>";
      $f = retorna(8,8);
      echo "Var depois do return = $f<br>";
    ?>

  </body>
</html>
