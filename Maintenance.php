<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <style type="text/css">
    p{
      text-align: justify;
    }
    img{
      width: 100%;
      height: auto;
    }
    a{
      color: #1b2107;
    }
    h3{
      text-align: center;
    }
    h2{
      box-sizing: border-box;
      width: 290px;
      height: 90px;
      padding: 20px;
      border: 2px solid blue;
    }
    h1{
      text-align: center;
    }
    footer{
      
      color: black;
      text-align: center;
      padding: 10px;
    }
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
			margin:10;
			padding: 10;
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



  </style>

</head>
<nav>
			<<ul>
				<li class="nav-item"><a class="<?php echo (basename($_SERVER['PHP_SELF'])=='index.php')?"active":"";?>"href="index.php">Home</a></li>
				<li class="nav-item"><a class="<?php echo (basename($_SERVER['PHP_SELF'])=='Arithmetic.php')?"active":"";?>"href="Arithmetic.php" class="nav-link">Arithmetic</a></li>
				<li class="nav-item"><a class="<?php echo (basename($_SERVER['PHP_SELF'])=='Server.php')?"active":"";?>"href="Server.php" class="nav-link">Server</a></li>
				<li class="nav-item"><a class="<?php echo (basename($_SERVER['PHP_SELF'])=='Maintenance.php')?"active":"";?>"href="Maintenance.php" class="nav-link">Maintenance</a></li>
			</ul>
		</nav>
    <div class="container">
    <header class="row">
      <div class="col-sm-12">
         <br><br><h1 style="background-color:gray;">Maintenance Information</h1><br>

<body>



    </header>
  <section class="row jumbotron">
    <div class="col-sm-3">
       <img src="pic.jpg">

    </div>
    <div class="col-sm-8"><p>Maintenance is the process of modifying an information system to continually satisfy organizational and user requirements. There is a vast difference between hardware and software maintenance in costs as well as in objectives. Changing the application to adapt it to a new hardware or software environment.</p>

    <p>A computerized maintenance management system or CMMS is software that centralizes maintenance information and facilitates the processes of maintenance operations. It helps optimize the utilization and availability of physical equipment like vehicles, machinery, communications, plant infrastructures and other assets.</p>

    <p>Maintenance workers, also known as repair workers, fix and maintain mechanical equipment, buildings, and machines. Tasks include plumbing work, painting, flooring repair and upkeep, electrical repairs and heating and air conditioning system maintenance.</p></div>
</secton>


    <div class="col-sm-12">
    </section>
    <footer>
        <h3>My Page &copy; 2021</h3>
    </footer>  

    </div>
</body>

</html> 
