<?php 

$student = array('mehedi','bappy','himel'); 

$student2 = ['mehedi','bappy','himel']; //index array





echo "<pre>";

var_dump($student);

echo "<hr>";

print_r($student);

echo "<hr>";

echo "my name is"." ".$student[0];
echo "<hr>";

//start associative array 

$name = [
    1 =>'mehedi',
    4 =>'bappy',
    2 =>'himel'
];

//end associative array 

echo "<pre>";

print_r($name);

echo "<hr>";

$name = [
    'mehedi',
    'bappy',
    'himel'
];

for($i=0;$i<count($student);$i++){
    echo $name[$i]." ";
}

echo "<hr>";

//foreach 

foreach($name as $student){
    echo $student." ";
}

//foreach with index

echo "<hr>";
foreach($name as $index=>$student){
    echo $index." " .$student." ";
}



?>