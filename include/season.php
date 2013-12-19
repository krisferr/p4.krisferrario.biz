<?php

echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));

$season = null;

$easter = date("z", easter_date(date("Y")));

$firstAdvent = null;


for ($i = 331; $i <= 337; $i++){
    
    //date("z", mktime(330)+$i);

    if (date("w", mktime(date("z", $i)))==0){
        
        $firstAdvent==date("z");
        echo date("z");
    }
    
    else{
        
        //do nothing
        echo date("w", mktime($i));
        echo date("z", mktime($i));
    }
}

if (date("L") == 1){
    //It's a leap year move back Christmas one day!
    $christmas = date("z", 360);
}

else{
    
    $christmas = date("z", 360);
}


//January 6 is always the day of Epiphany
if (date("z")== 5){
    
    $season = "epiphany";
    
}

//Pentacost is always 49 days after Easter
elseif (date("z")==date("z", $easter)+49){
    
    $season = "pentacost";
    
}

//Christmas always lasts from December 25 to January 5
elseif (date("z")>=359 or date("z") <= 4){
    
    $season = "christmas";
    
}

//Lent always begins on Ash Wednesday, which is 46 days before Easter
elseif (date("z")>=date("z", $easter)-46 and date("z")<=date("z", $easter)-1){
    
    $season = "lent";
    
}

//Easter lasts 49 days from Easter Sunday until the day before Pentacost
elseif (date("z")>=date("z", $easter) and date("z")<=date("z", $easter)+48){

    $season = "easter";
    
}
//Advent lasts from the Sunday between Nov. 27 and Dec. 3 and Christmas Eve
elseif (date("z")>=$firstAdvent and date("z") <= 358){

    $season = "advent";

}

//The rest of the year!
else{
    
    $season = "ordinary";

}


echo $season;

echo $firstAdvent;

echo $easter;

?>