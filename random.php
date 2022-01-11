<?php

$min_rand_num = 1;
$max_rand_num = 1000;
$counter = 10;


// Save the value of the random number in "$min_rand_num"
if (isset($_POST['submit-greater'])) {
    $min_rand_num = htmlspecialchars($_POST['rand-num']) + 1;
    $max_rand_num = htmlspecialchars($_POST['max-num']);
}

// Save the value of the random number in "$max_rand_num"
if (isset($_POST['submit-smaller'])) {
    $max_rand_num = htmlspecialchars($_POST['rand-num']) -1;
    $min_rand_num = htmlspecialchars($_POST['min-num']);
}

// decrement the counter
if (isset($_POST['counter']) && $counter > 0) {
    $counter = htmlspecialchars($_POST['counter']);
    $counter--;
}


// Generate a random number
$rand_num = rand($min_rand_num, $max_rand_num);


/*
 * Its function is to return sentences by cases.
 *   - When the counter is greater than or equal zero
 *   - When the correct number is chosen
 *   - When the counter is smaller than zero
*/

function counter($counter, $rand_num) {
    $right_number = false;

    // do it if submitted right button
    if (isset($_POST['right-number'])) {
        $right_number = true;
    }

    if ($counter >= 0 && !$right_number) {
        echo "Ich habe noch $counter Versuche! <br>";
        echo "Sie Haben $rand_num ausgewählt... Rechtig?!";
    } else if($right_number){
        echo "hurra!! hurra!! ich hab's geschafft!";
    } else {
        echo "Oh Nein! ich konnte die Zahl nicht Raten :(";
    }
}
?>