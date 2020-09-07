<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<?php
require '../database/connection.php';
$page = $_GET['id'];
?>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>Редактирование Статьи</h1>
        </div>
    </div>
        <div class="form-add">
        <form method="post" action="edit.php" id="add-form" enctype="multipart/form-data">
 <?php 
    $edit = $connection->query("SELECT  `title`,`introtext`, `fulltext`, `datetime` FROM `blog` WHERE id='$page'");
      $edit = $edit->FetchAll(PDO::FETCH_ASSOC);
          foreach ($edit as $row) :
             ?>   
            <label for="">
                Название Cтатьи
                <input type="text" name="title" value="<?php echo  htmlspecialchars($row['title'])?>" class="form-item" autofocus required>
            </label>
            <hr class="line-add">           
            <label for="">
                Главная фотография Новости
                <input type="file" name="imge1" class="form-item" autofocus value="<?php echo $row['imge']?>">
            </label>            
            <hr class="line-add">
            <label for="">
                Фотография к посту 
                <input type="file" name="imge2" class="form-item" autofocus value="<?php echo $row['imge2']?>">
            </label>            
            <hr class="line-add"> 
            <label for="">
                Вторая фотография к посту 
                <input type="file" name="imge3" class="form-item" autofocus value="<?php echo $row['imge3']?>">
            </label>            
            <hr class="line-add">          
            <label for="">
                Короткий текст
                <textarea cols="10" rows="10"  type="text" name="introtext" class="form-item"  autofocus required><?php echo ($row['introtext'])?></textarea>
            </label>            
            <hr class="line-add">           
            <label for="">
                Содержимое
                <textarea cols="10" rows="10" type="text" name="fulltext" class="form-item"  autofocus required><?php echo ($row['fulltext']) ?></textarea>                
            </label>
            <label for="">
                Дата
                <input type="date" name="date" class="form-item" value="<?php echo $row['datetime'] ?>" autofocus required >
            </label> 
            <label for="" style="visibility: hidden;">
                id
                <input type="text" name="id" value="<?php echo $page ?>" class="form-item" autofocus required>
            </label>           
            <hr class="line-add">           
            <input type="submit" value="СОХРАНИТЬ" name="submit" class="btn-sub">
        <?php endforeach; ?>
            <hr>
            <a href="index.php" class="btn-back">Назад</a>
        </form>         
        </div>
    </div>
</body>
</html> 
