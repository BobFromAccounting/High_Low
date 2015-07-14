<?php

	fwrite(STDOUT, "Please enter a number to use as a starting value: (i.e. 1 <-... 5)" . PHP_EOL);
	$minimum = trim(fgets(STDIN));

	while ($minimum != is_numeric($minimum)) {
		fwrite(STDOUT, "Please enter a number to use as a starting value: (i.e. 1 <-... 5)" . PHP_EOL);
		$minimum = trim(fgets(STDIN));
	}

	fwrite(STDOUT, "Now, please enter a number to use as an ending value: (i.e. 1 ...-> 5)" . PHP_EOL);
	$maximum = trim(fgets(STDIN));

	while ($maximum != is_numeric($maximum)) {
		fwrite(STDOUT, "Now, please enter a number to use as an ending value: (i.e. 1 ...-> 5)" . PHP_EOL);
		$maximum = trim(fgets(STDIN));
	}

	fwrite(STDOUT, "Finally, please enter the number you would like to increment by: (i.e. 5 - this will increment the digits displayed by 5, every time.)" . PHP_EOL);
	$increment = fgets(STDIN);
	if ($increment == "\n") {
		$increment = 1;
	}
	

	for ($i = $minimum; $i <= $maximum; $i += $increment) {
		echo("$i" . PHP_EOL);
	}


?>