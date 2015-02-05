<!--needs 4 parameters from GET request: min-multiplicand--!>
<!--max-multiplicand, min-multiplier, max-multiplier--!>

<html>
	<form action="http://web.engr.oregonstate.edu/~retterj/multtable.php" method="get">
		<p>GET data</p>    <!--Get version; same code for both-->
		<p>min-multiplicand: <input type="number" name="min-multiplicand"></p>
		<p>max-multiplicand: <input type="number" name="max-multiplicand"></p>
		<p>min-multiplier: <input type="number" name="min-multiplier"></p>
		<p>max-multiplier: <input type="number" name="max-multipler"></p>
		
		
		<input type="submit" value="Submit">	
	</form>
	
<!-- Check min/max here--!>
<!--if wrong, print "Minimum larger than maximum"--!>
<--!if correct, then fill in in table below--!>
	
	<table>
		<tbody>
			<tr>
				<td><!--Here is where the data does--!> </td>
			</tr>
</html>