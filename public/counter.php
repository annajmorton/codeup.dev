
<?php 


	function noidea() {

		
		if (isset($_GET['counter'])) {
			
			$counter = $_GET['counter'];

		} else {

			$counter = 0;

		}
		
		$pass ['counter'] = $counter;
		return $pass;

	}

	extract(noidea());

 ?>


<!DOCTYPE html>

<html>

	<head>
	
		<title>counter counter counter</title>
		
		<meta charset="utf8">

		<style type="text/css">

			#updown {

				display: flex;
				justify-content:center;
				flex-wrap: wrap;
			}
			.pageBox {

				align-self:center;
				width: 900px;
				height: 50px;
			}
			#counter{

				position: fixed;
			}

		</style>

	</head>



	<body>

		<!-- counter -->
		<input value = '<?=$counter?>'>

		<div id="updown">
			<!-- down link  -->
			<div class="pageBox" id="downlink">
				<a id="up"></a>
				<a href="?counter=<?=$counter+1;?>">down</a>
			</div>


			<!-- up link -->
			<div class="pageBox" id="uplink">
				<a href="?counter=<?=$counter-1;?>">up</a>
				<a id="down"></a>
			</div>
		</div>

	


		</script>

	</body>

</html>

