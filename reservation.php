<!DOCTYPE html>
<html lang = "fr">
	<head>
		<title>Hôtel Hypnos</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >Hôtel Hypnos</a>
			</div>
		</div>
	</nav>	
	<ul id = "menu">
		<li><a href = "index.php">Accueil</a></li> |
		<li><a href = "aboutus.php">À propos de nous</a></li> |
		<li><a href = "contactus.php">Contactez-nous</a></li> |
		<li><a href = "gallery.php">Gallerie</a></li> |
		<li><a href = "dineandlounge.php">Dîner et salon</a></li> |			
		<li><a href = "reservation.php">Faire une réservation</a></li> |
		<li><a href = "rulesandregulation.php">Régles de l'Hôtel</a></li>
	</ul>
	<div style = "margin-left:0;" class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<strong><h3>FAIRE UNE RÉSERVATION</h3></strong>
				<?php
					require_once 'admin/connect.php';
					$query = $conn->query("SELECT * FROM `room` ORDER BY `price` ASC") or die(mysql_error());
					while($fetch = $query->fetch_array()){
				?>
					<div class = "well" style = "height:300px; width:100%;">
						<div style = "float:left;">
							<img src = "photo/<?php echo $fetch['photo']?>" height = "250" width = "350"/>
						</div>
						<div style = "float:left; margin-left:10px;">
							<h3><?php echo $fetch['room_type']?></h3>
							<h4 style = "color:#00ff00;"><?php echo "Price: Php. ".$fetch['price'].".00"?></h4>
							<br /><br /><br /><br /><br /><br />
							<a style = "margin-left:580px;" href = "add_reserve.php?room_id=<?php echo $fetch['room_id']?>" class = "btn btn-info"><i class = "glyphicon glyphicon-list"></i>Réserve</a>
						</div>
					</div>
				<?php
					}
				?>
			</div>
		</div>
	</div>
	<br />
	<br />
	<div style = "text-align:right; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">
		<label>&copy; Copyright Hypnos 2023 </label>
	</div>
</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
</html>