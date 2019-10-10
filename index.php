<!DOCTYPE html>
<html>
  <head>
    <title>strelchuk php</title>
  </head>
  <body>
    <?php
      function func(&$var1, &$var2)
    {
      $res = $var2 / $var1;
      $var1 = $var2 * $var1;
      $var2 = $var2 + $var1;
      $var2 = $var2 - $var1;
      return $res;
    }
      $a = 5;
      $b = 10;
      echo func($a, $b);
      echo $a;
      echo $b
    ?>
  </body>
</html>