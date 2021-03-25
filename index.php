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
         <br><br><h1 style="background-color:skyblue;"> System Administration and Maintenance</h1><br>

<body>



    </header>
  <section class="row jumbotron">
    <div class="col-sm-3">
       <img src="images/logo.png">

    </div>
    <div class="col-sm-8"><p>We provide competent and independent consultancy on the use of information systems. We transform your process requirements into system solutions. We support you during the whole life cycle of your IT project, starting with project planning, and continuing with its realization and system maintenance.

    Our special approach contains among other things the analysis of existing infrastructure. We analyze the current state and help you in the optimization of processes, their cost reduction and their expansion. In cases of small budgets we show you how to save licensing costs e.g. by using open source software.</p></div>
</secton>

</section>
<center>
          <header class="row">
          <div class="col-sm-6">
            <h2>WHAT I KNOW</h2>
            <p>system maintenance to describe any sort of repairs being performed on a computer or multiple computers within a network. IT maintenance can often take hours to complete, and professionals usually describe the work in general terms to avoid the timely explanations required for more specific language. When websites are inaccessible due to attacks from hackers, server problems, or for updating and repair, the administrators of the website will often display an image apologizing for the maintenance and website downtime. This allows users to understand that the website cannot be used and that the administrators are aware of the issue.
            </p>
        </div>
          <div class="col-sm-6">
            <h2>WHAT I LEARN</h2>

            <p>System administration refers to the management of one or more hardware and software systems.The task is performed by a system administrator who monitors system health, monitors and allocates system resources like disk space, performs backups, provides user access, manages user accounts, monitors system security and performs many other functions.</p> <br><br>
        </center>
    </section>

    <div class="col-sm-12">
    </section>
    <footer>
        <h3>My Page &copy; 2021</h3>
    </footer>  

    </div>
</body>

</html> 