<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Page Title</title>
    <link ref="stylesheet" type="text/css" href="zac2.css"/>
</head>
<body>
    <table>
     <tr>
    <?php
    $i=1;
    echo "<tr>";
    while($i<10){
    $x=1;
while($x<=10){
    echo "<td>"; echo $i."x". $x ."=".$i*$x; echo"</td>";
    $x++;
}
echo "</tr>";
$i++;
}
?>
</tr>
</table>
</body>
</html>