<?php
require '../database/connection.php';
$uploaddir='../assets/img/upload/';
$uploadfile1 = $uploaddir.basename($_FILES['imge1']['name']);
$uploadfile2 = $uploaddir.basename($_FILES['imge2']['name']);
$uploadfile3 = $uploaddir.basename($_FILES['imge3']['name']);

move_uploaded_file($_FILES['imge1']['tmp_name'], $uploadfile1);
move_uploaded_file($_FILES['imge2']['tmp_name'], $uploadfile2);
move_uploaded_file($_FILES['imge3']['tmp_name'], $uploadfile3);

$title = $_POST['title'];
$introtext = $_POST['introtext'];
$fulltext = $_POST['fulltext'];
$date = $_POST['date'];
$page = $_POST['id'];
$result = $connection->query("UPDATE `blog` SET `imge`='".$uploadfile1."',`imge2`='".$uploadfile2."',`imge3`='".$uploadfile3."',`title`='$title',`introtext`='$introtext',`fulltext`='$fulltext',`datetime`='$date' WHERE id='$page'");
if($result == true){
header('Location: index.php');
}
else{
	echo "всё плохо";
};
?>




