<?php


class MyClass {
		
	public $property = "This is the value of the property.";
	
	public function __construct() {
		echo "The ".__CLASS__." instantiated"."<br>";
	}
	
	public function __destruct() {
		echo "The ".__CLASS__." object destroyed"."<br>";
	}
	
	public function getProperty() {
		return $this->property."<br>";	
	}
	
	public function setProperty($newProperty) {
		$this->property = $newProperty;
	}
	
	public function __toString() {
		echo "Using the toString Method <br><br>";
		return $this->getProperty();
	}
}
	
class childClass extends MyClass {
		
	public function __construct() {
		parent::__construct(); // Call the parent class's constructor	
		echo "The ".__CLASS__." instantiated"."<br>";
	}	
		
	public function showClass () {
		echo "The ".__CLASS__." method called"."<br>";
	}
}	
	
	
	// $obj =  new MyClass;
	// $obj2 =  new MyClass;
// 	
// 	
	// $obj->setProperty(" I am first Object");
	// $obj2->setProperty(" I am second Object");
// 	
	// $message1 = $obj->getProperty();
		// echo "Message from first object :".$message1;
// 
	// $message2 = $obj2->getProperty();
		// echo "Message from second object :".$message2;
// 	
	// echo $obj->__toString();
// 
	// unset($obj);	

	$obj3 = new childClass;
	
	
	$obj3->setProperty("I am child");
	
	echo $obj3->__toString();

	$obj3->showClass();
	
	echo "End of file.<br />";
?>