<?php 

include_once '../../Input.php';

class PInput
{
	public $value;
	public $key;
	public $isSet = false;
	public $isDate;

	public function __construct($keystring, $datecheck = false) 
	{
		$this->key = $keystring;
		$this->isDate = $datecheck;	
		$this->value = Input::has($this->key) ? $this->setInput() :'';	
	}

	public function setInput() {

		$input = Input::escape(Input::get($this->key));
		
		if ($input!='') {	
			
			if ($this->isDate) {
				
				$date = strtotime($input); 

				if ($date!=false) {
					
					$input = date("Y-m-d",$date);
					$this->isSet = true;
				}
			
			} else {

				$this->isSet = true;	
			}

		}

		return $input;

	}

}


function pageVariables($connection) {

	$in_name = new PInput('in_name'); 
	$in_location = new PInput('in_location');
	$in_date_est = new PInput('in_date_est', true);
	$in_area = new PInput('in_area');
	$in_description = new PInput('in_description');
	$edit_parkdb = new PInput('edit_parkdb');


	$pass = [

		'in_name' => $in_name->value,
		'in_location' => $in_location->value,
		'in_date_est' => $in_date_est->value,
		'in_area' => $in_area->value,
		'in_description' => $in_description->value,
		'edit_parkdb' => $edit_parkdb->isSet

	];

	if ($in_name->isSet&&$in_location->isSet&&$in_date_est->isSet&&$in_area->isSet&&$in_description->isSet) {
		
		insertPark($pass, $connection);
	}

	return $pass;

}


function insertPark($pass, $connection) {

	$stmt = $connection->prepare('INSERT INTO national_parks (name, location, date_established, area_in_acres, description) VALUES (:name, :location, :date_established, :area_in_acres, :description)');

	$stmt->bindValue(':name',$pass['in_name'],PDO::PARAM_STR);
	$stmt->bindValue(':location',$pass['in_location'],PDO::PARAM_STR);
	$stmt->bindValue(':date_established',$pass['in_date_est'],PDO::PARAM_STR);
	$stmt->bindValue(':area_in_acres',$pass['in_area'],PDO::PARAM_STR);
	$stmt->bindValue(':description',$pass['in_description'],PDO::PARAM_STR);

	$stmt->execute();


}




