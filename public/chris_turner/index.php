
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
			<table class="table table-striped">
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Actions</th>
				</tr>

			</table>


			<h1>Add Contact</h1>

			<!-- form -->
			<form>

				<div class="form-group">

					 <div class="form-group">
						<label for="name">Name</label>
						<input class="form-control" id="name">
					</div>

					 <div class="form-group">
						<label for="email">Email Address</label>
						<input class="form-control" id="email">
					</div>

					 <div class="form-group">
						<label for="phone">Phone Number</label>
						<input class="form-control" id="phone">
					</div>

					 <div class="form-group">
						<button class="btn btn-default">clear</button>
						<button class="btn btn-success">add contact</button>
					</div>

				</div>

			</form>

		</div>

		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script type="text/javascript">
			"use strict"

			// class for red button class="btn btn-danger"


		</script>

	</body>

</html>

