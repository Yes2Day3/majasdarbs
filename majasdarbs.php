<?php
// $fruits = ["Apple","Banana","Cherry","Dates",];
// echo $fruits[1];

// $ages = [
//     "Alice"=>30,
//     "Bob"=>25,
//     "Charlie"=>35
// ];

// echo $ages["Bob"];

$students = [
    ["name"=>"John", "age"=>20, "grades" => [90,85,88]],
    ["name"=>"Jane", "age"=>22, "grades" => [92,80,84]],
    ["name"=>"John", "age"=>20, "grades" => [78,85,90]],
];

foreach($students as $student){
    $sum = 0;
    for($i = 0; $i < 3; $i++){
        $sum += $student["grades"][$i];
    }
    echo $student["name"] . " " . $sum / count($student["grades"]) . "\n";
}