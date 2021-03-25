<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title></title>
	<link rel="stylesheet" type="text/css" href="pub/css/style.css">
	<style>
	body{
			background-color: grey;
		}
		
		table{
			color: black;
			background-color:skyblue;
			border-collapse: collapse;
			font-size: 20px;
			font-family: serif;
			padding: 10px;
			border: 5px solid white;
		}
		h1{
			text-align: center;
			color: white;
			
		}
		{
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
		.all-art1 {
        margin: 20;
        padding: 10px;
        background-color: gray;
        }
       .all-art1 > h1, .art1 {
       margin: 30px;
       padding: 20px;
       
       }

       .art1 {
       background: white;
       }

       .art1 > h2, p {
        margin: 10px;
       font-size: 100%;
}
	</style>
</head>
<body>


	        <nav>
			<ul>
				<li class="nav-item"><a class="<?php echo (basename($_SERVER['PHP_SELF'])=='index.php')?"active":"";?>"href="index.php">Home</a></li>
				<li class="nav-item"><a class="<?php echo (basename($_SERVER['PHP_SELF'])=='Arithmetic.php')?"active":"";?>"href="Arithmetic.php" class="nav-link">Arithmetic</a></li>
				<li class="nav-item"><a class="<?php echo (basename($_SERVER['PHP_SELF'])=='Server.php')?"active":"";?>"href="Server.php" class="nav-link">Server</a></li>
				<li class="nav-item"><a class="<?php echo (basename($_SERVER['PHP_SELF'])=='Maintenance.php')?"active":"";?>"href="Maintenance.php" class="nav-link">Maintenance</a></li>
			</ul>
		</nav>
		
	
		<article class="all-art1">
  <h1>ABOUT SERVER INFORMATION</h1>
  <article class="art1">
    <h2>Server meaning</h2>
    <p>In computing, a server is a piece of computer hardware or software that provides functionality for other programs or devices, called "clients". This architecture is called the client–server model.</p>
  </article>
  <article class="art1">
    <h2>What is Server and its functions?</h2>
    <p>A server is a computer connected to a network of other workstations called 'clients'. Client computers request information from the server over the network. Servers tend to have more storage, memory and processing power than a normal workstation. How a server functions depends on the type of network it is on.</p>
  </article>
  <article class="art1">
    <h2>Why server is used?</h2>
    <p>Servers can provide various functionalities, often called "services", such as sharing data or resources among multiple clients, or performing computation for a client. A single server can serve multiple clients, and a single client can use multiple servers.</p>
  </article>
</article>
	
		

</body>
</html>
