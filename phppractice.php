<?php

echo("Hello world.");

?>


<?php
$n = 0;
while ($n <= 100) {
	$n = $n + 1;
	if ($n % 15 == 0) {
		echo "fizz";
	} elseif ($n % 5 == 0) {
		echo "buzz";
	} elseif ($n % 3 == 0) {
		echo "fizzbuzz";
	}else {
		echo($n);
	}
	echo("\n");
}

?>
