<?php
$t=date("H");
print($t."<br>");
if($t<10){
    echo "Have a good morning!<br>";
}
elseif($t<20){
    echo "Have a good day<br>";
}
else{
    echo"Have a good night";
}
?>