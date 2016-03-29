
<!DOCTYPE html>

<html>

	<head>
	
		<title>contact list</title>
		
		<meta charset="utf8">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<style type="text/css">

			#contact_head {

				display: flex;
				justify-content:space-between;
				width:auto;

			}
			.form {

				align-self: center;
			}
			.actionB {

				display: flex;
				justify-content:space-between;
				width:8em;
			}
/*
			input:invalid {
			  border: 1px solid red;
			}

			input:valid {
			  border: 1px solid green;
			}
*/

		</style>

	</head>


	<body>

		<div class="container-fluid">
 
			<div>

				<div id="contact_head">
					<span class="h1">Contacts Manager</span> 	
					<form class="form">
						<div class="form-group">
							<input id="search" type="search" class="form-control" placeholder="Contact Search">
						</div>
					</form>
				</div>

			</div>


			<!-- table -->
			<table id="tlist" class="table table-striped">
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Actions</th>
				</tr>

				
			</table>


			<h1>Add Contact</h1>

			<!-- form -->
			<form id="new_contact">

				<div class="form-group">

					 <div class="form-group">
						<label for="name">Name</label>
						<input class="form-control" id="name" class="formHintBubble" required>
					</div>

					 <div class="form-group">
						<label for="email">Email Address</label>
						<input type="email" class="form-control" id="email" required>
					</div>

					 <div class="form-group">
						<label for="phone">Phone Number</label>
						<input class="form-control" id="phone" required>
					</div>

					 <div class="form-group">
						<button id="clear" class="btn btn-default">clear</button>
						<button id="addy" class="btn btn-success">add contact</button>
					</div>

				</div>

			</form>

		</div>

		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script type="text/javascript">
			"use strict"
			var rcount = 0;
		// function validInput(input){

		// 	var isValid = true;
			
		// 	if (input == null) {

		// 		console.log("please enter a value");
		// 		isValid = false;
			

		// 	} else if () {

		// 		console.log("not a valid email address");
		// 		isValid = false;
		// 	}

		// 	return isValid;

		// }

		$('#addy').on('click', function(event) {

			
			event.preventDefault();
			

			var name = $('#name').val();
			var email = $('#email').val();
			var phone = $('#phone').val();

			if (!isname) {

				document.getElementById('name').valid
			};

			
			var isname = document.getElementById('name').validity.valid;
			var isemail = document.getElementById('email').validity.valid;
			var isphone = document.getElementById('phone').validity.valid;

			if (isname && isemail && isphone) {

				var action = '<div class="actionB"><button type="button" class="edit btn btn-default btn-sm">Edit</button><button type="button" class="remove btn btn-danger btn-sm">Remove</button></div>';
				rcount++;

				var inhtml ='<tr class="inrow"><td>' + name + '</td><td>' + email + '</td><td>' + phone + '</td>' + '</td><td>' + action + '</td></tr>';
				$('#tlist').append(inhtml);
			}

		});

		$('#clear').on('click', function(event) {
			
			event.preventDefault();

			$('#name').val("");
			$('#email').val("");
			$('#phone').val("");



		});

		$('button').on('click', function(event) {

			event.preventDefault();
			console.log('this works');

			console.log($(this).parents('tr').html(''));

		});
		
			// class for red button class="btn btn-danger"
			// :contains(text) - to search?


		</script>

	</body>

</html>

