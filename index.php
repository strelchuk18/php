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
      function stairs($x, $y) 
      {
        if (is_numeric($x) && is_numeric($y))
        {
          $item = "";
          $item1 = "#";
          for ($i = $x; $i <= $y; $i++) 
          {
            $item = $item . $i . $item1;
            echo $item . '</br>';
          }
        } 
          else 
          { 
            echo "Add numeric for function"; 
          }     
      }
      stairs(1, 3);
    ?> 
    <?php
      function stairs1($x, $y) 
      {
        if (is_string($x) || is_string($y)) 
        {
          $item = "";
          for ($i = $x; $i <= $y; $i++) 
          {
            $item = $item . $i;
            echo $item . '</br>';
          }
        } 
          else 
          { 
            echo "Add text for function"; 
          }     
      }
      stairs1('ac', 'b');
    ?> 
  </body>
</html>
