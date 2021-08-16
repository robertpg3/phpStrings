<?php 


echo "transform a string all uppercase letters.</br>";
$testString = "little bIG";
echo strtoupper($testString);

echo "</br></br>transform a string all lowercase letters.</br>";
echo strtolower($testString);

echo "</br></br>make a string's first character uppercase.</br>";
echo ucfirst($testString);

echo "</br></br>make a string's first character of all the words uppercase.</br>";
echo ucwords($testString);

echo "</br></br>Write a PHP script to split the following string. </br>";
$string = "082307";
$offset = 0;
for($i = 1; $i <= 2; $i++) {
	$string = substr_replace($string, ':', $i*2 + $offset, 0);
	$offset++;
}
echo $string;

echo "</br></br>Write a PHP script to check if a string contains specific string.</br>";
$string = 'The quick brown fox jumps over the lazy dog.';
if (strpos($string, 'jumps') !== false) 
	echo 'it contains';
else 
	echo 'doesn\'t contain';

echo "</br></br>Write a PHP script to convert the value of a PHP variable to string.</br>";
$number = 123;
echo strval($number);

echo "</br></br>Write a PHP script to extract the file name from the following string.</br>";
$string = 'www.example.com/public_html/index.php';
echo substr($string, strrpos($string, "/") + 1);

echo "</br></br>Write a PHP script to extract the user name from the following email ID.</br>";
$string = 'rayy@example.com';
$arr = explode('@', $string);
echo $arr[0];

echo "</br></br>Write a PHP script to format values in currency style.</br>";
$val1 = 65.45;
$val2 = 104.35;
$res = number_format($val1 + $val2, 2);
echo $res;

echo "</br></br>Write a PHP script to generate simple random password [do not use rand() function] from a given
string.</br>";
$string = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
$password = '';
$password_len = 7;
for($i = 0; $i < $password_len; $i++) {
	$string = str_shuffle($string);
	$password .= substr($string, $i, 1);
}	
echo $password;

echo "</br></br>Write a PHP script to replace the first 'the' of the following string with 'That'.</br>";
$string = 'the quick brown fox jumps over the lazy dog.';
$result = preg_replace('/the/', 'That', $string, 1);
echo $result;

echo "</br></br>Write a PHP script to find first character that is different between two strings.</br>";
$string1 = 'football';
$string2 = 'footboll';
for($i = 1; $i < strlen($string1); $i++) {
	if(strncmp($string1, $string2, $i) !== 0) {
		$pos = $i-1;
		$c1 = substr($string1, $pos, 1);
		$c2 = substr($string2, $pos, 1);
		echo "First difference at position $pos: $c1 vs $c2";
		break;
	}
}

echo "</br></br>Write a PHP script to get the filename component of the following path.</br>";
$string = '"http://www.example.com/public_html/index.php';
$first = substr($string, strrpos($string, "/") + 1);
$last = strtok($first, '.');
echo $last;

echo "</br></br>Write a PHP script to print the next character of a specific character.</br>";
$char = 'X';
$offset = 1;
if($char === 'Z' || $char === 'z') {
	$offset = -25;
}	
$result = chr(ord($char) + $offset);
echo $result;

echo "</br></br>Write a PHP script to remove a part of a string from the beginning.</br>";
$string = 'rayy@example.com';
$first = strtok($string, "@");
$result = strtok("@");
echo $result;

echo "</br></br>Write a PHP script to insert a string at the specified position in a given string.</br>";
$string = 'The brown fox';
$string_to_insert = 'quick ';
$result = substr_replace($string, $string_to_insert, 4, 0); 
echo $result;

echo "</br></br>Write a PHP script to get the first word of a sentence.</br>";
$string = 'The quick brown fox';
echo strtok($string, " ");

echo "</br></br>Write a PHP script to remove all leading zeroes from a string.</br>";
$string = '000547023.24';
echo trim($string, '0');

echo "</br></br>Write a PHP script to remove part of a string.</br>";
$string = 'The quick brown fox jumps over the lazy dog';
$removed = 'fox';
$result = str_replace($removed, '', $string);
echo $result;

echo "</br></br>Write a PHP script to remove trailing slash from a string.</br>";
$string = 'The quick brown fox jumps over the lazy dog///';
echo trim($string, '/');

echo "</br></br>Write a PHP script to get the characters after the last '/' in an url.</br>";
$string = 'http://www.example.com/5478631';
$result = substr($string, strrpos($string, '/') + 1);
echo $result;

echo "</br></br>Write a PHP script to replace multiple characters from the following string.</br>";
$string = '\"\1+2/3*2:2-3/4*3';
$arr = str_split($string);
$resultArr = [];
for($i = 0; $i < count($arr); $i++) {
	if($arr[$i] > '0' && $arr[$i] < '9' || $arr[$i] === ' ')	
		array_push($resultArr, $arr[$i]);
}
$result = implode(' ', $resultArr);
echo $result;

echo "</br></br>Write a PHP script to select first 5 words from the following string.</br>";
$string = 'The quick brown fox jumps over the lazy dog';
$result = '';
$words = 1;
$result .= strtok($string, ' ');
while($words < 5) {
	$result .= ' ';
	$words++;
	$result .= strtok(' ');
}
echo $result;

echo "</br></br>Write a PHP script to remove comma(s) from the following numeric string.</br>";
$string = '2,543.12';
$result = str_replace(',', '', $string);
echo $result;

echo "</br></br>Write a PHP script to print letters from 'a' to 'z'.</br>";
for($i = 'a'; $i < 'z'; $i++)
	echo $i;

echo "</br></br>What will display the next code: $d = 'A00'; echo ++$d;</br>";
$d = 'A00';
echo ++$d;




?>