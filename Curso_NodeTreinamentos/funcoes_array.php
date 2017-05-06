<?php

  //is_array(); Verifica se é um array

  $pessoal = array("nome" => "Felipe","idade" => 21, "altura" => 1.89);

  /*
  if(is_array($pessoal))
    echo "É um array <br>";
  else
    echo "Não é array <br>";
  */

  //in_array; Verifica se um certo valor está presente no array
  //in_array(VALOR_A_SER_ENCONTRADO, $ARRAY_A_SER_UTILIZADO_NA_PESQUISA);
  //echo in_array("Felipe", $pessoal);

  //array_keys(); Cria um novo array com as chaves do array antigo como valor

  //$keys = array_keys($pessoal);
  //print_r($keys);

  //array_values(); Retorna os valores do array anterior como parametros
  //$value = array_values($pessoal);
  //print_r($value);


  //array_merge(); Faz a junção de arrays

  $carros = array("Camaro", "Uno", "Gol");
  $motos = array("XJ 600", "Pop100", "cb1000");
  /*
  $veiculos = array_merge($carros, $motos);
  print_r($veiculos);
  */

  //array_pop(); Exclui a ultima possição do array;
  //echo array_pop() exibe o valor excluido

  /*
  print_r($carros);
  echo "<br>";
  array_pop($carros);
  echo "<br>";
  print_r($carros);
  */

  //array_shift(); Exclui o primeiro elemento do array
  //echo array_shift() exibe o valor excluido

  /*
  print_r($carros);
  echo "<br>";
  array_shift($carros);
  //echo array_shift($carros) . "<br>";
  print_r($carros);
  */

  $frutas = array("Maça", "Uva", "Abacaxi");

  //array_unshift(); Adiciona elementos no inicio do array;

  /*
  print_r($frutas);
  echo "<br>";
  array_unshift($frutas, "Banana", "Acerola");
  print_r($frutas);
  */

  //array_push(); Adiciona elementos no final do array

  /*
  print_r($frutas);
  echo "<br>";
  array_push($frutas, "Acerola", "Manga");
  print_r($frutas);
  */

  //array_combine(); Mescla dois arrays
  //array_combine(CHAVES, VALORES);

  $keys = array("campeao", "vice", "terceiro");
  $values = array("Vasco", "Flamengo", "Botafogo");


  //$times = array_combine($keys, $values);

  //print_r($times);

  //array_sum(); Faz a soma dos elementos presentes no array

  $soma = array(
    5,
    6,
    7,
    10
  );

  //echo array_sum($soma);

  //explode(); transforma string em array
  //explode(DIVISOR, VARIAVEL_A_SER_TRANSFORMADA)

  //$data = "30/02/2023";

  //$novaData = explode("/", $data);

  //print_r($novaData);

  //implode(); Transforma array em string;

  $nomes = array(
    "Felipe",
    "José",
    "Maria"
  );
  $string = implode("--", $nomes);

  echo $string;

?>
