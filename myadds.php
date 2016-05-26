<?php
//Om man inte är inloggad ska man komma till inloggningssidan
session_start();
if(!isset($_SESSION['user']))
{
  header("Location: http://localhost/grupp13/index.php");
}
else
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Start Up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="sidebar.css">
  <link rel="stylesheet" href="homepage.css">
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="navbar-header">
		    <button type="button" class ="navbar-toggle" data-toggle="collapse" data-target="#MainMeny">
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		    </button>
			<a href="http://localhost/grupp13/homepage.php" class="navbar-brand"> Student Start Up </a>
		</div>
    	<div class = "collapse navbar-collapse" id="MainMeny" >
    		<ul class="nav navbar-nav">
    			<li><a href="http://localhost/grupp13/homepage.php#">Home</a></li>
				<li><a href="http://localhost/grupp13/homepage_om.php">Om oss</a></li>
				<li><a href="http://localhost/grupp13/homepage_kontakt.php">Kontakt</a></li>
				<li><a href="http://localhost/grupp13/homepage_faq.php#">FaQ</a></li>
			    <li class="dropdown">
				    <a href ="#" class="dropdown-toggle" data-toggle="dropdown"> Profil <span class="caret"></span></a>
				    <ul class="dropdown-menu">
					    <li class="active"><a href="http://localhost/grupp13/myadds.php">Inlägg</a></li>
					    <li><a href="a href="#">Vänner</a></li>
					    <li><a href="#">Inställningar</a></li>
						<li><a href="myprofile.php">Min profil</a></li>						
				    </ul>
				</li>
				<li><a href="#"><?php echo $_SESSION['user'];?></a></li>			
		    </ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="logout.php"> - Logga Ut - </a></li>
		</ul>
	</div>
	</nav>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li><a href="http://localhost/grupp13/homepage.php">Start</a></li>
				<li><a href="http://localhost/grupp13/myadds.php">Inlägg</a></li>
                <li><a href="#">Inställningar</a></li>
            </ul>
        </div>

        <!-- Page content -->
		
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 col-xs-12">
					<a href="#" class="btn btn-danger" id="menu-toggle">Menu</a>
					<br>
					<div>
						<h2>Här kan du se dina inlägg</h2>
					</div>
						
						<hr>
						<div class="col-md-12" style="background-color: lightgrey; padding: 5px;">

							<br>
							<?php
							$mysqli = new mysqli('dbtrain.im.uu.se', 'dbtrain_317', 'aldylb','dbtrain_317');
							$user = $_SESSION['user'];
							if($user=="admin@studentstratup.se"){
							$selectSQL= "SELECT * from annonsTable,category WHERE annonsTable.catagoryID=catagory.ID";
							$inläggemail = mysqli_real_escape_string($mysqli, $_SESSION['user']);
							}else{
							$inläggemail = mysqli_real_escape_string($mysqli, $_SESSION['user']);
							$selectSQL = "SELECT * FROM annonsTable WHERE email='$inläggemail'";
							}
							$result = $mysqli->query($selectSQL);
							while($row = $result->fetch_assoc())
							echo'
							<div class="alert alert-info fade in">
										<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
										<h3> 
										'.$row['categoryName'].'
										</h3>
										<hr>
										<h1 id="inlägg-rubrik">'. $row['rubrik'] .'</h1>
										<p> '. $row['annons'] .'
											<br> Kontakta mig på
											<a href ="#" > '.$row['email'].'</a>
											<br>
											<form name="delete" method="post" action="myaddsdelete.php">
												<input type="hidden" name="postdelete_hidden" value="'. $row['id'].'"> 
												<input type="submit" class="btn btn-danger" id="Intresserad" name="postdelete" value="Ta bort!"> 												
											</form>	
											
											<br>
											<br>
											Annons nummer: '. $row['id'].'
										</p>
										<hr>
							</div>'
							?>
						</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
	<script>
        $("#menu-toggle").click( function (e){
            e.preventDefault();
            $("#wrapper").toggleClass("menuDisplayed");
        });
    </script>
</body>
</html>
<?php } ?>
