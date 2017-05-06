<?php
  //Arrays

  /*

    $NOME = array(
      chave => valor
    )

    A definição da chave é opcional
    $NOME = array(
      valor1,
      valor2
    )

    A definição pode ser feita também com:
    $computadores = array();

    E ainda, os arrays podem ser definidos por:

    $cidades = [];

  */

  //Arrays numericos
  $carros = array(
    0 => "BMW",
    "Veloster",
    "Hilux"
  );

  //Adicionando valor ao Array
  //Perceba que dentro das chaves não há valores, isso permite que o valor novo
  //seja inserido na ultima possição do vetor
  $carros[] = "i30";

  //Função para exibir arrays --> print_r
  echo "Array completo <br>";
  print_r($carros);

  echo "<hr>";

  echo "Valores no array <br>";
  echo $carros[0];

  echo "<hr>";

  echo "Motos <br>";

  $motos = array(); //Define array vazio

  //Definindo os valores
  $motos[] = "Ninja"; //Posição 0
  $motos[] = "XJ 600"; //Posição 1

  echo $motos[0] . "<br>";
  echo $motos[1] . "<br>";

  //Exibindo a quantidade de elementos dentro de um array
  //Para isso usa-se a função count

  $totalCarros = count($carros);
  $totalMotos = count($motos);

  echo "<br><h1>Quantidade de elementos no array 'motos'</h1>";
  echo "<h1>" . $totalMotos;

  echo "<br><h1>Quantidade de elementos no array 'carros'</h1>";
  echo "<h1>" . $totalCarros . "</h1>";

  //Percorrendo array com foreach

  foreach ($carros as $value) {
    echo $value . "<br>";
  }

  //Arrays associativos
  echo "<hr>";
  echo "Arrays associativos <br>";


  $pessoa = array("nome" => "Rodrigo", "idade" => 23, "altura" => 1.89);
  $pessoa['nome2'] = "José";

  foreach ($pessoa as $key => $value) {
    echo "Chave: " . $key . "<br>";
    echo "Valor: " . $value . "<br>";
  }

  //Arrays multidimensionais
  echo "<hr>";
  echo "Arrays multidimensionais <br>";

  $times = array(
    "cariocas" => array("campeao" => "vasco","vice" => "flamengo","terceiro" => "botafogo"),
    "paulistas" => array("São paulo", "Palmeiras")
);

  echo $times["cariocas"]["vice"] . "<br>";
  echo "ARRAY COMPLETO <br>";
  print_r($times);

  echo "<br><h1> foreach </h1><br>";
  foreach($times["cariocas"] as $key => $value)
    echo $value . "<br>";
