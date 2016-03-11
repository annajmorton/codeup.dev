<?php 

require_once  'Order.php';
require_once  'Customer.php';
require_once  'functions.php';

if (inputHas('oderNumber')) {

	$customer = new Customer();
	$customer->name = inputGet('customer_name');
	$customer->orderNumber = inputGet('orderNumber');

	$order = new Order();
	$oder->orderNumber = inputGet('oderNumber');
	

}