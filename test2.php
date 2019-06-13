
<?php
echo"Elchin Habibov";

echo "<br>";

$price=array('newspaper' =>9,'cap' =>35,'sausage' =>4,'apple' =>1,'butter' =>2,'peach' =>10,'cucumber' =>8,'orange' =>12,'lemon' =>16,'pineapple' =>5);

arsort($price);

echo "<br>";
$total=0;
foreach ($price as $item => $pln) {
	echo $item." costs ".$pln." PLN <br>\n";
	$total=$total+$pln;
}
echo "<br>";
echo "All items total cost = " .$total;







$filemin='min.txt';
$func1=fopen($filemin,'w');
fwrite($func1,$price);
fclose($func1);

$filemax='max.txt';
$func2=fopen($filemax,'w');
fwrite($func2,max($price));
fclose($func2);


?>
