<!--needs 4 parameters from GET request: min-multiplicand--!>
<!--max-multiplicand, min-multiplier, max-multiplier--!>
<!DOCTYPE html>
	<?php
		$_GET["min-multiplicand"];
		$_GET["max-multiplicand"];
		$_GET["min-multiplier"];
		$_GET["max-multiplier"];
	?>
		if (<?php $_GET['min-multiplicand']>$_GET['max-multiplicand']?>){
			echo "Minimum multiplicand is larger than maximum multiplicand. <br>";
		}

		if (<?php $_GET['min-multiplier']>$_GET['max-multiplier']?>){
			echo "Minimum multiplier is larger than maximum multiplier. <br>";
		}

	
	<table>
		<tbody>
			<tr>
				<td>$_GET['min-multiplier']</td>
			</tr>
</html>