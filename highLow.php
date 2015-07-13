<?php


	function highLowLogic () {
		$randomNumber = rand(1, 100);
		fwrite(STDOUT, "Guess a Number!" . PHP_EOL);
		$guess = fgets(STDIN);
		
		do {
			if ($guess < $randomNumber) {
				fwrite(STDOUT, "HIGHER!" . PHP_EOL);
				$guess = fgets(STDIN);
			} else if ($guess > $randomNumber) {
				fwrite(STDOUT, "LOWER!" . PHP_EOL);
				$guess = fgets(STDIN);
			}
		} while ($guess != $randomNumber);

		function playAgain () {
			$askReplay = true;
			if ($askReplay == true) {
				fwrite(STDOUT, "Would you like to play again? y/n" . PHP_EOL);
				$replay = trim(fgets(STDIN));
				if ($replay == "y") {
					$askReplay = false;
					highLowLogic();
				}
			}
			$replay = false;
		}

		if ($guess == $randomNumber) {
				fwrite(STDOUT, "GOOD GUESS! You won!" . PHP_EOL);
				playAgain();
		}
		
	}

	highLowLogic();




?>