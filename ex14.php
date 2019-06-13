<?php
$farray[0]=0;

for($i=0;$i<10;$i++){
array_push($farray,mt_rand(10,100));
} 
$string=implode(" ",$farray);




$nplik='m.txt';
$plik=fopen($nplik,'w');
fwrite($plik,$string);
fclose($plik);

$uplik=fopen($nplik,'r');
$dane=fread($uplik,filesize($nplik));
fclose($uplik);

$array=explode(' ',$dane);

$max=$array[0];

for($i=0;$i<sizeof($array);$i++){
    if($array[$i]>$max){
        $max=$array[$i];
    }

}
echo $max; 





?>