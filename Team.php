<?php

//okay so this file was supposed to be called Team.php...... ops. Gotta rename it//
class Team
{
    //in python you'd put string or int as the attributes thing so I'd say you do it here too, name is a string and points, games(round), and goals would be in int so that's a number. I feel like that's a correct approach because writting it as a string makes me nervous//
    private $name ="";
    private $totalPoints = 0;
    private $totalGames = 0;
    private $totalGoals = 0;
    
    //assuming that the constructor would take the team's name as a parm right so that's $name I'm assuming//
    
    //so we're given the parameter which is the team name thingie//
    public function __construct($name)
    {
        $this->name = $name;
        //$this->totalPoints = $totalPoints;//
        //$this->totalGames = $totalGames;//
        //$this->totalGoals = $totalGoals;//
    }
    
    //I noticed that in php you don't do elif like python, you do it like elseif, I had to learn this//
    //gonna use $parm1 and $parm2 for this since the instruction told me to use that//
    public function finalScore($parm1, $parm2)
    {
        //okay so the hint says that I have to increase the total, in python I've had to increment stuff so I'm gonna use this logic here and say that it increase by 1 at the beginning//
        //i think += was an accumulator//
       $this->totalGames += 1;
        //in python I used to add these () for my if statements coz they made it look neat//
       if  ($parm1>$parm2) {
           $this->totalPoints += 3;
           elseif ($parm1==$parm2) {
               $this->totalPoints += 1;
           }
        //okay now that the if statment is done I can add the final score method that adds the total goals also, so let's do something with the instance and go into goals because that's what we want to increase//
           
           $this->totalGoals+=$parm1;

    }
    
    public function getGoalAverage():float
    {
        //first of all you need to get the value for goals that are actually present so you're gonna have to say if the goals are greater then 0 then something would happen because you don't want to be dividing by a zero that's just not a good thing at all//
        //just putting this here to copy $this->totalPoints += 3; coz this is what the instructions told me//
        //adding brackets for neatness, python "skill" I guess//
        if ($this->totalGames > 1) {
            return $this->totalGoals/$this->totalGames;
            
            elseif {
                return 0;
            }
        }
    }
}
?>