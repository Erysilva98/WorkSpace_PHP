<pre>
<?php
   $num = array();
    echo   " <br/> *NUMEROS ALEATORIOS* <br/>";

    for ( $i =0 ; $i <10; $i++)
	{ 
    echo "-";
	echo $num[$i] = rand(1,90) ;
	       }
    echo   " <br/> LETRA ----- A ---- <br/>";
     	 $par= ($num);
     for ($i = 0; $i < count($par); $i++)
	 {
       if ( $par[i] % 2 == 0 ) 
	   {
	   echo "<br/>  Multiplicação dos pares " ;
       $r = $par[$i]   ;	
	   echo $r;
   } 
   
  }
 echo   " <br/> LETRA ----- B ---- <br/>";
     	 $impar = ($num);
     for ($i = 0; $i < count($impar); $i++)
	 {
       if ( $impar[i] % 2 == 1 )
	   {
	   echo "<br/> Multiplicação dos impares " ;
      echo  $r = $impar[$i] + $impar[i] / $i   ;
   }   
       } 
?>
</pre>