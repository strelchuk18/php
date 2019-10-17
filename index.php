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
    
      function stairs($x, $y) {
        if (is_numeric($x) && is_numeric($y)) {
          $item = '';
          for ($i = $x; $i <= $y; $i++) {
            $item = $item . $i . '#';
            echo $item . '</br>';
          }
        }
        else {
          echo 'Please write numeric values in function';
        }
      }
      stairs(1, 3);

      function stairs1($x, $y) {
        if (is_string($x) || is_string($y)) {
          echo 'Please write numeric values in function';
        } 
        else {
          $item = '';
          for ($i = $x; $i <= $y; $i++) {
            $item = $item . $i . '#';
            echo $item . '</br>';
          }
        }
      }
      stairs1('1', 3);
    ?>
    <?php
      function filee($f) {
        $files = ['text1.txt', 'order.txt', 'sample.txt', 'demo.txt'];
        $file = fopen ('text1.txt', 'r');
        $file1 = fopen ('order.txt', 'r');
        $file2 = fopen ('sample.txt', 'r');
        $file3 = fopen ('demo.txt', 'r');
          if (!feof($files)) {
            echo fgets($file, 15). "<br />";
            echo fgets($file1, 15). "<br />";
            echo fgets($file2, 12). "<br />";
            echo fgets($file3, 14). "<br />";  
          }
          fclose($files);
        }
      filee($f);
    ?>
  </body>
</html>
