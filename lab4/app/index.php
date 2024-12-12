<?php

echo "Hello World!";

$name = "Yada Kleebmuang";
$age = 20;

$arr = ["Yada", "Kleebmuang", 1, 2];
$assoc_arr = ["name" => "Yada Kleebmuang", "age" => 20];

echo $arr;
echo "<br>";
var_dump($arr);
echo "<br>";
echo "Hello $name";
echo 'Hello $name';

$object = (object)$assoc_arr;
echo $object->name; // เรียกแบบ object
echo $assoc_arr["name"]; // เรียกแบบ arr

echo json_encode($object);

$car = [
    "brand" => "Toyota",
    "model" => "Vios",
    "year" => $plus_fn
];

//echo $car["year"](2020, 5);

//ประกาศฟังก์ชัน
function sayHello($name0){
    echo "Hello $name";
}

$plus_fn = function ($a, $b){
    return $a + $b;
}
?>

<?php
//database
phpinfo()
?>