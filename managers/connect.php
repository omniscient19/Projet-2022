<!-- Connexion à la base de données -->
<?php
$conn = new mysqli("localhost", "root", "", "db_hor") or die(mysqli_error());	
