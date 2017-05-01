<?php

  echo "<h3> Dados cadastrados </h3>";

  $nome = $_GET['nome'];
  $idade = $_GET['age'];
  $email = $_GET['email'];

  if(isset($nome)){
    echo "<br>Nome: " . $_GET['nome'] . "<br>";
  }
  if(isset($idade)){
    echo "Idade: " . $_GET['age'] . "<br>";
  }
  if(isset($email)){
    echo "Email: " . $_GET['email'] . "<br>";
  }
