<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  <     Less than
  >     Greater than
  <=    Less than or equal to
  >=    Greater than or equal to
  ==    Equal to
  ===   Identical to
  !=    Not equal to
  !==   Not identical to
*/

/* ---------- If Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

$age = 17;

// SIMPLE if Else
if($age >= 18) {
    echo 'You are old enough to vote';
} else {
    echo 'Sorry, you are not old enough to vote';
}

// Else if\
$t = date("H"); // H - Hours of the day

if ($t < 12) {
    echo 'Good Morning';
}elseif($t <17){
    echo 'Good Afternoon';
}else{
    echo 'Good Evening';
}

// if else is empty
$posts = ['First Post'];

$firstPost = !empty($posts) ? $posts[0] : null;

echo $firstPost;


// SWITCH

$favcolor = 'red';

switch($favcolor){
    case 'red':
        echo 'Your favorite color is red';
        break;
    case 'blue':
        echo 'Your favorite color is blue';
        break;
    case 'green':
        echo 'Your favorite color is green';
        break;
    default:
        echo 'Your Favorite Coolir is not red, green or blue';
        
}