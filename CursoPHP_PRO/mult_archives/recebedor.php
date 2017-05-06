<?php

    $nome = $_POST['nome'];
    $email = $_POST['email'];

    if(isset($nome) && !empty($nome)){
      echo "Seu nome é " . $nome . "<br>";
    }
    if(isset($email) && !empty($email)){
      echo "Seu email é " . $email;
    }
