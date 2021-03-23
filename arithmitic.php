<!DOCTYPE html>
<html>
<head>
	<title>Arithmtic</title>
</head>
<body>
	<form method="post">  
Enter First Number:  
<input type="number" name="number1" /><br><br>  
Enter Second Number:  
<input type="number" name="number2" /><br><br>  
<input  type="submit" name="submit" value="sagot">  
<?php  
    if(isset($_POST['submit']))  
    {  
        $number1 = $_POST['number1'];  
        $number2 = $_POST['number2']; 

        $c = $number1 + $number2;
         echo "Addtion Operation Result: $c <br/>";
         
         $c = $number1 - $number2;
         echo "Substraction Operation Result: $c <br/>";
         
         $c = $number1 * $number2;
         echo "Multiplication Operation Result: $c <br/>";
         
         $c = $number1 / $number2;
         echo "Division Operation Result: $c <br/>";
         
         $c = $number1 % $number2;
         echo "Modulus Operation Result: $c <br/>";
}  
?>  
</form>
</html>