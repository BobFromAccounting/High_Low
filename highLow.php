<?php

	function highLowLogic () {
		$randomNumber = rand(1, 100);
		fwrite(STDOUT, "Guess a Number!" . PHP_EOL);
		$guess = fgets(STDIN);
		$guessCount = 0;
		
		do {
			if ($guess < $randomNumber) {
				fwrite(STDOUT, "HIGHER!" . PHP_EOL);
				$guess = fgets(STDIN);
				$guessCount += 1;
			} else if ($guess > $randomNumber) {
				fwrite(STDOUT, "LOWER!" . PHP_EOL);
				$guess = fgets(STDIN);
				$guessCount += 1;
			}
		} while ($guess != $randomNumber);


		if ($guess == $randomNumber) {
				$guessCount += 1;
				echo("You made {$guessCount} guesses!" . PHP_EOL);
				$guessCount = 0;
				fwrite(STDOUT, "GOOD GUESS! You won!" . PHP_EOL);
				playAgain();
		}
		
	}
	
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

	highLowLogic();




?>