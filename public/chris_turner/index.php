
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
			<form id="new_contact" onsubmit="return false">

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
						<input id="clear" type="reset" value="clear" class="btn btn-default">
						<button id="addy" type="submit" class="btn btn-success">add contact</button>
					</div>

				</div>

			</form>

			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Edit Contact</h4>
			      </div>
			      <div class="modal-body">
			       <div class="form-group">
						<label for="name">Name</label>
						<input class="form-control" id="mname" class="formHintBubble" required>
					</div>
					<div class="form-group">
						<label for="email">Email Address</label>
						<input type="email" class="form-control" id="memail" required>
					</div>
					<div class="form-group">
						<label for="phone">Phone Number</label>
						<input class="form-control" id="mphone" required>
					</div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			        <button type="button" class="btn btn-primary" id="save">Save changes</button>
			      </div>
			    </div>
			  </div>
			</div>

		</div>


		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script type="text/javascript">
			"use strict"
			var rcount = '';

			// inserts contact into contact manager - used in modal and add contact
			function insert(sname, semail, sphone){

				var name = $('#'+ sname).val();
				var email = $('#' + semail).val();
				var phone = $('#' + sphone).val();

				
				var isname = document.getElementById(sname).validity.valid;
				var isemail = document.getElementById(semail).validity.valid;
				var isphone = document.getElementById(sphone).validity.valid;

				if (isname && isemail && isphone) {

					var action = '<div class="actionB"><button type="button" class="edit btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">Edit</button><button type="button" class="remove btn btn-danger btn-sm">Remove</button></div>';
					rcount++;

					var inhtml ='<tr class="inrow"><td>' + name + '</td><td>' + email + '</td><td>' + phone + '</td>' + '</td><td>' + action + '</td></tr>';
					$('#tlist').append(inhtml);
				}
			}

			// add contact button
			$('#addy').on('click', function(event) {

				insert('name','email','phone');
			
			});  

			// add contact to contacts manager from modal
			$(document).on('click', '#save' ,function(event){

				insert('mname','memail','mphone');
				$('#myModal').modal('hide');

			});

			// contacts manager delete buttons
			$(document).on('click', '.remove' ,function(event){

				var rname = $(this).closest('tr');
				rname = rname[0]['childNodes'][0]['innerText'];
				confirm('are you sure you want to remove ' + rname);
				$(this).closest('tr').remove();


			});

			// contacts manager edit buttons
			$(document).on('click', '.edit' ,function(event){

				var trtd = $(this).closest('tr').detach();
				var name = trtd[0]['childNodes'][0]['innerText'];
				var email = trtd[0]['childNodes'][1]['innerText'];
				var phone = trtd[0]['childNodes'][2]['innerText'];
			
				$('#mname').val(name);
				$('#memail').val(email);
				$('#mphone').val(phone);

			});

			// search functions
			$('#search').on('keydown', function(event){
				

		        if(event.which == 13){ 
				   event.preventDefault();
				}
				if (event.which == 27) {
					event.preventDefault();
					$('#search').val('');
					$('tr.inrow').show();
				}
				
		        var searchitem = $('#search').val();
		        console.log(searchitem);

			    if (searchitem == '' || searchitem == null || searchitem == undefined) {
			        $('tr.introw').show();
			    }
			    else {
			        searchitem = searchitem.toUpperCase();
			        $('tr.inrow').hide();
			        $('tr.inrow').each(function() {
			            if ($(this)['context']['innerText'].toUpperCase().search(searchitem) > -1) {
			                $(this).show();
			            }
			        });
			    }
			});

		</script>

	</body>

</html>

