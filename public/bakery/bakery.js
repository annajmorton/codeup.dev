"use strict";

function show($div) {

	$($div).hasClass('hidden') ? $($div).removeClass('hidden') : "";
}

function hide($div) {

	$($div).hasClass('hidden') ? "" : $($div).addClass('hidden');

}

if ($('#action').val() == 'home') {
	
	
	show('#home_page');
	hide('#employee_select');
	hide('#employee_info');
	hide('#cake_select');
	hide('#order_summary');

};

if ($('#action').val() == 'cake_order') {

	hide('#home_page');
	hide('#employee_select');
	hide('#employee_info');
	show('#cake_select');
	show('#order_summary');
};

if ($('#action').val() == 'emp_lookup') {

	hide('#home_page');
	show('#employee_select');
	show('#employee_info');
	hide('#cake_select');
	hide('#order_summary');
};



// home_page
// employee_select
// employee_info
// cake_select
// order_summary
