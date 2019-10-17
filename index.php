<!DOCTYPE html>
<html>
  <head>
    <title>strelchuk php</title>
  </head>
  <body>
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
      echo "<br>";
    ?>
    <?php
      function stairs($x, $y) {
<<<<<<< HEAD
        $element = $x . $y;
        if (is_numeric($element)) {
         echo "Yes"; 
        } 
        else { 
          echo "No"; 
        }
=======
>>>>>>> 92f503ea3dc7c654045757a6dbc26ad262bf42ea
        $item = "";
        $item1 = "#";
        for ($i = $x; $i <= $y; $i++) {
          $item = $item . $i . $item1;
          echo $item . '</br>';
        }
<<<<<<< HEAD
      };
=======
      }
>>>>>>> 92f503ea3dc7c654045757a6dbc26ad262bf42ea
      stairs(1, 3);
    ?> 

  </body>
</html>