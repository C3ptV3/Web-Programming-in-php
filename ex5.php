<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

$n1 = 3;
$n2 = 1.34;
$d=$n1-$n2;
$b = $n1/$n2;
print $b;
print "<br>";
printf("%0.2f",$b);
print "<br>";
echo $b;
print "<br>";

$increment = 5;
print(++$increment);
print "<br>";
print($increment++);
print "<br>";
print($increment);
print "<br>";

echo "Postincrement"."<br>";
$a = 5;
echo "Result = ".$a++."<br>";
echo "a = ".$a."<br>";

echo "Preincrement"."<br>";
$a = 5;
echo "Result = ".++$a."<br>";
echo "a = ".$a."<br>";

echo "Postdecrement"."<br>";
$a = 5;
echo "Result = ".$a--."<br>";
echo "a = ".$a."<br>";

echo "Predecrement"."<br>";
$a = 5;
echo "Result = ".--$a."<br>";
echo "a = ".$a."<br><br>";
$string1="Good";

$string2="Year";

if ($a>$b) {
	echo "a is bigger than b";
}

if ($string1==$string2) {
	echo "It is exactly the same";
}
if(!($string1==$string2))
{
    echo"Goodyear are good tires";
}
?>
</body>
</html>