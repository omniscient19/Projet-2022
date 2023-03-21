<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'names.php';
?>
<html lang = "fr">
	<head>
		<title>Hôtel Hypnos</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >Hôtel Hypnos</a>
			</div>
			<ul class = "nav navbar-nav pull-right ">
				<li class = "dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class = "glyphicon glyphicon-user"></i> <?php echo $name;?></a>
					<ul class="dropdown-menu">
						<li><a href="logout.php"><i class = "glyphicon glyphicon-off"></i> Se déconnecter</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<div class = "container-fluid">	
		<ul class = "nav nav-pills">
			<li><a href = "home.php">Accueil</a></li>
			<li><a href = "account.php">Comptes</a></li>
			<li><a href = "reserve.php">Réservation</a></li>
			<li><a href = "room.php">Chambre</a></li>			
		</ul>	
	</div>
	<br />
	<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Transaction / Chambre/ Changer de Chambre</div>
				<br />
				<div class = "col-md-4">
					<?php
						$query = $conn->query("SELECT * FROM `room` WHERE `room_id` = '$_REQUEST[room_id]'") or die(mysqli_error());
						$fetch = $query->fetch_array();
					?>
					<form method = "POST" enctype = "multipart/form-data">
						<div class = "form-group">
							<label>Chambre Type </label>
							<select class = "form-control" required = required name = "room_type">
								<option value = "">Choisir une option</option>
								<option value = "Standard" <?php if($fetch['room_type'] == "Standard"){echo "selected";}?>>Standard</option>
								<option value = "Superior" <?php if($fetch['room_type'] == "Superior"){echo "selected";}?>>Supérieur</option>
								<option value = "Super Deluxe" <?php if($fetch['room_type'] == "Super Deluxe"){echo "selected";}?>>Super Deluxe</option>
								<option value = "Jr. Suite" <?php if($fetch['room_type'] == "Jr. Suite"){echo "selected";}?>>Jr. Suite</option>
								<option value = "Executive Suite" <?php if($fetch['room_type'] == "Executive Suite"){echo "selected";}?>>Suite Exécutive</option>
							</select>
						</div>
						<div class = "form-group">
							<label>Prix </label>
							<input type = "number" min = "0" max = "999999999" value = "<?php echo $fetch['price']?>" class = "form-control" name = "price" />
						</div>
						<div class = "form-group">
							<label>Photo </label>
							<div id = "preview" style = "width:150px; height :150px; border:1px solid #000;">
								<img src = "../photo/<?php echo $fetch['photo']?>" id = "lbl" width = "100%" height = "100%"/>
							</div>
							<input type = "file" required = "required" id = "photo" name = "photo" />
						</div>
						<br />
						<div class = "form-group">
							<button name = "edit_room" class = "btn btn-warning form-control"><i class = "glyphicon glyphicon-edit"></i> Sauvegarder les modifications</button>
						</div>
					</form>
					<?php require_once 'edit_query_room.php'?>
				</div>
			</div>
		</div>
	</div>
	<br />
	<br />
	<div style = "text-align:right; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">
		<label>&copy; Copyright Hypnos 2023 </label>
	</div>
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>
<script type = "text/javascript">
	$(document).ready(function(){
		$pic = $('<img id = "image" width = "100%" height = "100%"/>');
		$lbl = $('<center id = "lbl">[Photo]</center>');
		$("#photo").change(function(){
			$("#lbl").remove();
			var files = !!this.files ? this.files : [];
			if(!files.length || !window.FileReader){
				$("#image").remove();
				$lbl.appendTo("#preview");
			}
			if(/^image/.test(files[0].type)){
				var reader = new FileReader();
				reader.readAsDataURL(files[0]);
				reader.onloadend = function(){
					$pic.appendTo("#preview");
					$("#image").attr("src", this.result);
				}
			}
		});
	});
</script>
</html>