<?php
//Om man inte är inloggad ska man komma till inloggningssidan
session_start();
if(!isset($_SESSION['user']))
{
  header("Location: http://localhost:8888/projektarbete/");
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
        <a href="http://localhost:8888/projektarbete/homepage.php" class="navbar-brand"> Student Start Up </a>

      </div>
    	<div class = "collapse navbar-collapse" id="MainMeny" >
    		<ul class="nav navbar-nav">
    			<li class="active"><a a href="http://localhost:8888/projektarbete/homepage.php">Home</a></li>
    			<li><a href="http://localhost/grupp13/homepage_om.php">Om oss</a></li>
    			<li><a href="http://localhost/grupp13/homepage_kontakt.php">Kontakt</a></li>
    			<li><a href="http://localhost/grupp13/homepage_faq.php#">FaQ</a></li>

			    <li class="dropdown">
				    <a href ="#" class="dropdown-toggle" data-toggle="dropdown"> Profil <span class="caret"></span></a>
				    <ul class="dropdown-menu">
					    <li><a href="#">Inlägg</a></li>
					    <li><a href="#">Vänner</a></li>
					    <li><a href="#">Inställningar</a></li>
				    </ul>
          </li>
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
                <li><a href="#">Start</a></li>
				<li><a href="#">Inlägg</a></li>
                <li><a href="#">Inställningar</a></li>
            </ul>
        </div>

        <!-- Page content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
					<a href="#" class="btn btn-danger" id="menu-toggle">Menu</a>
					<br>
          <form id="adForm" name="adForm" method="POST" action="register-ad.php">
            <input type="text" id="search" name="search" placeholder="Sök efter poster..."><br>

            <input type="text" id="namn" name="namn" placeholder="Fullständigt namn"><br>
            <input type="text" id="rubrik" name="rubrik" placeholder="Ange rubrik"><br>
            <textarea name="usertext" id="usertext" placeholder="Skriv en annons..."></textarea><br>
            <input type="submit" value="Posta!" name="postbtn" id="postbtn">
          </form>
					<br>
						 <div class="col-md-12" style="background-color: lightblue; padding: 5px;">
								<div class="alert alert-danger fade in">
								<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>


								<hr>
								<h1 id="inlägg-rubrik">Rubrik här</h1>
								<p>Annons här.
									<br> Kontakta mig på

									<a href ="#" > MyNewCompany@live.se </a>
									<br>
									<a href ="#" class="btn btn-success" id="Intresserad"> Intresserad</a>
									<a href ="#" class="btn btn-danger" id="Intresserad"> Dölj</a>
									<br>
									<br>
								</p>
								<hr>
								</div>

                <?php
                $mysqli = new mysqli('localhost', 'root', 'root', 'projektarbete');
                $selectSQL = "SElECT * FROM annonsTable";
                $result = $mysqli->query($selectSQL);

                while($row = $result->fetch_assoc())
                echo'
                  <div class="alert alert-danger fade in">
  								<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

  								<hr>
  								<h1 id="inlägg-rubrik">'. $row['rubrik'] . '</h1>
  								<p> '. $row['annons'] .'
  									<br> Kontakta mig på

  									<a href ="#" > MyNewCompany@live.se </a>
  									<br>
  									<a href ="#" class="btn btn-success" id="Intresserad"> Intresserad</a>
  									<a href ="#" class="btn btn-danger" id="Intresserad"> Dölj</a>
  									<br>
  									<br>
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
</html>
<?php } ?>
