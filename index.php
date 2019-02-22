<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php
    $android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
    $iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
    if ($android || $bberry || $iphone || $ipod || $webos== true){
      header('Location: http://www.yoursite.com/mobile');
    }
     ?>
  </head>
  <body>
    <?php
      echo date('Y-m-d H:i:s');
     ?>
  </body>
</html>
