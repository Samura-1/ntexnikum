<?php 
session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../assets/css/style.css">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
	<?php
require_once 'header.php';
?>
<?php
require '../database/connection.php';
$page = $_GET['idprof'];

$profs = $connection->query("SELECT * FROM `proffesion` WHERE idprof='$page'");
$profs = $profs->FetchAll(PDO::FETCH_ASSOC);
foreach ($profs as $prof):
?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="info-full">
			 <h2 class="text-center"><? echo $prof['name']?></h2>
			 <p><? echo $prof['content']?></p>				
			</div>
		</div>
	</div>
</div>

<?php endforeach;?>
<?
require_once 'footer.php';
?>
</body>
</html>