<?php
	
	// Initial Game Prompting to start game logic.
	fwrite(STDOUT, "Do you wanna play a game? y/n" . PHP_EOL);
	$play = trim(fgets(STDIN));	
	if ($play = "y") {
		highLowLogic();
	}

	// Game logic driver
	function highLowLogic () {
		$randomNumber = mt_rand(1, 100);
		fwrite(STDOUT, "Guess a number between 1 and 100!" . PHP_EOL);
		$guess = fgets(STDIN);
		$guessCount = 0;
		
		// comparison of user input to randomly guessed number
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
		
		//  victory condition and introduction of playAgain function
		if ($guess == $randomNumber) {
				$guessCount += 1;
				echo("You made {$guessCount} guesses!" . PHP_EOL);
				$guessCount = 0;
				fwrite(STDOUT, "GOOD GUESS! You won!" . PHP_EOL);
				playAgain();
		}	
	}
	
	// Definition of playAgain function
	function playAgain () {
			fwrite(STDOUT, "Would you like to play again? y/n" . PHP_EOL);
			$replay = trim(fgets(STDIN));
			if ($replay == "y") {
				$askReplay = false;
				highLowLogic();
			}
	}

?>