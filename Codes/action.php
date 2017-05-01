<?php
    $nome = htmlspecialchars($_POST['name']);
    $idade = (int)$_POST['age'];

    if ($idade <= 1){
      $var = 'year';
    }else{
      $var = 'years';
    }

    echo "Hi $nome <br>";
    echo "You are $idade $var old.";
?>
