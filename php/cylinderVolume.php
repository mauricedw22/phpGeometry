

<?php

$var1_1 = $_POST['var1'];
$var1 = (float)$var1_1;
$var2_2 = $_POST['var2'];
$var2 = (float)$var2_2;

$volume = round((M_PI *($var1 * $var1) * $var2), 5);

if($_SERVER["REQUEST_METHOD"]=="POST"){

    if($var1 != "" && $var2 != ""){
	  
	      echo "<p style='color: red; font-size: 17px; font-family: Rockwell, Garamond; margin-top: 0px'> Volume = ".$volume." cubic units.</p>";
        
		}else {
		
		  echo "<p style='color: red;font-size: 19px; font-family: Rockwell, Garamond; margin-top: 0px'> Please use valid numbers! </p>";
		
		}
		
}


?>