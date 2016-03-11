<?php 
class Employees 
{
	private $firstname;
	private $lastname;
	private $start_date;
	private $salary;

	public function __construct($firstname,$lastname, $start_date, $salary)
	{
		$this->firstname = $firstname;
		$this->lastname = $lastname;
		$this->start_date = $start_date;
		$this->salary = $salary;
	}

	public function employeeInfo() 
	{
		$start = strtotime($this->start_date);
		if ($start) {

			// get years worked from start date
			$start = new DateTime(date('Y-m-d',$start));
			$today = new DateTime(date('Y-m-d'));

			$interval = $start->diff($today);
			$years = $interval->y;

			$empString = $this->firstname .' has been with the company '. $years . ' years and earns ' . $this->salary;
			
			return $empString;
			
		} else {

			return "the employee does not have a valid start date";
		}
	} 
}






