<?php
require '../database/connection.php';
$result = $connection->prepare("INSERT INTO `blog`(`imge`,`imge2`,`imge3`,`title`,`introtext`, `fulltext`, `datetime`) VALUES (:imge,:imge2,:imge3,:title,:intro,:full,:data)");
  
	$uploaddir='../assets/img/upload/';
	$uploadfile1 = $uploaddir.basename($_FILES['imge1']['name']);
	$uploadfile2 = $uploaddir.basename($_FILES['imge2']['name']);
	$uploadfile3 = $uploaddir.basename($_FILES['imge3']['name']);

	move_uploaded_file($_FILES['imge1']['tmp_name'], $uploadfile1);
	move_uploaded_file($_FILES['imge2']['tmp_name'], $uploadfile2);
	move_uploaded_file($_FILES['imge3']['tmp_name'], $uploadfile3);



	$title = $_POST['title'];
	$introtext = $_POST['introtext'];
	$introtext = mb_strimwidth($introtext, 0, 50, "...");
	$fulltext = $_POST['fulltext'];
	$date = $_POST['date'];




  $result->bindParam(':imge',$uploadfile1);
  $result->bindParam(':imge2',$uploadfile2);
  $result->bindParam(':imge3',$uploadfile3);
  $result->bindParam(':title',$title);
  $result->bindParam(':intro',$introtext);
  $result->bindParam(':full',$fulltext);
  $result->bindParam(':data',$date);

$result->execute();
header('Location: index.php');