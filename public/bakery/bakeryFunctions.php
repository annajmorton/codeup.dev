<?php  

function pickAnAction() {

	$action = 'home';

	if (isset($_GET['action'])) {
		
		$action = $_GET['action'];
	}

	$pass = [

		'action' => $action
		'current_employee' => $current_employee,
		'employee_info' => $employee_info,
		'emp_obj' => $emp_obj
	];

	return $pass;

}


function employeeMake()
{

	
	$filename = "Employees.csv";
	$handle = fopen($filename, "r");
	$data = fread($handle,filesize($filename));
	fclose($handle);

	$data = explode("\n", $data);
	$emp_obj = [];

	foreach ($data as $emp_entry) {

		$emp_entry = explode('|', $emp_entry);
		$key = $emp_entry[0];
		$emp_obj[$key] = new Employees($emp_entry[0], $emp_entry[1], $emp_entry[2], $emp_entry[3]);

	}

	if (isset($_GET['current_employee'])) {
		
		$action = 'emp_lookup';
		$pass = ['action' => $action];
		$current_employee = $_GET['current_employee'];
		$employee_info = '';
		
		if ($current_employee !='' && $current_employee != 'none') {

			$employee_info = $emp_obj[$current_employee]->employeeInfo();
		} 

	} else {

		$current_employee = "none";
		$employee_info = '';
	}

	$pass[] = [

		'current_employee' => $current_employee,
		'employee_info' => $employee_info,
		'emp_obj' => $emp_obj
	];

	return $pass;
	
}

function cakemake() 
{
	
	$cake = new Cakes();
	$wedding = new Orders('hogs','chocolate', $cake);
	
	isset($_GET['frosting_color']) ? $cake->frosting_color = $_GET['frosting_color'] : $cake->frosting_color = 'none';
	isset($_GET['cake_flavor']) ? $cake->cake_flavor = $_GET['cake_flavor'] : $cake->cake_flavor = 'none';

	if (isset($_GET['decor_message'])) {
		
		$action = 'cake_order';
		$pass = ['action' => $action];
		$cake->decor_message = $_GET['decor_message'];
		$wedding->cost();

	} else {

		$cake->decor_message = '';
		
	}


	$pass[] = [

		'cake' => $cake,
		'wedding' => $wedding
	];

	return $pass;
}

