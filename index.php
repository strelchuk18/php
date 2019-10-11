<!DOCTYPE html>
<html>
  <head>
    <title>strelchuk php</title>
  </head>
  <body>
<!--
<?php
      function func(&$var1, &$var2, $operation)
    {
      switch ($operation) :
        case "/": return $var1 / $var2; 
        case "*": return $var1 * $var2;
        case "+": return $var1 + $var2;
        case "-": return $var1 - $var2;
       endswitch;
      $res = $var1 . $operation . $var2;
        return $res;
    }
      $a = 5;
      $b = 10;
      echo func($a, $b, '/');
      echo func($a, $b, '*');
      echo func($a, $b, '+');
      echo func($a, $b, '-');
      echo $a;
      echo $b;
    ?>
  -->
  <?php
    function stairs($x, $y) { 
      return $x . $y; 
    }
    $t = "<br>";
    for($i=1, $j=1; $i<8; $j++, $i=+$j)
      if ($i==1) break;
    {
        echo stairs ($i, "<br>");
    } 
    for($i=1, $j=1; $i<3; $j++, $i=+$j)
    {
        echo stairs ($i, "\n");
    } 
     echo $t;
    for($i=1, $j=1; $i<4; $j++, $i=+$j)
    {
        echo stairs ("\n", $i);
    } 
    echo $t;
    for($i=1, $j=1; $i<5; $j++, $i=+$j)
    {
        echo stairs ("\n", $i);
    } 
    echo $t;
    for($i=1, $j=1; $i<6; $j++, $i=+$j)
    {
        echo stairs ("\n", $i);
    } 
    echo $t;
    for($i=1, $j=1; $i<7; $j++, $i=+$j)
    {
        echo stairs ("\n", $i);
    } 
    echo $t;
    for($i=1, $j=1; $i<8; $j++, $i=+$j)
    {
        echo stairs ("\n", $i);
    } 
  ?> 










  </body>
</html>