<html>
  <head>
    <title>Alternando entre html e php</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
    $verify = $_SERVER['HTTP_USER_AGENT'];

      if(strpos($verify, "MSIE") !== FALSE){
    ?>
    <h3>A função strpos() não retornou nada falso</h3>
    Isso significa que você está usando Internet explorer

    <?php
      }else{
    ?>
    <h3> A função strpos() retornou falso</h3>
    Isso significa que você não está usando Internet Explorer
    <?php
      }
    ?>
  </body>
</html>
