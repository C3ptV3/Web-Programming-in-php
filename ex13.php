<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php


$price=array('yoghurt' =>'2 PLN','butter' =>'1.5 PLN','sausage' =>'4 PLN','newspaper' =>'5 PLN');
ksort($price);
foreach ($price as $klucz => $wartosc) {
	echo $klucz." costs ".$wartosc."<br>\n";
}

echo "<br>\n";


asort($price);
foreach ($price as $klucz => $wartosc) {
	echo $klucz." costs ".$wartosc."<br>\n";
}

echo "<br>\n";
echo "<br>\n";

$dzien=date('d');
$dzientygodnia=date('l');
$miesiac=date('n');
$rok1=date('D');
$rok3=date('j');
$rok2=date('N');
$rok4=date('S');
$rok5=date('w');
$rok6=date('z');
$rok7=date('W');
$rok8=date('F');
$rok9=date('m');
$rok10=date('M');
$rok11=date('t');
$rok12=date('L');
$rok13=date('o');
$rok14=date('Y');
$rok15=date('y');
$rok16=date('a');
$rok17=date('A');
$rok18=date('i');

echo "	A textual representation of a day, three letters:".$rok1;
echo "<br>\n";
echo date('l jS \of F Y h:i:s A');
echo "<br>\n";
echo "	ISO-8601 numeric representation of the day of the week ".$rok2;
echo "<br>\n";
echo "		Day of the month without leading zeros:".$rok3;
echo "<br>\n";
echo "		English ordinal suffix for the day of the month, 2 characters:".$rok4;
echo "<br>\n";
echo "		Numeric representation of the day of the week:".$rok5;
echo "<br>\n";
echo "		The day of the year (starting from 0):".$rok6;
echo "<br>\n";
echo "	ISO-8601 week number of year, weeks starting on Monday:".$rok7;
echo "<br>\n";
echo "		A full textual representation of a month, such as January or March:".$rok8;
echo "<br>\n";
echo "		Numeric representation of a month, with leading zeros:".$rok9;
echo "<br>\n";
echo "		A short textual representation of a month, three letters:".$rok10;
echo "<br>\n";
echo "		Number of days in the given month:".$rok11;
echo "<br>\n";
echo "	Whether it's a leap year :".$rok12;
echo "<br>\n";
echo "	ISO-8601 week-numbering year. This has the same value as Y, except that if the ISO week number (W) belongs to the previous or next year, that year is used instead. (added in PHP 5.1.0):".$rok13;
echo "<br>\n";
echo "		A full numeric representation of a year, 4 digits:".$rok14;
echo "<br>\n";
echo "		A two digit representation of a year:".$rok15;
echo "<br>\n";
echo "		Lowercase Ante meridiem and Post meridiem:".$rok16;
echo "<br>\n";
echo "		Uppercase Ante meridiem and Post meridiem:".$rok17;
echo "<br>\n";
echo "			Minutes with leading zeros:".$rok18;
echo "<br>\n";



$bugun = date('H:m:Y '); 

echo $bugun;

?>
</body>
</html>