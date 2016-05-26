<!DOCTYPE html>
<html lang="en">
<head>
    <title>-Kontakt-</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="sidebar.css">
</head>
<body>
	<nav class="navbar navbar-inverse">
	
	
	<div class="navbar-header">
		<button type="button" class ="navbar-toggle" data-toggle="collapse" data-target="#MainMeny">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		<a href="http://localhost/grupp13/homepage.php#" class="navbar-brand"> Student Start Up </a>
		
	</div>
	<div class = "collapse navbar-collapse" id="MainMeny" >
		<ul class="nav navbar-nav">
			<li><a a href="http://localhost/grupp13/homepage.php#">Home</a></li>
			<li><a a href="http://localhost/grupp13/homepage_om.php">Om oss</a></li>
			<li class="active"><a a href="http://localhost/grupp13/homepage_kontakt.php">Kontakt</a></li>
			<li><a a href="http://localhost/grupp13/homepage_faq.php#">FaQ</a></li>
			
			<li class="dropdown">
				<a href ="#" class="dropdown-toggle" data-toggle="dropdown"> Profil <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="#">Inlägg</a></li>
					<li><a href="#">Vänner</a></li>
					<li><a href="#">Inställningar</a></li>
				</ul>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href "#"> - Logga Ut - </a></li>
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
					<br>
						 <div class="col-md-12" style="background-color: lightgreen; padding: 5px;"> 
								
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
