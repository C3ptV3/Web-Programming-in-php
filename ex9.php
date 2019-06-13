<?php
$a=5;$b=1;$c=4;


if ($a<$b){
    if($a<$c){
        echo "$a";
        if($b<$c){
            echo"$b";
            echo"$c";
        }
        else{
            echo"$c";
            echo"$b";
        }
    }
    else{
        echo "$c";
        if($b<$c){
            echo"$b";
            echo"$c";
        }
        else{
            echo"$a";
            echo"$b";
        }
    }
}
elseif($b<$a){
    if($b<$c){
        echo "$b";
        if($a<$c){
            echo"$a";
            echo"$c";
        }
        else{
            echo"$c";
            echo"$a";
        }
    }
    else{
        echo "$c";
        if($a<$c){
            echo"$c";
            echo"$a";

        }
        else{
            echo"$b";
            echo"$a";
        }
    }
}



?>