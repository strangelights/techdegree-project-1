<?php

// PHP - Random Quote Generator 

// This multidimensional array holds multiple quotes, with each broken out into an inner array containing a quote, source, citation, year, and tag
$quotes[] = array(
    "quote" => "Do the best you can until you know better. Then when you know better, do better.",
    "source" => "Maya Angelou",
    "tag" => "Poet",
);

$quotes[] = array(
    "quote" => "Sharing knowledge is the most fundamental act of friendship. Because it is a way you can give something without losing something.",
    "source" => "Richard Stallman",
    "tag" => "Programmer",
);

$quotes[] = array(
    "quote" => "I actually hate programming, but I love solving problems.",
    "source" => "Rasmus Lerdorf",
    "citation" => "'Interview – PHP’s Creator, Rasmus Lerdorf', sitepoint.com",
    "year" => "2002",
    "tag" => "Programmer",
);

$quotes[] = array(
    "quote" => "Don’t let fear get in the way and don’t be afraid to say ‘I don’t know’ or ‘I don’t understand’ – no question is a dumb question.",
    "source" => "Margaret Hamilton",
    "citation" => "'Margaret Hamilton: They worried that the men might rebel. They didn’t.',The Guardian",
    "year" => "2019",
    "tag" => "Programmer",
);

$quotes[] = array(
    "quote" => "Do it!",
    "source" => "Emperor Palpatine",
    "tag" => "Sith Lord",
);

$quotes[] = array(
    "quote" => "Do not wait; the time will never be ‘just right.’ Start where you stand, and work with whatever tools you may have at your command, and better tools will be found as you go along.",
    "source" => "George Herbert",
    "tag" => "Poet",
);

$quotes[] = array(
    "quote" => "Those who think they can and those who think they can’t are both usually right.",
    "source" => "Confucius",
    "tag" => "Philosopher",
);

$quotes[] = array(
    "quote" => "The most difficult thing is the decision to act, the rest is merely tenacity. The fears are paper tigers. You can do anything you decide to do. You can act to change and control your life; and the procedure, the process is its own reward.",
    "source" => "Amelia Earhart",
    "tag" => "Aviatior",
);

// This function generates a random number representing a key from the outer $quotes array and returns the corresponding value for the given key
function getRandomQuote($array){  
    $randomKey = array_rand($array);
    return $array[$randomKey]; 
}

// This function calls getRandomQuote() and converts the returned array into an HTML string to be printed to the index page
function printQuote($array){
    $randomQuote = getRandomQuote($array);
    $quoteString = "";
    $quoteString .= '<p class="quote">'. $randomQuote['quote'] . '</p>';
    $quoteString .= '<p class="source">' . $randomQuote['source'];
    if (isset($randomQuote['tag'])){
        $quoteString .= '<span class="tag">' . $randomQuote['tag'] . '</span>';
    }
    if (isset($randomQuote['citation'])){
        $quoteString .= '<span class="citation">' . $randomQuote['citation'] . '</span>';
    }
    if (isset($randomQuote['year'])){
        $quoteString .= '<span class="year">' . $randomQuote['year'] . '</span>';
    }
    $quoteString .= '</p>';
    echo $quoteString;
}  

function randomBackgroundColor(){
    $r = rand(0,255);
    $g = rand(0,255);
    $b = rand(0,255);
    return "rgb($r, $g, $b)";
}

?>
