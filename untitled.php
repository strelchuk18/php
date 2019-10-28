<?php
    function stairs($x, $y) { 
      return $x . $y; 
    }
    for($i=1, $j=1; $i<8; $j++, $i=+$j)
      if ($i==1) break;
    $t = "<br>";
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
<?php
      function stairs($x, $y) {
        $element = $x . $y;
  if(empty($element))
{
        $ups .= "";
}
else{
        if(!is_srting("^[А-Яа-я' -]+$", $element))
        {
                $ups .= "Введите имя только русскими буквами!<br>";
        }
        $item = "";
        $item1 = "#";
        for ($i = $x; $i <= $y; $i++) {
          $item = $item . $i . $item1;
          echo $item . '</br>';
        }
      }
      stairs(1, 3);
    ?> 

    <?php
      function stairs($x, $y) {
        $element = $x . $y;
        if (is_numeric($element)) {
         echo "Yes"; 
        } 
        else { 
          echo "No"; 
        }
        $item = "";
        $item1 = "#";
        for ($i = $x; $i <= $y; $i++) {
          $item = $item . $i . $item1;
          echo $item . '</br>';
        }
      }
      stairs(1, 3);
    ?> 


    <?php
      function stairs($x, $y) {
        $element = $x . $y;

        if(!is_string("^[А-Яа-я'-]+$", $element))
        {
                $ups .= "Введите имя только русскими буквами!<br>";
        }
        $item = "";
        $item1 = "#";
        for ($i = $x; $i <= $y; $i++) {
          $item = $item . $i . $item1;
          echo $item . '</br>';
        }
      }
      stairs('оль', 3);
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
    <?php
      function filee($file) {
        $file = ['text1.txt', 'order.txt', 'sample.txt', 'demo.txt'];
        $file = fopen ('text1.txt', 'r'); 
        while (!feof($file)) {
          $line = fgets($file, 2);
          $line++;
        }
        fclose($file);
      }
      filee($file);
    ?>





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
    -->




    <?php
      function filee($f) {
        $files = ['text1.txt', 'order.txt', 'sample.txt', 'demo.txt'];
        $file = fopen ('text1.txt', 'r');
        $file1 = fopen ('order.txt', 'r');
        $file2 = fopen ('sample.txt', 'r');
        $file3 = fopen ('demo.txt', 'r');
        $item = "";
        while (!feof($files)) {
          $item = $item . $files;
           echo fgets($file, 16). "<br />";
           echo fgets($file1, 16). "<br />";
           echo fgets($file2, 16). "<br />";
           echo fgets($file3, 16). "<br />";
          
        }
        fclose($file);
      }
      filee($f);
    ?>

    передати масив в функцію, масив в ехо форіч і ехо файл гет контент 

    <?php
    $arr = array('text1.txt' => 'order.txt' => 'sample.txt' => 'demo.txt');
      function filee($arr) {
        print_r($arr)
        $a = fopen ('text1.txt', 'r');
        $b = fopen ('order.txt', 'r');
        $c = fopen ('sample.txt', 'r');
        $d = fopen ('demo.txt', 'r');
          foreach ($arr as $value ) {
          echo $arr;
          }
            
          fclose($files);
        }
      filee(file_get_contents('text1.txt'));
    ?>


    <?php
      function filee($f) {
        $files = ['text1.txt', 'order.txt', 'sample.txt', 'demo.txt'];
        $a = fopen ('text1.txt', 'r');
        $b = fopen ('order.txt', 'r');
        $c = fopen ('sample.txt', 'r');
        $d = fopen ('demo.txt', 'r');
          foreach ($files as $value ) {
          
          }
            
          fclose($files);
        }
      filee($f);
    ?>



    
    <?php
    function team($one, $two) {
      $first_team = ['Dmytro' => 5, 'Ivan' => 1,'Vova' => 6, 'Andriy' => 3,'Vasyl' => 2,'Petro' => 4,'Kindrat' => 7,'Oleksandr' => 1,'Oksana' => 3,'Olena' => 5,'Kyrylo' => 3];
      $second_team = ['Stepan' => 5, 'Ivan' => 1,'Vova' => 6,'Serhii' => 3,'Vasyl' => 2,'Petro' => 4,'Oleksiy' => 7,'Iruna' => 1,'Oksana' => 3,'Olena' => 5,'Filip' => 3];
     $A = $first_team;
     $B = $second_team;
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
      team ($A, $B);
    ?>





    function team($A, $B) {
        asort($A);
          foreach($A as $k=>$v) {
            echo "$k=>$v"."<br />";
          }   
      }
        $first_team = ['Dmytro' => 5, 'Ivan' => 1,'Vova' => 6, 'Andriy' => 3,'Vasyl' => 2,'Petro' => 4,'Kindrat' => 7,'Oleksandr' => 1,'Oksana' => 3,'Olena' => 5,'Kyrylo' => 3];
        $second_team = ['Stepan' => 5, 'Ivan' => 1,'Vova' => 6,'Serhii' => 3,'Vasyl' => 2,'Petro' => 4,'Oleksiy' => 7,'Iruna' => 1,'Oksana' => 3,'Olena' => 5,'Filip' => 3];
        $result = array_merge($first_team, $second_team);
      team($result, $result);
      echo "<br />";

















      
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
      
      function team1($first_arr, $second_arr) {
        $common = [];
        foreach ($first_arr as $key => $value) {
          foreach ($second_arr as $key_two => $value_two) {
            if (($key == $key_two) && ($value == $value_two)) {
              $common[$key] = $value;
            }
          }
        }
        asort($common);
        return print_r($common); 
      }
        $first_team = [
          'Dmytro' => 5, 
          'Ivan' => 1,
          'Vova' => 6, 
          'Andriy' => 3,
          'Vasyl' => 2,
          'Petro' => 4,
          'Kindrat' => 7,
          'Ivan' => 1,
          'Oleksandr' => 1,
          'Oksana' => 3,
          'Olena' => 5,
          'Kyrylo' => 3
        ];
        $second_team = [
          'Stepan' => 5, 
          'Ivan' => 1,
          'Vova' => 6,
          'Serhii' => 3,
          'Vasyl' => 2,
          'Petro' => 4,
          'Oleksiy' => 7,
          'Iruna' => 1,
          'Oksana' => 3,
          'Olena' => 5,
          'Filip' => 3
        ];
      team1($first_team, $second_team);
    ?>
