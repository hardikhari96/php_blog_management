<?php 
// 1) simple function without class

	function mobile()
	{
		
			echo "Simple function exicuted";

	}
	

	//calling function 
	mobile();

// 2) Function with return value


	function returnval()
	{
		
			echo "</br>valued returned</br>";

	}
	//calling return value
	echo returnval();
	

// 3) Parameterised function
	
	function parafun($a,$b)
	{
			
			echo "Additon of ".$a." and ".$b." : ".($a+$b);

	}
	//calling function with parameter
	
	parafun(8,3);
	
	
	echo "</br>";
// 4) Parameterised return function
	
	function parafunre($a,$b)
	{
			
			return "Multiplication of ".$a." and ".$b." : ".($a*$b);

	}

	echo parafunre(488,6);
?>


