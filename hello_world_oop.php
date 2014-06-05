<?php


	class MyClass {
		public $property = "Hello. I am here";
	
	public function getProperty() {
		return $this->property."<br>";	
	}
	
	public function setProperty($newProperty) {
		$this->property = $newProperty;
	}
	
}
	
		$var =  new MyClass;
		
		$var->setProperty(34);
		
		$message = $var->getProperty();
		
		echo "New Message ".$message;
?>