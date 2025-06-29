<!-- NOTES:

$ - In PHP You are declaring a variable using a dollar sign. 
$string - A pieace of Text.
$int - A integer or number if you put "" it will become text.
$float - A number that has decimal points.
$boolean - true or false statement.
-->
<?php 

    //echo - Output strings, numbers html, etc.
    echo 123, 'Hello', 10.5;

    //print - Works like echo, but can only take in a single argument
    print 123;

    //print_r() - Print single values and arrays
    print_r(1,2,3);

    //var_dump() - Returns more info like data type and length
    var_dump('Hello');

    //var_export() - Similar to var_dump(). Outputs a string representation of a variable
    var_export('hello');
?>

<!-- ?> php closing tag is necessary when you have a content below it. -->

