<!DOCTYPE html>
<html>
  <head>
    <title>strelchuk php</title>
  </head>
  <body>
    <?php
      function func(&$var1, &$var2, $operation)
    {
      $res = $var2 / $var1;
      $var1 = $var2 * $var1;
      $var2 = $var2 + $var1;
      $var2 = $var2 - $var1;
      $operation = "/ * + -";
          return $res;
    }
      $a = 5;
      $b = 10;
      $operation = "/ * - +";
      echo func($a, $b, $operation);
      echo $a;
      echo $b;
      echo $operation;
    ?>
  </body>
</html>