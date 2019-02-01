<?php

$userChoice = $_REQUEST["choice"];
//echo $userChoice;

//$userChoice = strtoupper($userChoice);

function RockPaperScissors ($userChoice)
{


if ($userChoice == 'R') {return 'You chose ROCK' . "<br/>";}
if ($userChoice == 'P') {return 'You chose PAPER' . "<br/>";}
if ($userChoice == 'S') {return 'You chose SCISSORS' . "<br/>";}

}
$uChoice = RockPaperScissors($userChoice);
//echo $uChoice;



//COMPUTER'S CHOICE

//Random integer
$crps = rand (0,2);
function ComputerRockPaperScissors ($crps)
{
if ($crps == 0) {return 'ROCK' . "<br/>";}
if ($crps == 1) {return 'PAPER' . "<br/>";}
if ($crps == 2) {return 'SCISSORS' . "<br/>";}
}
$cChoice = ComputerRockPaperScissors($crps);
//echo $cChoice;


//Compare results
function CompareResults ($userChoice, $crps)
{
    //For when the game is drawn: Finish convertnumber first
//    if ($RPS == $crps) {return 'Game drawn! Please Try again';}
        
    //USER CHOOSES ROCK RESULTS (0='r', 1='p', 2='s')
    if ($userChoice == 'R' && $crps == 0) {return "You chose Rock & Computer chose Rock! Game drawn.";}
    if ($userChoice == 'R' && $crps == 1) {return "Computer chose Paper and wins! Paper covers Rock!";}
    if ($userChoice == 'R' && $crps == 2) {return "You win! Rock takes down Scissors!";}
    
    //USER CHOOSES PAPER RESULTS (0='r', 1='p', 2='s')
    if ($userChoice == 'P' && $crps == 0) {return "You win! Paper covers Rock!";}
    if ($userChoice == 'P' && $crps == 1) {return "You chose Paper & Computer chose Paper! Game drawn.";}
    if ($userChoice == 'P' && $crps == 2) {return "Computer chose Scissors and wins! Scissors cut Paper!";}
    
    //USER CHOOSES SCISSORS RESULTS (0='r', 1='p', 2='s')
    if ($userChoice == 'S' && $crps == 0) {return "Computer chose Rock and wins! Rock takes down Scissors!";}
    if ($userChoice == 'S' && $crps == 1) {return "You win! Scissors cut Paper!";}
    if ($userChoice == 'S' && $crps == 2) {return "You chose Scissors & Computer chose Scissors! Game drawn.";}
    
}
$message = CompareResults($userChoice, $crps);
echo $message;
echo "<br/> test";
