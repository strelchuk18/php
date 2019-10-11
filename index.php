<!DOCTYPE html>
<html>
  <head>
    <title>strelchuk php</title>
  </head>
  <body>
    <?php
      function func(&$var1, &$var2, $operation)
    {
      $res = $var1 . $operation . $var2;
      return $res;
    }
      $a = 1;
      $b = 2;
      echo func($a, $b, "/");
      echo func($a, $b, "*");
      echo func($a, $b, "+");
      echo func($a, $b, "-");
      echo $a;
      echo $b;
    ?>
  </body>
</html>