<?php 
$people[] = "Steve";
$people[] = "Sam";
$people[] = "Sola";
$people[] = "Dave";
$people[] = "Mike";
$people[] = "Jon";
$people[] = "Lucky";
$people[] = "Joanna";
$people[] = "Samson";
$people[] = "Derek";
$people[] = "Ben";
$people[] = "David";
$people[] = "Jake";
$people[] = "Mary";
$people[] = "Blessing";
$people[] = "Olivia";
$people[] = "Jack";
$people[] = "Anthony";
$people[] = "Luke";
$people[] = "Shawn";

// Get Query String
$q = $_REQUEST['q'];

$suggestion = "";

// Get Suggestions
if($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);
    foreach($people as $person) {
        if(stristr($q, substr($person, 0, $len))) {
            if($suggestion === "") {
                $suggestion = $person;
            } else {
                 $suggestion.= ", $person";   
            }
        }
    }
}

echo $suggestion === "" ? "No Suggestion" : $suggestion;
?>