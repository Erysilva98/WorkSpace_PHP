<?php
  function Soma(&$a, $b)
  {
    $a = $a + $b;

    $b = $a + $b;

    print "A = $a";

    for($i = 1; $i < 5; $i++){ echo '&nbsp;';}

    print "B = $b<BR>";

   }
  $a = 2;
  $b = 3;
  Soma($a,$b);
  echo '<hr><font color="#FF0000"><b>Fora da fun&ccedil;&atilde;o</b></font><BR><hr>';
  print "A = $a";
  for($i = 1; $i < 5; $i++){ echo '&nbsp;';}
  print "B = $b";
  
?>