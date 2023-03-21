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
	<strong><h3>CONTACT US</h3></strong>
	<div class = "col-md-3">	
					<form method = "POST">
						<div class = "form-group">
							<label>Nom </label>
							<input type = "text" class = "form-control" name = "name" />
						</div>
						<div class = "form-group">
							<label>Prénom </label>
							<input type = "text" class = "form-control" name = "username" />
						</div>
						<div class = "form-group">
							<label>Email </label>
							<input type = "email" class = "form-control" name = "email" />
						</div>
						<br>
						<div class="form-group">
            <label for="FormGroupSelect1">Choisissez un sujet</label>
            <select class="form-text" id="sujet">
              <option>je souhaite poser une réclamation</option>
              <option>je souhaite commander un service supplémentaire</option>
              <option>je souhaite en savoir plus sur une suite</option>
              <option>J'ai un soucis avec cette application</option>
            </select>
          </div>
		  <div class="form-group">
          <label for="message">Votre message ici...</label>  
          <textarea type="message" class="form-text"></textarea>
          </form>
						<br />
						<div class = "form-group">
							<button name = "add_account" class = "btn btn-info form-control"><i class = "glyphicon glyphicon-send"></i> Envoyer</button>
						</div>
	<div style = "margin-left:0;" class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<br />
				<br />
				<center><img src = "images/hotel.jpg" width = "300" height = "300" /></center>
				<br />
				<br />
				<center>
				<p>Contact No: +33 012 345 678</p>
				<p>Email: chambre@hotelhypnos.fr</p>
				</center>
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