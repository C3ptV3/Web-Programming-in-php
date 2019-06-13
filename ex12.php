<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php


$cars[0]="volvo";
$cars[1]="mercedes";
$cars[2]="bemywife";

echo "I like ".$cars[0]." , ".$cars[2];

echo count($cars);
echo "<br>";
$array=array(1,2,3,4,1,8=>1,4=>1,19,3=>13);
print_r($array);


echo "<br>";

$first_quarter=array(1=>"January","February","March");
print_r($first_quarter);

echo "<br>";
for($i=0;$i<count($cars);$i++)
{
    echo($cars[$i]);
    echo "<br>";
}

for($i=0;$i<11;$i++)
{
    $count[$i]=0;
}

for($i=0;$i<50;$i++)
{
    $cars[$i]=rand(0,10);
    $count[$cars[$i]]++;

}
print_r($cars);
    echo "<br>";

for($i=0;$i<11;$i++)
{
    echo $i."=".$count[$i];
        echo "<br>";
}







?>
</body>
</html>