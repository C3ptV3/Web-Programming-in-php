<?php error_reporting(E_ALL & E_NOTICE);?>
<html>
<body>
	<h1>form using the get variable</h1>
	<form metod="get" action="ex15.php">
		<p>Num1:
			<input type="number" name="Num1" size="15"/><br/>
			Num2:
			<input type="number" name="Num2" size="20"/><br/>
			<input type="submit" value="SEND">
		</form>
		<?php
		$num1=$_GET['Num1'];
		$num2=$_GET['Num2'];
		echo "Number1  ".$num1;
		echo "<br>\n";
		echo "Number2  ".$num2;
		echo "<br>\n";


		$nplik='num.txt';
		$uplik=fopen($nplik,'r');
		$dane=fread($uplik,filesize($nplik));
		fclose($uplik);

		echo "Number in Txt :  ".$dane;
		echo "<br>\n";

		$nplik='op.txt';
		$uplik=fopen($nplik,'r');
		$dane1=fread($uplik,filesize($nplik));
		fclose($uplik);

		echo "Operator in Txt :  ".$dane1;
		echo "<br>\n";

		switch ($dane1) {
    case "+":
        $result=$num1+$num2+$dane;
        break;
    case "-":
        $result=$num1-$num2-$dane;
        break;
    case "*":
        $result=$num1*$num2*$dane;
        break;
    case "/":
        $result=$num1/$num2/$dane;
        break;    
    case "%":
        $result=$num1%$num2%$dane;
        break;
}
		echo "Result: ".$result;



		?>
	</body>

</html>