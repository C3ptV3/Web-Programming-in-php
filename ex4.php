<HTML>
<HEAD>
<META HTTP-EQUIV="Content-Type" Content="text/html,charset=iso-8859-2">
<TITLE>Moje imie i nazwisko</TITLE>
</HEAD>
<BODY>
<TABLE border="1">
<TR><TH> Number</TH><TH>Sqrt</TH><TH>2nd</TH><TH>3nd</TH></TR>
<?php
for($i=1;$i<=10;$i++)
{
$sqrt=sqrt($i);
$sqr=$i*$i;
$cub=$i*$i*$i;
//print"<TR><TD>$i</TD><TD>$sqrt</TD><TD>$sqr</TD><TD>$cub</TD></TR><br>";
print"<TR><TD>$i</TD><TD>$sqrt</TD><TD>$sqr</TD><TD>$cub</TD></TR>\n";
}
?>
</BODY>
<HTML>