<?php


	// Initial Game Prompting to start game logic.
	fwrite(STDOUT, "Do you wanna play a game? y/n" . PHP_EOL);
	$play = trim(fgets(STDIN));	
	if ($play = "y") {
		if ($argc === 3) {
			fwrite(STDOUT, "Guess a number between {$argv[1]} and {$argv[2]}!" . PHP_EOL);			
			$random = randomNumberSet($argv[1], $argv[2]);
		} else if ($argc == 1) {
			$minimum = setMinimum();
			$maximum = setMaximum();
			fwrite(STDOUT, "Guess a number between $minimum and $maximum!" . PHP_EOL);			
			$random = randomNumberSet($minimum, $maximum);
		}

		highLowLogic($random);
	}

	// Random Number Generator responsive to user input.
	function randomNumberSet ($minimum, $maximum) {
		$randomNumber = mt_rand($minimum, $maximum);
		return $randomNumber;
	}
	// Game logic function
	function highLowLogic ($random) {
		$guessCount = 0;
		$guess = fgets(STDIN);
		
		// comparison of user input to randomly generated number
		do {
			if ($guess < $random) {
				fwrite(STDOUT, "HIGHER!" . PHP_EOL);
				$guess = fgets(STDIN);
				$guessCount += 1;
			} else if ($guess > $random) {
				fwrite(STDOUT, "LOWER!" . PHP_EOL);
				$guess = fgets(STDIN);
				$guessCount += 1;
			}
		} while ($guess != $random);
		
		//  victory condition and implementation of playAgain function
		if ($guess == $random) {
			$guessCount += 1;
			fwrite(STDOUT, "GOOD GUESS!" . PHP_EOL);
			echo("You won, with only {$guessCount} guesses!" . PHP_EOL);
			$guessCount = 0;
			playAgain();
		}	
	}
	
	// Definition of playAgain function
	function playAgain () {
		fwrite(STDOUT, "Would you like to play again? y/n" . PHP_EOL);
		$replay = trim(fgets(STDIN));
		if ($replay == "y") {
			$minimum = setMinimum();
			$maximum = setMaximum();
			fwrite(STDOUT, "Guess a number between $minimum and $maximum!" . PHP_EOL);
			$random = randomNumberSet($minimum, $maximum);
			highLowLogic($random);
		}
	}

	function setMinimum () {
		fwrite(STDOUT, "Please provide a minimum starting number:" . PHP_EOL);
		$setMin = trim(fgets(STDIN));
		return $setMin;
	}

	function setMaximum () {
		fwrite(STDOUT, "Please provide a maximum starting number:" . PHP_EOL);
		$setMax = trim(fgets(STDIN));
		return $setMax;
	}
?>