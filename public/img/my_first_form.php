<?php
  var_dump($_GET);
  var_dump($_POST);
?>


<!DOCTYPE html>
<!--/this is a comment -->

<!--
	comment
-->

<html>

	<head>
		<meta charset="utf8">
		
		<title>My First html Form</title>

		<link rel="stylesheet" type="text/css" href="/css/form.css">

	</head>
	



	<body>



<!-- Form 1 -->	
		<header class="login">
		<br>

		<h2>Login Please</h2>
		
		<form method="POST" action="/my_first_form.php">

				<input type="hidden" id="user_id" name="user_id" value="1234">
		    

		    <p>
		        <label for="username"></label>
		        <input id="username" name="username" type="text" placeholder="username">
		    </p>


		    <p>
		        <label for="password"></label>
		        <input id="password" name="password" type="password" placeholder="password">
		    </p>
		   

		    <p>
		        <button type="submit">submit</button>
		    </p>

		</form>
		<br>

		</header>	


		<br>
		<br>
		<br>



<!-- Form 2 -->	

		<aside class="email">
		<br>	
			
		<h2>Compose an Email!!!!</h2>
		
		<form method="POST" action="/my_first_form.php">

	
		    
		    <p>
		        <label for="To"></label>
		        <input id="To" name="To" type="text" placeholder="To">
		    </p>
			

			<p>
		        <label for="From"></label>
		        <input id="From" name="From" type="text" placeholder="From">
		    </p>


 			<p>
		        <label for="Subject"></label>
		        <input id="Subject" name="Subject" type="text" placeholder="Subject">
		    </p>




		     <p>
		        <label for="Body"></label>
		        <textarea id="Body" name="Body" rows="40" cols="40" placeholder="Content Here"></textarea> 
		    </p>

<!--
	checkbox is default checked yes
-->

		    <p>
		    	<label for="savesent">save a copy of your email to your sent folder?</label>
		    	<input type="checkbox" id="savesent" name="savesent" value="yes" checked>

		    </p>


		    <p>
		        <button type="submit">submit</button>
		        
		    </p>


		</form>
		<br>

		</aside>

		<br>
		<br>
		<br>




<!-- Form 3 -->		

		<section class="test">
		<br>

		<h2>Multiple Choice Test</h2>

		<form>


			 <h4> How much wood would a woodchuck chuck if a woodchuck could chuck wood?</h4>

				<label>
					<input type="radio" name="wood" value="oh boy...">
					 oh boy...
				</label>

				<br>
				
				<label>
					<input type="radio" name="wood" value="a lot">
					 a lot 
				</label>
				
				<br>

				<label>
					<input type="radio" name="wood" value="baby can't evean deal">
					baby can't evean deal
				</label>
				
				<br>

				<label>
					<input type="radio" name="wood" value="boatload - for real">
					boatload - for real
				</label>	

			<br>
			<br>


			<h4> Don't you want me baby?</h4>
				
				<label>
					<input type="radio" name="wantme" value="nope">
				 	nope
				</label>
				
				<br>

				<label>
					<input type="radio" name="wantme" value="ooooh oh oooh oooo">
				 	ooooh oh oh ooo 
				</label>

				<br>

				<label>
					<input type="radio" name="wantme" value="like the dessert wants the rain">
					like the dessert misses the rain
				</label>

				<br>

				<label>
					<input type="radio" name="wantme" value="for always">
					for always
				</label>

			<br>
			<br>



			<label for="toteclipse"> 
			<h4>True or False: Now I'm only falling apart</h4> 
			</label>

				<select id="toteclipse" name="toteclipse"> 
			
					<option deactivate selected > pick one! </option>
			
					<option value="ya you are"> true </option>
			
					<option value="be honest"> false </option>
			
					<option value="selfawareness"> can't really say </option>
			
				</select>

			<br>
			<br>



			<button type="submit">submit</button>
			
			</form>
			<br>

			</section>

		<br>
		<br>
		<br>




<!-- Form 4 -->
<!--  -->

		<section class="moon"> 
		<br>

		<h2>Selection Test</h2>
		
		<form>
			
			<label for="moonliving"><h4>Would you like to live on the moon?</h4></label>
			
			<select id="moonliving" name="moonliving">
				
				<option value="cool!"> yes </option>
				
				<option value="looser" selected> no </option>
			
			</select>


			<button type="submit"> subimt </button>


		</form>
		<br>

		</section>

		<br>
		<br>
		<br>

	</body>

</html>