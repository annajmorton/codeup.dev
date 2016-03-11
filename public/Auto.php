<?php 

class Auto 
{
	public $make;
	public $model;
	public $color;

	public function __construct($make, $model, $color) 
	{
		$this->make = $make;
		$this->model = $model;
		$this->color = $color;
	}

	public function honk() 
	{

	}

	public function getDescription() 
	{
		return $this->color . " " . $this->make . " " . $this->model . PHP_EOL;
	}

	public function save() 
	{

	}


	public function __destruct() {

		echo "the automobile objec was destoryed" . PHP_EOL;
	}
}


$make = 'vw';
$model = 'bug';
$color = 'papayawhip';


$car1 = new Auto($make, $model, $color);
$yourcar = new Auto('audi','A4','pink');

echo $car1->getDescription();
$car1->save();

echo $yourcar->getDescription();
$yourcar->save();

die();