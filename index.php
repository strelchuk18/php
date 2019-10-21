<!DOCTYPE html>
<html>
  <head>
    <title>PHP</title>
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
          echo 'Please write numeric values in function'. '</br>';
        }
      }
      stairs(1, 5);

      function stairs1($x, $y) {
        if (is_string($x) || is_string($y)) {
          echo 'Please write numeric values in function'. '</br>';
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
      
      
      function filee($files) {
        foreach ($files as $file) {
          echo file_get_contents ($file). "<br />";
        }
      }
      $files = ['text1.txt', 'order.txt', 'sample.txt', 'demo.txt', 'test.txt', 'test2.txt', 'test3.txt', 'test.txt'];
      filee($files);
      echo "<br />";
      
      function team($A, $B) {
         asort($A);
          foreach($A as $k=>$v) {
              echo "$k=>$v"."<br />";
          }
          echo "<br />";
          asort($B);
          foreach($B as $k=>$v) {
            echo "$k=>$v" . "<br />";
          }
      }
        $first_team = ['Dmytro111' => 5, 'Ivan' => 1,'Vova' => 6, 'Andriy' => 3,'Vasyl' => 2,'Petro' => 4,'Kindrat' => 7,'Oleksandr' => 1,'Oksana' => 3,'Olena' => 5,'Kyrylo' => 3];
        $second_team = ['Stepan' => 5, 'Ivan' => 1,'Vova' => 6,'Serhii' => 3,'Vasyl' => 2,'Petro' => 4,'Oleksiy' => 7,'Iruna' => 1,'Oksana' => 3,'Olena' => 5,'Filip' => 3];
      team($first_team, $second_team);
    ?>
  </body>
</html>
