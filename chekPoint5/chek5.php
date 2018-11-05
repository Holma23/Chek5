<?php
$misteryNumber=8;
$myNumber=8;
$cond1="Congratulations !";
$cond2="+";
$cond3="-";

$x=($misteryNumber === $myNumber)? $cond1  : (($misteryNumber>$myNumber)? $cond2: $cond3);
echo $x;


?>