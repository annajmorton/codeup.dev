<?php

class Person {

	public $firstname;
	public $lastname;
	public $testProp;
	public $dumb = ['test','this','allday','like','a','boss'];
	public function randomFruit() {

		$randomIndex = mt_rand(0, count($this->fruits)-1);
		return $this->fruits[$randomIndex];
	}
	public function addFavFruit($fruit) {

		array_unshift($this->fruits, $fruit);
	}


	public function __construct($firstname, $lastname)
	{
		$this->firstname = $firstname;
		$this->lastname = $lastname;
	} 

	public function getFullName() 
	{
		echo $this->firstname . " " . $this->lastname . PHP_EOL;
	}

}


$cameron = new Person('anna','morton');
$cameron->getFullName();