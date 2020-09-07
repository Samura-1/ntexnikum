<?php
require '../database/connection.php';
if(isset($_GET['id']))
{
$page = $_GET['id'];
$delet =$connection->query("DELETE FROM `blog` WHERE id ='$page'");   
header("Location: index.php");	
}
?>  