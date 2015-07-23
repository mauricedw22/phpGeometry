

<?php

$var1_1 = $_POST['var1'];
$var1 = (float)$var1_1;
$area = round((M_PI * pow($var1, 2)),5);

if($_SERVER["REQUEST_METHOD"]=="POST"){

    if($var1 != ""){
	  
	      echo "<p style='color: red; font-size: 17px; font-family: Rockwell, Garamond; margin-top: 0px'> Area = ".$area." square units.</p>";
        
		}else {
		
		  echo "<p style='color: red;font-size: 19px; font-family: Rockwell, Garamond; margin-top: 0px'> Please use valid numbers! </p>";
		
		}
		
}


?>