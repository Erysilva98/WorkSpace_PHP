<pre>
<?Php
	$num = array();
   
	for ( $i=0 ; $i <10; $i++)
	{ 
		$num[$i] = rand(10,99) ;
   	}
	echo ( " <br/>  LETRA => B  : <br/> " );
   print_r (array_values ($num));
   echo   " <br/> LETRA - C <br/>";
   sort($num);
    foreach ($num as $A => $B) {
    echo  $num [$A ] =  $B . "\n" ;
	}
	echo   " <br/> LETRA - D e E <br/>";

	 $valor= ($num);
     for ($i = 0; $i < count($valor); $i++)
	 {
       if ( $valor[$i]  % 2 ==0 )
	   {
        echo $valor[$i]   ;
   }   
  }
  echo   " <br/> LETRA - F e G <br/>";
	 $v= ($num);
     for ($i = 0; $i < count($v); $i++)
	 {
       if ( $v[$i]  % 2 == 1)
	   {
        echo $v[$i]   ;
   }
  }
  
  

?>
</pre>