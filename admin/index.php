<?php
session_start();
require '../database/connection.php';
$admins = $connection->query("SELECT * FROM `blog` ORDER BY id DESC");
$admins = $admins->FetchAll(PDO::FETCH_ASSOC);
?>
<?php
if ($_SESSION['login_user'][0]['status'] == 0):
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
     <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
	<div class="add">
	<a href="add.php">Добавить статью</a>
	</div>
<table id="table-admin" border="1">
	<?php 
	foreach ($admins as $admin) :
	?>	
	<tr>
		<th>Дата</th>
		<th>Заголовок</th>
		<th></th>
		<th></th>
	</tr>
	<tr>
		<td><?php echo $admin['datetime']; ?></td>
		<td><?php echo $admin['title']; ?></td>
		<td>
	   <?php
        echo ' <a class="btn-red" href=redact.php?id='.$admin['id'].'>Редактировать</a>'
        ?>
		</td>
		<td>
	   <?php
        echo ' <a  href=delete.php?id='.$admin['id'].'>Удалить</a>'
        ?>
		</td>
	</tr>
	<?php endforeach; ?>
</body>
</html>
<?php
endif;