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
        foreach ($color as $key => $val) {
            $color[$key] = strtolower($val);
        }
    }; break;
    case 'UPPER': {
        foreach ($color as $key => $val) {
            $color[$key] = strtoupper($val);
        }
    } break;
}
print_r($color);


echo "</br></br>13</br>";

function divisibleByFour($elem) {
    return !($elem % 4);
}

$divisible = array_filter(range(200, 250), "divisibleByFour");

foreach ($divisible as $item) {
    echo "$item </br>";
}


echo "</br></br>14</br>";

$arr = array("abcd","abc","de","hjjj","g","wer");
$lengths = array_map("strlen", $arr);
echo "The shortest array length is " . min($lengths) . "</br>";
echo "The longest array length is " . max($lengths);


echo "</br></br>15</br>";

$generated = [];
foreach (range(11, 20) as $counter) {
    $temp = rand(11, 20);
    while(in_array($temp, $generated)) {
        $temp = rand(11, 20);
    }
    $generated[] = $temp;
    echo $temp . " ";
}


echo "</br></br>16</br>";

$arr = array(2 => 5, 6 => 1, 10 => 12, 0 => 2);

echo max(array_keys($arr));


echo "</br></br>17</br>";

$arr = array(-1,0,1,12,-100,1);
echo min($arr);


echo "</br></br>18</br>";

function floorWithPrecision($num, $precision, $separator) {
    return number_format($num, $precision, $separator);
}

echo floorWithPrecision(-2.9636, 3, ".");


echo "</br></br>19</br>";

$color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
    "numbers" => array ( 1, 2, 3, 4, 5, 6 ),
    "holes" => array ( "First", 5 => "Second", "Third"));

echo $color['color']['a'] . " " . $color['holes'][5];


echo "</br></br>20</br>";

function sortByPriority($priorities, $arr)
{
    $toSortArr = $arr;
    array_multisort($priorities, $toSortArr);

    return $toSortArr;
}

$priorities = array(5, 2, 1, 3, 4, 8, 0);
$arr = array(1, 2, 3, 4, 5, 6, 7);

print_r(sortByPriority($priorities, $arr));


echo "</br></br>21</br>";

function compareSubnets($s1, $s2) {
    $s1_arr = explode('.', $s1);
    $s2_arr = explode('.', $s2);

    for($i = 0; $i < 3; $i++) {
        if($s1_arr[$i] < $s2_arr[$i]) return -1;
            elseif($s1_arr[$i] > $s2_arr[$i]) return 1;
    }

    return -1;
}

$subnet_list = array('192.169.12', '192.167.11', '192.169.14', '192.168.13', '192.167.12', '122.169.15',  '192.167.16');

usort($subnet_list, 'compareSubnets');
print_r($subnet_list);


echo "</br></br>26</br>";

function shufflePreserving($arr) {
    $keys = array_keys($arr);
    shuffle($keys);
    $shuffledArr = [];

    foreach ($keys as $key) {
        $shuffledArr[$key] = $arr[$key];
    }

    return $shuffledArr;
}

$arr = array('A' => 1, 'B' => 2, 'C' => 3, 'D' => 4, 'E' => 5);
print_r(shufflePreserving($arr));


echo "</br></br>27</br>";

function generateRandomPassword($length) {
    $characters = range('!', 'z');
    shuffle($characters);
    return array_slice($characters, rand(0, count($characters) - $length - 1), $length);
}

print_r(generateRandomPassword(10));


echo "</br></br>29</br>";

function generateArrayByRange($rangeStr) {
    return range(0, $rangeStr);
}

print_r(generateArrayByRange('10'));


echo "</br></br>31</br>";

$arr = array('A' => 1, 'B' => 2, 'C' => 3, 'D' => 4, 'F' => 6 ,'E' => 5);
$indexOfMax = array_search(max($arr), $arr);

echo $indexOfMax;


echo "</br></br>35</br>";

function customTrim(&$item, $index, $charToTrim) {
    echo $charToTrim;
    $item = trim($item, $charToTrim);
}

$arr = array('00hfghgfh000', '0hfghfgh0000', 'fdsg0', '0gdfgdfg', '000v');
array_walk($arr,'customTrim', '0');

print_r($arr);


echo "</br></br>36</br>";

$color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
$lowerColor = array_map('strtolower', $color);
$upperColor = array_map('strtoupper', $color);

print_r($lowerColor);
print_r($upperColor);


echo "</br></br>37</br>";

function countValue($arr, $val) {
    $counter = 0;
    foreach ($arr as $item) {
        if($item === $val) $counter++;
    }

    return $counter;
}

$arr = array(1, 2, 3, 4, 5, 1, 2, 3, 1, 1, 1, 2, 6, 1, 7, 8, 1, 10);
echo countValue($arr, 1);


echo "</br></br>39</br>";

$arr = array(1, 2, 3, 4, 5, 1, 2, 3, 1, 1, 1, 2, 6, 1, 7, 8, 1, 10);
$filteredArray = array_unique($arr);
print_r($filteredArray);


echo "</br></br>40</br>";

$color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

sort($color);
print_r($color);


echo "</br></br>59</br>";

echo array_product(range(1, 20));


echo "</br></br>58</br>";

$keys = array('x', 'y', 'y');
$vals = array(10, 20, 30);

$pairedArr = array_combine($keys, $vals);
print_r($pairedArr);


echo "</br></br>57</br>";

function keyCompare($k1, $k2) {
    if ($k1 === $k2) {
        return 0;
    }
    return ($k1 > $k2) ? 1 : -1;
}
function multidimArrayDif($arr1, $arr2) {
    $result = [];
    foreach ($arr1 as $key => $item) {
        if(is_array($item)) $result[] = array_diff_uassoc($item, $arr2[$key], 'keyCompare');
    }
    return $result;
}

$color1=array('a'=>'White','b'=>'Red','c'=>array('a'=>'Green','b'=>'Blue','c'=>'Yellow'));
$color2=array('a'=>'White','b'=>'Red','c'=>array('a'=>'White','b'=>'Red','c'=>'Yellow'));

print_r(multidimArrayDif($color1, $color2));