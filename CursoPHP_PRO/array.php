<?php

  //$grupo = array(1,2,3);

  /*
  $variavel = array(

    CHAVE => VALOR;

  )
  */

  /*
  $pessoa = array(
    "nome" => '',
    "sobrenome" => "Carlos",
    "idade" => 20,
    "sexo" => "masculino"

  );
  */
  /*
  $pessoa["nome"] = "Luiz";

  echo "Nome: " . $pessoa["nome"] . "<br>";
  echo "Sobrenome: " . $pessoa["sobrenome"] . "<br>";
  echo "Idade: " . $pessoa["idade"] . "<br>";
  echo "Sexo: " . $pessoa["sexo"] . "<br>";
  */

  //Comando para exibir todo o array na tela
  //print_r
  //print_r($pessoa);

  //Array dentro de array

  $produtos = array(
    0 => array(
      "nome" => "",
      "quantidade" => "",
      "infos" => ""
    ),
    1 => array(
      "nome" => "",
      "quantidade" => "",
      "infos" => ""
    )
  );

  $produtos[0]["nome"] = "Abacaxi";
  $produtos[0]["quantidade"] = 20;
  $produtos[0]["infos"] = "Amarelado";

  $produtos[1]["nome"] = "Maça";
  $produtos[1]["quantidade"] = 35;
  $produtos[1]["infos"] = "Vermelha";

  //Adiciona automaticamente as chaves
  $produtos[] = array(
    "nome" => "Uva",
    "quantidade" => "45",
    "infos" => "Roxas"
  );


  //Exibindo valor
  print_r($produtos);
?>
