<?php

 $students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
];

foreach ($students as $name=>$age){
     echo $name." ".$age;
}
echo array_sum($students)/count($students);
?>