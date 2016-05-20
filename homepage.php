
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
		<a href="#" class="navbar-brand"> Student Start Up </a>

	</div>
	<div class = "collapse navbar-collapse" id="MainMeny" >
		<ul class="nav navbar-nav">
			<li class="active"><a a href="#">Home</a></li>
			<li><a a href="#">Om oss</a></li>
			<li><a a href="#">Kontakt</a></li>
			<li><a a href="#">FaQ</a></li>

			<li class="dropdown">
				<a href ="#" class="dropdown-toggle" data-toggle="dropdown"> Profil <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="#">Inlägg</a></li>
					<li><a href="#">Vänner</a></li>
					<li><a href="#">Inställningar</a></li>
				</ul>
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
        <form id="adForm" name="adForm" method="POST" action="register-ad.php">
          <input type="text" id="search" name="search" placeholder="Sök efter poster..."><br>

          <input type="text" id="namn" name="namn" placeholder="Fullständigt namn"><br>
          <input type="text" id="rubrik" name="rubrik" placeholder="Ange rubrik"><br>
          <textarea name="usertext" id="usertext" placeholder="Skriv en kommentar..."></textarea><br>
          <input type="submit" value="Posta!" name="postbtn" id="postbtn">
        </form>

        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
					<a href="#" class="btn btn-danger" id="menu-toggle">Menu</a>
					<br>
					<br>
						 <div class="col-md-12" style="background-color: lightblue; padding: 5px;">
								<div class="alert alert-danger fade in">
								<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

								<hr>
								<h1 id="inlägg-rubrik">Söker Ekonom</h1>
								<p>Hej jag har en bra företags ide och vill ha en student med kunskap av att starta företag.
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
