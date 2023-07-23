<?php
$name = [
    'mehedi',
    'bappy',
    'himel'
];

echo "<pre";

print_r($name);

echo "<hr>"; //fst 

$student = [
   'm' =>'mehedi',
    'b' =>'bappy',
    'h' =>'himel'
];

echo "<pre";

print_r($student);

echo "<hr>"; //2nd
$student = [
    '0' =>'mehedi',
     '1' =>'bappy',
     '2' =>'himel'
 ];
 
 echo "<pre";
 
 print_r($student);

 echo $student['0']; 
 
 echo "<hr>"; //3rd

 for($i=0;$i<count($student);$i++){
    echo $student[$i]."<br>";
 }

 echo "<hr>"; //4th

 foreach($student as $value){
    echo $value."<br>";
 }



 





?>