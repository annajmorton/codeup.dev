<!-- make this into an object -->
<?php 
include_once '../../Input.php';

function pageVariables($connection) {

	$isSet = true;

	$in_name = Input::has('in_name') ? Input::escape(Input::get('in_name')) : emptyFalse($isSet);
	$in_location = Input::has('in_location') ? Input::escape(Input::get('in_location')) : emptyFalse($isSet);
	$in_date_est = Input::has('in_date_est') ? Input::escape(Input::get('in_date_est')) : emptyFalse($isSet);
	$in_area = Input::has('in_area') ? Input::escape(Input::get('in_area')) : emptyFalse($isSet);
	$in_description = Input::has('in_description') ? Input::escape(Input::get('in_description')) : emptyFalse($isSet);




	$pass = [

		'in_name' => $in_name,
		'in_location' => $in_location,
		'in_date_est' => $in_date_est,
		'in_area' => $in_area,
		'in_description' => $in_description

	];

	if ($isSet) {
		
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
function emptyFalse($bool) {

	$bool = false;
	return "";
}