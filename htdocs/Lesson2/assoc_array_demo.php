<?php



// create with index - ASSOCIATIVE

//NOTE : Plural nameS!

$colors = array ( "a" => "Red", "b" => "Green", "c" => "White");

// iterate to see indexes AND values

foreach ($colors as $index => $color){

	echo "$index = $color<br/>";

}



// sequential initialization

$digits = array(1,2,3,87,5,6,7,8,9);



// 2 ways to display

print_r($digits);

echo '<br/>';

var_dump($digits);

echo '<br/>_____________<br/>';



// no explicit array - use the square braces 

$letters = ["a", "b", "c"];

print_r($letters);

echo '<br/>';

var_dump($letters);

echo '<br/>_____________<br/>';





// iterate just the values

foreach ($letters as $letter){

	echo $letter;

}



echo '<br/>';





// counted loop

$count = count($letters);// NOT INSIDE THE LOOP!

for ( $i = 0; $i < $count; $i ++ ){

	echo $letters[ $i ];

	echo "<br/>";

}

echo '<br/>';





// build and THEN extend

$numbers = array(); // empty

// sequential extend

$numbers[] = 11;

$numbers[] = 22;

$numbers[] = 33;

$numbers[] = 44;

$numbers[] = 55;

print_r($numbers);

echo '<br/>';

var_dump($numbers);

echo '<br/>';





// build and THEN extend

$primes = array(); // empty

// KEYED extend

$primes['first'] = 2;

$primes['second'] = 3;

$primes['third'] = 5;

$primes['fourth'] = 7;

$primes['fifth'] = 11;

print_r($primes);

echo '<br/>';

var_dump($primes);

echo '<br/>';