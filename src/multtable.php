<!--needs 4 parameters from GET request: min-multiplicand-->
<!--max-multiplicand, min-multiplier, max-multiplier-->
<!DOCTYPE html>
<body>
	<?php
		$min_multiplicand = $_GET["min-multiplicand"];
		$max_multiplicand = $_GET["max-multiplicand"];
		$min_multiplier = $_GET["min-multiplier"];
		$max_multiplier = $_GET["max-multiplier"];
	
		if ($_GET['min-multiplicand']>$_GET['max-multiplicand']){
			echo "Minimum multiplicand is larger than maximum multiplicand. <br>";
		}

		if ($_GET['min-multiplier']>$_GET['max-multiplier']){
			echo "Minimum multiplier is larger than maximum multiplier. <br>";
		}
	
		if(is_null($min_multiplicand)){
			echo "Minimum multiplicand is null. <br";
		}

		if(is_null($max_multiplicand)){
			echo "Maximum multiplicand is null. <br";
		}
		
		if(is_null($min_multiplier)){
			echo "Minimum multiplier is null. <br";
		}
		
		if(is_null($max_multiplier)){
			echo "Maximum multiplier is null. <br";
		}

	?>
	<table>
		<tbody>
			<?php
		//--Need to display all multiplicands and multiplers, too
			for($i=$min_multiplicand; $i=$max_multiplicand; $i++){
   				echo("<tr>");
   					for($j=$min_multiplier; $j=$max_multiplier; $j++){
   						echo ("<td> $i*$j </td>");
   					}
  				echo("</tr>");
				} ?>
			</tbody>
	</table>
	
</body>
</html>