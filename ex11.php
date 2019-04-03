<HTML>
<HEAD>
<META HTTP-EQUIV="Content-Type" Content="text/html,charset=iso-8859-2">
<TITLE></TITLE>
</HEAD>
<BODY>
<TABLE border="1">
<TR><TH> a </TH><TH>a<sup>2</sup></TH><TH>a<sup>3</sup></TH><TH>a<sup>4</sup></TH><TH>a<sup>5</sup></TH><TH>a<sup>6</sup></TH><TH>a<sup>7</sup></TH></TR>
<?php
for($i=1;$i<=30;$i++)
{
    $cub2=$i*$i;
    $cub3=$i*$i*$i;
    $cub4=$i*$i*$i*$i;
    $cub5=$i*$i*$i*$i*$i;
    $cub6=$i*$i*$i*$i*$i*$i;
    $cub7=$i*$i*$i*$i*$i*$i*$i;
//print"<TR><TD>$i</TD><TD>$sqrt</TD><TD>$sqr</TD><TD>$cub</TD></TR><br>";
print"<TR><TD>$i</TD><TD>$cub2</TD><TD>$cub3</TD><TD>$cub4</TD><TD>$cub5</TD><TD>$cub6</TD><TD>$cub7</TD></TR>\n";
}



echo"<br>";
$x=50;
$y=1;
echo "<pre>";
for($i=1; $i<=$x; $i++)
            {

                for($bosluq=0;$bosluq<=$x-$i;$bosluq++){
                    echo" ";
                }

                

                for($ulduz=1;$ulduz<=$i;$ulduz++){
                    echo "*";
                    echo" ";
                }


                for($bosluq=0;$bosluq<=$x-$i;$bosluq++){
                    echo" ";
                }

                echo"<br>";

            }
echo"</pre>";                          



?>
</TABLE>
</BODY>
<HTML>