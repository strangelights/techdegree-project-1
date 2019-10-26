<?php

// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array

$quotes[] = array(
    "quote" => "Do the best you can until you know better. Then when you know better, do better.",
    "source" => "attributed to Maya Angelou",
);

$quotes[] = array(
    "quote" => "Sharing knowledge is the most fundamental act of friendship. Because it is a way you can give something without loosing something.",
    "source" => "Richard Stallman",
);

$quotes[] = array(
    "quote" => "I actually hate programming, but I love solving problems.",
    "source" => "Rasmus Lerdorf",
    "citation" => "'Interview – PHP’s Creator, Rasmus Lerdorf', sitepoint.com",
    "year" => "2002",
);

$quotes[] = array(
    "quote" => "Don’t let fear get in the way and don’t be afraid to say “I don’t know” or “I don’t understand” – no question is a dumb question.",
    "source" => "Margaret Hamilton",
    "citation" => "'Margaret Hamilton: They worried that the men might rebel. They didn’t.',The Guardian",
    "year" => "2019",
);

$quotes[] = array(
    "quote" => "Do it!",
    "source" => "Emperor Palpatine",
);

$quotes[] = array(
    "quote" => "Do not wait; the time will never be ‘just right.’ Start where you stand, and work with whatever tools you may have at your command, and better tools will be found as you go along.",
    "source" => "George Herbert",
);

$quotes[] = array(
    "quote" => "Those who think they can and those who think they can’t are both usually right.",
    "source" => "Confucius",
);

$quotes[] = array(
    "quote" => "The most difficult thing is the decision to act, the rest is merely tenacity. The fears are paper tigers. You can do anything you decide to do. You can act to change and control your life; and the procedure, the process is its own reward.",
    "source" => "Amelia Earhart",
);

// print_r($quotes);

// Create the getRandomQuote function and name it getRandomQuote

function getRandomQuote($array){  
    $key = rand(0,7);
    return $array[$key]; 
}

//debug
while ($i<=7){
print_r(getRandomQuote($quotes));
$i++;
}
// Create the printQuote funtion and name it printQuote

function printQuote(){
    
}