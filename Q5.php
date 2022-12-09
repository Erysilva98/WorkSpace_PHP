<pre>
<?php
$preço = 500;
$dias =60;
    echo "Valor da compra: $preço <br/>  " ;	
   if ($dias=(1 and <  = 29)) 
	 {
	 $result=(10 / 100)* $preço;
	 $preço=$preço-$result;
     echo "<br/> pagamento a vista:  " ;
	 echo $preço;
       
	}	
	 else if ($dias=(30  and < = 59)) 
	 {
       	$result=(4 / 100)* $preço;
		 $preço=$preço+$result;	 
	   echo "<br/> pagamento prazo 30 dias:  <br/> " ;
	   echo $preço;
	}	
	 else if  ($dias >=60)  
	   {
		$result=(9 / 100)* $preço;
	    $preço=$preço+$result;
		echo "<br/> pagamento prazo 60 dias:   <br/> " ;
       echo $preço;
	}
?>
</pre>