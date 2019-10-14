<?php 
//simple class define

class test{
	
	
}


//class with function no parameter and no return


class fun{
	 
	 public function hp()
	 {
		 echo "Hp Functin of class fun";
	 }
	
}

$obj1=new fun();
$obj1->hp();


// class functin with return value

class retu{
	 
	 public function hp()
	 {
		 return "<br>Hp Functin of class retu  with return string ";
	 }
	
}

$obj1=new retu();
echo $obj1->hp();


//class function with parameter but no return
class arithmatic{
	 
	 public function add($a,$b)
	 {
	echo "</br>addition of these ". $a . " and ". $b ." : ". ($a+$b);
	}
	public function mul($a,$b)
	 {
	echo "</br>multiplication of these ". $a . " and ". $b ." : ". ($a*$b);
	}
	
	public function sub($a,$b)
	 {
	echo "</br>subtraction of these ". $a . " and ". $b ." : ". ($a-$b);
	}
	
	public function div($a,$b)
	 {
	echo "</br>division of these ". $a . " and ". $b ." : ". ($a/$b);
	}
		
}

$obj1=new arithmatic();
$obj1->add(6,4);
$obj1->mul(6,4);
$obj1->div(6,4);
$obj1->sub(6,4);


// class function with return and parameters 


class mobile {
	
	public function samsung($a)
	{
		return "</br>Samsung mobiles ".$a;
	}
	
	public function lenovo($a)
	{
		return "</br>lenovo mobiles ".$a;
	}
	
	public function apple($a)
	{
		return "</br>apple mobiles ".	$a;
	}
	
	public function nokia($a)
	{
		return "</br>nokia mobiles ".$a;
	}

}

$mob=new mobile(33);
echo $mob->samsung(44);
echo $mob->apple(55);
echo $mob->lenovo(66);
echo $mob->nokia(77);


// class constructor function 

class classname{
	
		//constructor using class name
		function classname()
		{
			echo "</br>constructor with name of class ";
			
		}
	
}
$cln=new classname();

class regular{
	
	function __construct()
	{
		echo "</br>constructor with defalult name = _ construct()";
	}
}
$cln2=new regular();
?>



