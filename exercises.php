<?php

echo "1</br>";

$color = array('white', 'green', 'red', 'blue', 'black');
$string = "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet,
the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M.
Nixon";

echo $string;


echo "</br></br>2</br>";

$color = array('white', 'green', 'red');
foreach($color as $clr) {
    echo $clr, ', ';
}

echo "</br></br>";
sort($color);
foreach($color as $clr) {
    echo $clr, '</br></br>';
}


echo "</br></br>3</br>";

$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
    "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
    "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
    "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
    "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech
Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga",
    "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

ksort($ceu);
foreach ($ceu as $country => $capital) {
    echo 'The capital of ', $country, ' is ', $capital, '</br>';
}


echo "</br></br>4</br>";

$x = array(1, 2, 3, 4, 5);
array_splice($x, 3, 1);
print_r($x);


echo "</br></br>5</br>";

$color = array(4 => 'white', 6 => 'green', 11=> 'red');
$values = array_values($color);
echo $values[0];


echo "</br></br>6</br>";

$json = '{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail": {
"Publisher": "Little Brown"
}}';
$decoded = json_decode($json);
foreach ($decoded as $key => $value) {
    if(is_string($value))
        echo "$key: $value</br></br>";
    else foreach ($value as $k => $v) {
        echo "$k: $v</br></br>";
    }
}


echo "</br></br>7</br>";

$arr = [1, 2, 3, 4, 5];
$pos = 2;

array_splice($arr, $pos, 0, '$');
print_r($arr);


echo "</br></br>8</br>";

$arr = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
asort($arr);
print_r($arr);
echo "</br>";

ksort($arr);
print_r($arr);
echo "</br>";

arsort($arr);
print_r($arr);
echo "</br>";

krsort($arr);
print_r($arr);


echo "</br></br>9</br>";

$arr = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
$average = 0;
sort($arr);
$lowest = array_slice($arr, 0, 5);
$highest = array_slice($arr, count($arr) - 6, 5);
$average = array_sum($arr)/count($arr);

print_r($lowest);
echo "</br>";
print_r($highest);
echo "</br>Average: $average";


echo "</br></br>10</br>";

$arr =  array(0 => 5, 1 => 3, 2 => 1, 3 => 3, 4 => 8, 5 => 7, 6 => 4, 7 => 1, 8 => 1, 9 => 3);

function columns($uarr) {
    $n=$uarr;
    array_unshift($uarr, NULL);
    $transpose = call_user_func_array('array_map', $uarr);
    return array_map('array_filter', $transpose);
}

function bead_sort($uarr) {
    foreach ($uarr as $e)
        $poles []= array_fill(0, $e, 1);
    return array_map('count', columns(columns($poles)));
}

$sorted = bead_sort($arr);
print_r($sorted);


echo "</br></br>11</br>";

$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");
$res = [];

foreach($array1 as $k => $v){
    array_push($array1[$k], $array2[$k]);
}
print_r($array1);


echo "</br></br>12</br>";

$color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
$mode = 'UPPER';
switch ($mode) {
    case 'LOWER': {
        foreach ($color as $key => $val) {  //not working
            $key = strtolower($key);
            $val = strtolower($val);
        }
    }
    case 'UPPER': {
        foreach ($color as $key => $val) {
            $key = strtoupper($key);
            $val = strtoupper($val);
        }
    }
}
print_r($color);










