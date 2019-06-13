<HTML>
<HEAD>
<META HTTP-EQUIV="Content-Type" Content="text/html,charset=iso-8859-2">
<TITLE></TITLE>
</HEAD>
<BODY>
<?php

$a1=11;$a2=5;$count=0;
echo"Elchin Habibov";
echo"<br>";
echo"Value of a1 :".$a1;
echo"<br>";
echo"Value of a2 :".$a2;
echo"<br>";

echo"From 1 to a1:";
for($i=1;$i<=$a1;$i++){
    echo $i." ";
}
echo"<br>";
echo"Even numbers: ";
for($i=1;$i<=$a1;$i++){
    if($i%2==0){
    echo $i." ";
    $count++;
    }

}
echo"<br>";
echo "The count of even numbers:".$count;
echo"<br>";
echo"Odd numbers: ";
$count=0;
for($i=1;$i<=$a1;$i++){
    if($i%2!=0){
    echo $i." ";
    $count++;
    }

}

echo"<br>";
echo "The count of odd numbers:".$count;
echo"<br>";
$count=0;
echo"Numbers that are less than a2: ";
for($i=1;$i<=$a1;$i++){
    if($i==$a2){break;}
    echo $i." ";
    $count++;
    
}
echo"<br>";
echo "The count of Numbers that are smaller than a2 :".$count;
echo"<br>";

?>
</BODY>
<HTML>