<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8"/>
	<title></title>
	<link rel="stylesheet" type="text/css" href="pub/css/style.css">
	<style type="text/css">
		body{
			margin:0;
			background: gray;
		}
		nav{
			background: #594848;
			width: 100%;
			overflow: auto;
		}
		ul{
			margin:0;
			padding: 0;
			list-style: none;
		}
		li{
			float:left;
		}
		nav a {
			width: 120px;
			display: block;
			text-decoration: none;
			text-align: center;
			background:#594848;
			font-size: 17px;
			color:pink;
			padding:20px 10px;
			font-family: Arial;
		}
		p{
			width:1000px;
			height:350px;

		}

        table{
            color: black;
            background-color:pink;
            border-collapse: collapse;
            font-size: 30px;
            font-family: serif;
            padding: 10px;
            border: 5px solid white;
            height: 50px;
        }
		
	</style>
</head>
<nav>
			<ul>
				<li class="nav-item"><a class="<?php echo (basename($_SERVER['PHP_SELF'])=='index.php')?"active":"";?>"href="index.php">Home</a></li>
				<li class="nav-item"><a class="<?php echo (basename($_SERVER['PHP_SELF'])=='Arithmetic.php')?"active":"";?>"href="Arithmetic.php" class="nav-link">Arithmetic</a></li>
				<li class="nav-item"><a class="<?php echo (basename($_SERVER['PHP_SELF'])=='Server.php')?"active":"";?>"href="Server.php" class="nav-link">Server</a></li>
				<li class="nav-item"><a class="<?php echo (basename($_SERVER['PHP_SELF'])=='Maintenance.php')?"active":"";?>"href="Maintenance.php" class="nav-link">Maintenance</a></li>
			</ul>
		</nav>
<body>
	<form method="post" name="supplier_form">  
       <center><h1>Arithmetic</h1></center> 
    <table align="center" cellpadding="10" action="">
         <tr>
            <div class="form-group">
            <td>Enter First Number:</td>
            <td><input type="number" name="number1" /><br><br></td>
            </tr> 
            <tr>
            <div class="form-group">
            <td>Enter Second Number:</td>
            <td><input type="number" name="number2" /><br><br></td> 
            </tr>
            <tr>
            <form action="Arithmetic.php">
            <td align="center" colspan="2"><input type="submit" name="submit" value="Total"></td> 
            </tr>
</form>
<?php  
session_start();
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