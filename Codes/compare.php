<html>
  <head>
    <title>Comparando versões de navegador</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      if(strpos($_SERVER["HTTP_USER_AGENT"], "MSIE") != FALSE){
        echo "Você usa Internet Explrer<br>";
      }else{
        echo "Você não usa Internet Explorer<br>";
      }
    ?>

  </body>



</html>
