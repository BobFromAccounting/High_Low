<?php
	
	// for($i = 0; $i <= 100; $i += 1) {
		
	// 	if ($i % 3 == 0 && $i % 5 ==0) {
	// 		echo("FizzBuzz" . PHP_EOL);
	// 	} elseif ($i % 5 == 0) {
	// 		echo("Buzz" . PHP_EOL);
	// 	} elseif ($i % 3 == 0) {
	// 		echo("Fizz" . PHP_EOL);
	// 	} else {
	// 		echo("$i" . PHP_EOL);
	// 	}
	// }

	$i = 0;

	iterator($i);

	function iterator ($i) {
		if ($i <= 100) {
			$i += 1;
			logic($i);
		}
	}

	function logic ($i) {
		if ($i % 3 == 0 && $i % 5 == 0) {
			echo("FizzBuzz" . PHP_EOL);
		} elseif ($i % 5 == 0) {
			echo("Buzz" . PHP_EOL);
		} elseif ($i % 3 == 0) {
			echo("Fizz" . PHP_EOL);
		} else {
			echo("$i" . PHP_EOL);
		}
		iterator($i);
	}
?>