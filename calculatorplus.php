<form method="post">
		<input type="text" name="qal">
		<input type="submit" value="submit">
	</form>
	<?php

		$qal = $_POST['qal'];

		function sepFirst($fqal) {
			return strtok($fqal,'+');
		}
		function sepSecond($fqal) {
			return str_replace('+', '', strstr($fqal, '+'));
		}
		$firstnum = sepFirst($qal);
		$lastnum = sepSecond($qal);
		$firstnum = (int) $firstnum;
		$lastnum = (int) $lastnum;
		echo $firstnum + $lastnum;

	?>
