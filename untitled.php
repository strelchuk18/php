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