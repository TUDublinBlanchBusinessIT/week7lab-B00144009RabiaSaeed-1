<?php
   
include('Team.php');

//so i've been told to get the team name so I'll do that//

$teamName = $_GET["teamName"];

//So I've got to instantiate a Team.php class and then give it to a variable in php//
//I just remember this from python//
$homeTeam=Team($teamName);

//Like I feel like you'd have to GET the score from the thing if you're gonna as for the values, feel like the instructions are telling me to get them?//
//$teamName = $_GET["teamName"]; just putting this here to copy//
//this is what it says on the form btw//
//first one's//
$home1 = $_GET["home1"];
$away1 = $_GET["away1"];
    
//second one's//
$home2 = $_GET["home2"];
$away2 = $_GET["away2"];
    
//third one's//
$home3 = $_GET["home3"];
$away3 = $_GET["away3"];

//instructions told me this//    
$homeTeam->finalScore($home1,$away1);
$homeTeam->finalScore($home2,$away2);
$homeTeam->finalScore($home3,$away3);

//Now it's asking me to calculate goal average using the function getGoalaverage() which I've already made in the Team.php file so that's handy. In python to call a function you just go getGoalaverage(), intruction tells me to use it on the $homeTeam variable//
//nvm//

//I;ve to echo the average so that means I'd need to store it because that's how i used to do it in Python//
//also -> is used as a calling operator, just ignore this this is just notes for myself...//
$GoalAverageOfTeam = $homeTeam->getGoalaverage();

//I just searched what operator is used in PHP to connect a bunch of strings, turns out it's a full stop and not a comma like in python//
//In python you can just do "this is a sentence", apple3//
echo "This is the calculated goal average:" .  $GoalAverageOfTeam;

?>