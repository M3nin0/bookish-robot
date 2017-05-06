<?php
  //Dados escalares

  //String
  $nome = "12345";
  //var_dump --> Mostra informações sobre a variavel
  var_dump($nome);

  //Validando o tipo de dados
  if(is_string($nome)){
    echo "É uma string <br>";
  }else
    echo "Não é uma string <br>";

  echo "<hr>";

  //Inteiro
  $numero = 12345;

  var_dump($numero);

  if(is_int($numero))
    echo "É um inteiro <br>";
  else
    echo "Não é um inteiro <br>";

  echo "<hr>";

  //Float
  $numeroF = 12.456;

  var_dump($numeroF);

  if(is_float($numeroF))
    echo "É um float <br>";
  else
    echo "Não é um float <br>";

  echo "<hr>";

  //Boolean
  $admin = False;

  var_dump($admin);

  if(is_bool($admin))
    echo "É um boolean";
  else
    echo "Não é um boolean";

  echo "<hr>";

  //Dados compostos
  //array
  $carros = array(
    "Gol",
    "Uno",
    "Camaro",
    20,
    2.1,
    True
  );

  var_dump($carros);

  if(is_array($carros))
    echo "É um array <br>";
  else
    echo "Não é um array <br>";

  

?>
