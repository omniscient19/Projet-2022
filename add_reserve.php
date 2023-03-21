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
				<br />
				<?php 
					require_once 'admin/connect.php';
					$query = $conn->query("SELECT * FROM `room` WHERE `room_id` = '$_REQUEST[room_id]'") or die(mysql_error());
					$fetch = $query->fetch_array();
				?>
				<div style = "height:300px; width:800px;">
					<div style = "float:left;">
						<img src = "photo/<?php echo $fetch['photo']?>" height = "300px" width = "400px">
					</div>
					<div style = "float:left; margin-left:10px;">
						<h3><?php echo $fetch['room_type']?></h3>
						<h3 style = "color:#00ff00;"><?php echo "Php. ".$fetch['price'].".00";?></h3>
					</div>
				</div>
				<br style = "clear:both;" />
				<div class = "well col-md-4">
					<form method = "POST" enctype = "multipart/form-data">
						<div class = "form-group">
							<label>Prénom</label>
							<input type = "text" class = "form-control" name = "firstname" required = "required" />
						</div>
						<div class = "form-group">
							<label>Deuxième nom</label>
							<input type = "text" class = "form-control" name = "middlename" required = "required" />
						</div>
						<div class = "form-group">
							<label>Nom de famille</label>
							<input type = "text" class = "form-control" name = "lastname" required = "required" />
						</div>
						<div class = "form-group">
							<label>Adresse</label>
							<input type = "text" class = "form-control" name = "address" required = "required" />
						</div>
						<div class = "form-group">
							<label>Contact No</label>
							<input type = "text" class = "form-control" name = "contactno" required = "required" />
						</div>
						<div class = "form-group">
							<label>Enregistrement</label>
							<input type = "date" class = "form-control" name = "date" required = "required" />
						</div>
						<br />
						<div class = "form-group">
							<button class = "btn btn-info form-control" name = "add_guest"><i class = "glyphicon glyphicon-save"></i> Soumettre</button>
						</div>
					</form>
				</div>
				<div class = "col-md-4"></div>
				<?php require_once 'add_query_reserve.php'?>
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