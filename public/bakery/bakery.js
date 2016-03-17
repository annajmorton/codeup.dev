"use strict";

function turnOff(var) {


}

function turnOn() {


}

if ($('#action').val() == 'home') {
	// $('#home_page').toggleClass('hidden');
	$('#employee_select').toggleClass('hidden');
	$('#employee_info').toggleClass('hidden');
	$('#cake_select').toggleClass('hidden');
	$('#order_summary').toggleClass('hidden');
};

if ($('#action').val() == 'cake_order') {
	$('#home_page').toggleClass('hidden');
	$('#employee_select').toggleClass('hidden');
	$('#employee_info').toggleClass('hidden');
	$('#cake_select').toggleClass('hidden');
	$('#order_summary').toggleClass('hidden');
};

if ($('#action').val() == 'emp_lookup') {
	$('#home_page').toggleClass('hidden');
	$('#employee_select').toggleClass('hidden');
	$('#employee_info').toggleClass('hidden');
	$('#cake_select').toggleClass('hidden');
	$('#order_summary').toggleClass('hidden');
};



// home_page
// employee_select
// employee_info
// cake_select
// order_summary
