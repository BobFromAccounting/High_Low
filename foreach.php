<?php

	$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

	foreach ($things as $thing) {
		if (is_integer($thing)) {
			echo("$thing's type is Integer!" . PHP_EOL);
		} elseif (is_float($thing)) {
			echo("$thing's type is Float!" . PHP_EOL);
		} elseif (is_bool($thing)) {
			echo("$thing's type is Boolean!" . PHP_EOL);
		} elseif (is_array($thing)) {
			foreach ($thing as $element) {
				echo("$element is part of an Array!" . PHP_EOL);
			}
		} elseif (is_null($thing)) {
			echo("$thing type is Null!" . PHP_EOL);
		} elseif (is_string($thing)) {
			echo("$thing's type is String!" . PHP_EOL);
		} else {
			echo("undefined!" . PHP_EOL);
		}
	}

	echo(PHP_EOL);
	echo(PHP_EOL);
	echo(PHP_EOL);

	foreach ($things as $thing) {
		if (is_scalar($thing)) {
			echo("$thing is Scalar!" . PHP_EOL);
		} 
	}

	echo(PHP_EOL);
	echo(PHP_EOL);
	echo(PHP_EOL);

	foreach ($things as $thing) {
		if (is_array($thing)) {
			echo implode(', ', $thing) . PHP_EOL;
		} else {
			echo("$thing" . PHP_EOL);
		}
	}	

?>