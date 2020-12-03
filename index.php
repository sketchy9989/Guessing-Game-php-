<?php

$play_count = 0;
$correct_guesses = 0;
$guess_high = 0;
$guess_low = 0;

echo "I'm thinking of a number between 1 and 10. Can you guess what it is?\n";

function guessNumber() {
  global $guess_high, $guess_low, $correct_guesses, $play_count;
  
  $play_count++;
  
  $num = rand(1, 10);

echo "\nTake your guess - attempt ".$play_count." of 10\n";

$guess = intval(readline(">> "));

echo "round #".$play_count."\nI chose: ".$num."\nYou guessed: ".$guess."\n";

if ($guess === $num) {
  $correct_guesses++;
} else if ($guess < $num) {
  $guess_low++;
} else if ($guess > $num) {
  $guess_high++;
};

}

guessNumber(); 
guessNumber(); 
guessNumber(); 
guessNumber(); 
guessNumber(); 
guessNumber(); 
guessNumber(); 
guessNumber(); 
guessNumber(); 
guessNumber(); 

$correctpercent = $correct_guesses/$play_count * 100;

echo "\nYou guessed the right number $correctpercent% of the time.\n";

if ($guess_high > $guess_low) {
  echo "When you guessed wrong, you tended to guess high";
} elseif ($guess_high < $guess_low) {
  echo "When you guessed wrong, you tended to guess low.";
} else { 
  /* will execute if $guess_high equals $guess_low, 
  or if $correctpercent equals 100, and probably some other weird and unlikely cases: */
  echo "System meltdown, universe collapsing in 3...\n2...\n1... Goodbye, cruel world.";
}

echo "\n\n----the end. anything else?---      ";

