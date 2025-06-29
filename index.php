<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<!-- NOTES:

$ - In PHP You are declaring a variable using a dollar sign. 
$string - A pieace of Text.
$int - A integer or number if you put "" it will become text.
$float - A number that has decimal points.
$boolean - true or false statement.




-->


<body>

<h3>Calling a Variable</h3>

    <?php
    $name = "Jianxin";
    $test = $name;
    
     ?>

    <p>Hi! My name is <?php echo $test;?>.</p>



<h3>Datatypes</h3>

    <?php
    //Scalar Types (Contains One Value)
    $string = "";
    $int = 0;
    $float = 0;
    $bool = false;

    $array = [];
    $object = null;
     ?>



</body>

</html>